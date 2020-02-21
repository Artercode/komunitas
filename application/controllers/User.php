<?php
// sampai baris 6 harus ada = ini untuk system controller dari codeigniter
defined('BASEPATH') or exit('No direct script access allowed');
// file controllers harus dimulai dengan huruf besar
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // untuk menandai halaman yang membutuhkan LOGIN untuk aksesnya
        // untuk cek login atau belum membutuhkan app../helpers
        is_logged_in();
    }
    // file index akan dijalankan dulu secara otomatis
    public function index()
    {
        $data['title'] = 'Profil';
        // mengambil semua data user di database berdasarkan login email (session)
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // buat load semua temlates yang terpecah (harus berurutan)
        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar_login', $data);
        $this->load->view('templates/topbar_login', $data);
        $this->load->view('user/index', $data); // halaman yang akan ditampilkan
        $this->load->view('templates/footer_login'); // disini footer kebetulan aja gak butuh data
    }

    public function ubahpassword()
    {
        $data['title'] = 'Profil';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // aturan pengisian form
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('password_baru1', 'Password Baru', 'required|trim|min_length[6]|matches[password_baru2]');
        $this->form_validation->set_rules('password_baru2', 'Ulangi Password', 'required|trim|min_length[6]|matches[password_baru1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_login', $data);
            $this->load->view('templates/sidebar_login', $data);
            $this->load->view('templates/topbar_login', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/footer_login');
        } else {
            // ambil data dari form ubah password
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password_baru1');
            // klarifikasi password lama dengan database
            if (!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama salah!</div>');
                redirect('user');
            } else {
                // kalau password sama yang lama dengan yang baru
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru sama dengan password lama!</div>');
                    redirect('user');
                } else {
                    // password baru sudah lolos dan update database
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    // pesan berhasil ubah password
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
                    redirect('user');
                }
            }
        }
    }

    public function editprofile()
    {
        $data['title'] = 'Profil';  // title harus sama dengan yang ada di database
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            // menyusun kembali pecahan templates - harus urut
            $this->load->view('templates/header_login', $data);
            $this->load->view('templates/sidebar_login', $data);
            $this->load->view('templates/topbar_login', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/footer_login');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            // cek jika ada foto yang diupload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/profile/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil sudah berhasil update!</div>');
            redirect('user');
        }
    }

    public function tanya()
    {
        $data['title'] = 'Tanya';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar_login', $data);
        $this->load->view('templates/topbar_login', $data);
        $this->load->view('user/tanya', $data);
        $this->load->view('templates/footer_login');
    }

    public function projek()
    {
        $data['title'] = 'Projek';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar_login', $data);
        $this->load->view('templates/topbar_login', $data);
        $this->load->view('user/projek', $data);
        $this->load->view('templates/footer_login');
    }
}
