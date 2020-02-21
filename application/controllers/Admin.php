<?php
defined('BASEPATH') or exit('No direct script access allowed');
// User.php gunakan huruf besar untuk membedakan controllers
class Admin extends CI_Controller
{
    // cek untuk sudah login atau belum
    public function __construct()
    {
        parent::__construct();
        // helpers yang kita buat sendiri untuk cek login atau belum
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // mengarahkan ke halaman index yang ada di folder view
        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar_login', $data);
        $this->load->view('templates/topbar_login', $data);
        $this->load->view('admin/index', $data);
        // footer gak butuh data
        $this->load->view('templates/footer_login');
    }
}
