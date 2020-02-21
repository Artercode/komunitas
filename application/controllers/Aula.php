<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aula extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Aula';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_aula');
        $this->load->view('aula/index');
        $this->load->view('templates/footer_sd');
    }

    public function tanya()
    {
        $data['title'] = 'Aula Tanya';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_aula');
        $this->load->view('aula/tanya');
        $this->load->view('templates/footer_sd');
    }

    public function projek()
    {
        $data['title'] = 'Aula Projek';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_aula');
        $this->load->view('aula/projek');
        $this->load->view('templates/footer_sd');
    }

    public function grup_coding()
    {
        $data['title'] = 'Grup Coding';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_aula');
        $this->load->view('aula/grup_coding');
        $this->load->view('templates/footer_sd');
    }

    public function pustaka()
    {
        $data['title'] = 'Pustaka';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_aula');
        $this->load->view('aula/pustaka');
        $this->load->view('templates/footer_sd');
    }
}
