<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arsip extends CI_Controller
{
    public function website()
    {
        $data['title'] = 'Arsip';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_arsip');
        $this->load->view('arsip/website');
        $this->load->view('templates/footer_sd');
    }
}
