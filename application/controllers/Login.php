<?php
defined('BASEPATH') or exit('No direct script access allowed');
// merubah setting codeigniter dari welcome.php ke Login.php
// untuk setting perubahan ada di application/config/router.php
// file controllers harus dimulai dengan huruf besar
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // menjalankan form_validation di config/autoload.php (baris 61)
        $this->load->library('form_validation');
    }

    // bagian login
    public function index()
    {
        // supaya tidak mengunakan url untuk masuk halaman lain
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        // trim = menghilangkan spasi bagian depan dan belakan dari input ke database
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'LOGIN';
            $this->load->view('templates/login_header', $data);
            $this->load->view('login/login');
            $this->load->view('templates/login_footer');
        } else {
            // bila validasi berhasil
            $this->_login();
        }
    }

    // bagian login privat (admin) megunakan penanda _ (bebas hanya sebagai penanda saja)
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        // ambil data user dan bandingkan data yang ada di database
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // bila email sudah di registrasi / ada
        if ($user) {
            // bila emailnya sudah di aktivasi
            if ($user['is_active'] == 1) {
                // cek password bandingkan yang ada dalam database
                if (password_verify($password, $user['password'])) {
                    // bila email dan password benar maka cari jenis role nya
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    // mengset session dalam sebuah data
                    $this->session->set_userdata($data);
                    // mengarahkan ke halaman awal login
                    if ($user['role_id'] == 1) {
                        redirect('ceo/role');
                    } else {
                        if ($user['role_id'] == 2) {
                            redirect('user');
                        } else {
                            redirect('admin');
                        }
                    }
                } else {
                    // alert bila email terdaftar+aktivasi tapi password salah
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password tidak sesuai!</div>');
                    redirect('login');
                }
            } else {
                // alert bila email yang belum di aktivasi
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum di aktivasi!</div>');
                redirect('login');
            }
        } else {
            // alert bila email yg belum di regiatrasi
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum di registrasi!</div>');
            redirect('login');
        }
    }

    // bagian registrasi
    public function registration()
    {
        // supaya dari url user gak bisa ke url auth
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        // aturan pengisian name = harus diisi / menghilangkan spasi di database
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        // aturan pengisian email / harus diisi / cek email atau bukan / email unik
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        // aturan pengisian password / min panjang / harus cocok dengan password2
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        // bila validasi gagal
        if ($this->form_validation->run() == false) {
            // bila validasi gagal akan menampilkan form registrasi kembali
            $data['title'] = 'Registrasi';  // mengisikan title di head
            $this->load->view('templates/login_header', $data);
            $this->load->view('login/registration');
            $this->load->view('templates/login_footer');
        } else {
            // bila validasi berhasil harus urut sesuai yang ada di database
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];
            // siapkan token password untuk aktivasi
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            // setting database di application/config/database.php
            // memasukan data ke database 
            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);
            // kirim email ke alamat registrasi baru
            $this->_sendEmail($token, 'verify');
            // alert bila sudah register dan menunggu aktivasi
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Selamat registrasi berhasil, Silahkan aktivasi anda dalam 24jam</div>');
            redirect('login');
        }
    }

    // kirim email ke anggota baru untuk klarifikasi
    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'emailactivationkc@gmail.com.com',
            'smtp_pass' => '',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];
        $this->email->initialize($config);

        $this->email->from('emailactivationkc@gmail.com', 'Komunitas Coding');
        $this->email->to($this->input->post('email'));
        // klarivikasi untuk akun baru atau lupa password
        if ($type == 'verify') {
            $this->email->subject('Klarivikasi Akun');
            $this->email->message('klik link untuk aktivasi Akun : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktivasi</a>');
        } else if ($type == 'lupa') {
            $this->email->subject('Reset Password');
            $this->email->message('klik link untuk reset password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    // klarifikasi email untuk anggota baru
    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // email cocok atau tidak
        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            // token cocok atau tidak
            if ($user_token) {
                // validasi time abis atau tidak
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    // kalau semua benar
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');
                    // hapus user_token saja anggota baru, sudah tidak terpakai
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' sudah diaktifkan! silahkan login!</div>');
                    redirect('login');
                } else {
                    // jika waktu abis data yang tidak terpakai di hapus (user dan user_token)
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun aktivasi gagal! Token kedaluwarsa untuk 24jam!</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun aktivasi gagal! Token salah!</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi Akun gagal! Email salah!</div>');
            redirect('login');
        }
    }

    // logout untuk membersihkan data session dalam computer
    public function logout()
    {
        // penghapusan data email dan role_id di dalam computer
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        // alert bila logout sudah berhasil
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout, data anda sudah dibersihkan!</div>');
        // kemali ke login
        redirect('aula');
    }

    public function blocked()
    {
        $this->load->view('login/blocked');
    }

    public function lupapassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Lupa Password';
            $this->load->view('templates/login_header', $data);
            $this->load->view('login/lupapassword');
            $this->load->view('templates/login_footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'is_active => 1'])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];
                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'lupa');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Periksa email untuk reset password!</div>');
                redirect('login/lupapassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar / belum di aktivasi!</div>');
                redirect('login/lupapassword');
            }
        }
    }

    public function resetpassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // cek email ada atau tidak
        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            // cek token sesuai dengan database atau tidak
            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->ubahpassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal! Token salah!</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal! Email tidak terdaftar!</div>');
            redirect('login');
        }
    }

    public function ubahpassword()
    {
        // supaya kalau ubah password harus lewat email
        if (!$this->session->userdata('reset_email')) {
            redirect('login');
        }

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Ulang Password', 'required|trim|min_length[6]|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Ubah Password';
            $this->load->view('templates/login_header', $data);
            $this->load->view('login/ubahpassword');
            $this->load->view('templates/login_footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah! Silahkan Login!</div>');
            redirect('login');
        }
    }
}
