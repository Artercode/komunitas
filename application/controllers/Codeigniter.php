<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Codeigniter extends CI_Controller
{
    public function instalasi()
    {
        $data['title'] = 'Codeigniter';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('codeigniter/instalasi');
        $this->load->view('templates/footer_sd');
    }


    public function setting()
    {
        $data['title'] = 'Codeigniter';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('codeigniter/setting');
        $this->load->view('templates/footer_sd');
    }
}
