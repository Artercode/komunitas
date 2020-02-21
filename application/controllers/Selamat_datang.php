<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Selamat_datang extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Selamat Datang';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_sd');
        $this->load->view('selamat_datang/index');
        $this->load->view('templates/footer_sd');
    }

    public function sekedar_tau()
    {
        $data['title'] = 'Sekedar Tau';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_sd');
        $this->load->view('selamat_datang/sekedar_tau');
        $this->load->view('templates/footer_sd');
    }

    public function camp()
    {
        $data['title'] = 'Sekedar Tau';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_sd');
        $this->load->view('selamat_datang/camp');
        $this->load->view('templates/footer_sd');
    }
}
