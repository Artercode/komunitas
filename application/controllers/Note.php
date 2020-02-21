<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Note extends CI_Controller
{
    public function ilustrasi()
    {
        $data['title'] = 'Ilustrasi';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_note');
        $this->load->view('note/ilustrasi');
        $this->load->view('templates/footer_sd');
    }

    public function dasar_coding()
    {
        $data['title'] = 'Update Modul';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_note');
        $this->load->view('note/dasar_coding');
        $this->load->view('templates/footer_sd');
    }
    public function update_modul()
    {
        $data['title'] = 'Update Modul';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_note');
        $this->load->view('note/update_modul');
        $this->load->view('templates/footer_sd');
    }
}
