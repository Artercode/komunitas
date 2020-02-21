<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Yangkumau extends CI_Controller
{
    public function website()
    {
        $data['title'] = 'Website';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_yangkumau');
        $this->load->view('yangkumau/website');
        $this->load->view('templates/footer_sd');
    }
    public function android_app()
    {
        $data['title'] = 'Android App';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_yangkumau');
        $this->load->view('yangkumau/android_app');
        $this->load->view('templates/footer_sd');
    }
}
