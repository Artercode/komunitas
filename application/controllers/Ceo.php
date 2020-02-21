<?php
// sampai baris 6 harus ada = ini untuk system controller dari codeigniter
defined('BASEPATH') or exit('No direct script access allowed');
// file controllers harus dimulai dengan huruf besar
class Ceo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // untuk menandai halaman yang membutuhkan LOGIN untuk aksesnya
        // untuk cek login atau belum membutuhkan app../helpers
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Profil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // mengarahkan ke halaman index yang ada di folder view
        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar_login', $data);
        $this->load->view('templates/topbar_login', $data);
        $this->load->view('user/index', $data); // halaman yang akan ditampilkan
        $this->load->view('templates/footer_login');  // disini footer kebetulan aja gak butuh data
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // mengambil data dari database untuk isi tabel
        $data['role'] = $this->db->get('user_role')->result_array();
        // mengarahkan ke halaman index yang ada di folder view

        $this->form_validation->set_rules('role', 'Role', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_login', $data);
            $this->load->view('templates/sidebar_login', $data);
            $this->load->view('templates/topbar_login', $data);
            $this->load->view('ceo/role', $data);
            $this->load->view('templates/footer_login');
        } else {
            // menambah database -> tabel user_menu
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('tambahRole', '<div class="alert alert-success" role="alert">Role baru berhasil ditambahkan!</div>');
            redirect('ceo/role');
        }
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        // supaya check list untuk ceo tidak nampak
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar_login', $data);
        $this->load->view('templates/topbar_login', $data);
        $this->load->view('ceo/roleaccess', $data);
        $this->load->view('templates/footer_login');
    }

    // method untuk ajak yang di bagian footer
    public function changeAccess()
    {
        // mengambil data dari ajak
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');
        // ambil data dari ajak cek ke database user_access_menu
        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $result = $this->db->get_where('user_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        // alert
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Access berhasil dirubah!</div>');
    }

    public function menu()
    {
        $data['title'] = 'Menu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == false) {
            // mengarahkan ke halaman ceo/menu di folder view
            $this->load->view('templates/header_login', $data);
            $this->load->view('templates/sidebar_login', $data);
            $this->load->view('templates/topbar_login', $data);
            $this->load->view('ceo/menu', $data);
            $this->load->view('templates/footer_login');
        } else {
            // menambah database -> tabel user_menu
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('tambahMenu', '<div class="alert alert-success" role="alert">Menu baru berhasil ditambahkan!</div>');
            redirect('ceo/menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Submenu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // untuk tampilan tabel bagian menu - Menu_model teletak di app../confic/models
        $this->load->model('Menu_model', 'menu');
        $data['submenu'] = $this->menu->getSubmenu();
        // untuk tapilan pilihan dalam modal yang diambil dari tabel user_menu
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_login', $data);
            $this->load->view('templates/sidebar_login', $data);
            $this->load->view('templates/topbar_login', $data);
            $this->load->view('ceo/submenu', $data);
            $this->load->view('templates/footer_login');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            // menambah database -> table user_sub_menu
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('tambahSubmenu', '<div class="alert alert-success" role="alert">Submenu baru berhasil ditambahkan!</div>');
            redirect('ceo/submenu');
        }
    }


    public function hapusRole($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
        $this->session->set_flashdata('hapusRole', '<div class="alert alert-danger" role="alert">Data role berhasil dihapus!</div>');
        redirect('ceo/role');
    }

    public function hapusMenu($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
        $this->session->set_flashdata('hapusMole', '<div class="alert alert-danger" role="alert">Data menu berhasil dihapus!</div>');
        redirect('ceo/menu');
    }

    public function hapusSubmenu($id)
    {
        $this->db->delete('user_sub_menu', ['id' => $id]);
        $this->session->set_flashdata('hapusSubmenu', '<div class="alert alert-danger" role="alert">Data submenu berhasil dihapus!</div>');
        redirect('ceo/submenu');
    }


    public function editRole()
    {
        $data['title'] = 'Edit role';

        $data['role'] = $this->db->get_where('user_role', ['id' =>
        $this->session->userdata('id')])->row_array();

        $this->form_validation->set_rules('role', 'Role', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_login', $data);
            $this->load->view('templates/sidebar_login', $data);
            $this->load->view('templates/topbar_login', $data);
            $this->load->view('ceo/role', $data);
            // footer gak butuh data
            $this->load->view('templates/footer_login');
        } else {
            // menambah database -> tabel user_menu
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('editRole', '<div class="alert alert-success" role="alert">Role berhasil di edit!</div>');
            redirect('ceo/role');
        }
    }

    public function editMenu()
    {
        $data['title'] = 'Edit Menu';
        $data['menu'] = $this->db->get_where('menu', ['id' =>
        $this->session->userdata('id')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->row_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar_login', $data);
        $this->load->view('templates/topbar_login', $data);
        $this->load->view('ceo/menu', $data);
        $this->load->view('templates/footer_login');
    }

    public function editSubmenu($id)
    {
        $data['title'] = 'Edit Submenu';

        $this->load->model('Menu_model', 'menu');
        $data['submenu'] = $this->menu->getSubmenu($id);
        // untuk tapilan pilihan dalam modal yang diambil dari tabel user_menu
        $data['menu'] = $this->db->get('user_sub_menu')->row_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_login', $data);
            $this->load->view('templates/sidebar_login', $data);
            $this->load->view('templates/topbar_login', $data);
            $this->load->view('ceo/submenu', $data);
            $this->load->view('templates/footer_login');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            // edit database di tabel user_sub_menu
            $this->db->where('id', $id);
            $this->db->update('user_sub_menu', $data);
            $this->session->set_flashdata('editsubmenu', '<div class="alert alert-success" role="alert">Edit submenu berhasil!</div>');
            redirect('ceo/submenu');
        }
    }
}
