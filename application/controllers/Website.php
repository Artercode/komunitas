<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Website';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/index');
        $this->load->view('templates/footer_sd');
    }

    public function xampp()
    {
        $data['title'] = 'Xampp';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/xampp');
        $this->load->view('templates/footer_sd');
    }

    public function vscode_instalasi()
    {
        $data['title'] = 'VScode_instalasi';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/vscode_instalasi');
        $this->load->view('templates/footer_sd');
    }

    public function vscode_extensions()
    {
        $data['title'] = 'VScode_extensions';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/vscode_extensions');
        $this->load->view('templates/footer_sd');
    }

    public function codeigniter_instalasi()
    {
        $data['title'] = 'Codeigniter_instalasi';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/codeigniter_instalasi');
        $this->load->view('templates/footer_sd');
    }

    public function codeigniter_setting()
    {
        $data['title'] = 'Codeigniter_setting';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/codeigniter_setting');
        $this->load->view('templates/footer_sd');
    }

    public function bootstrap_instalasi()
    {
        $data['title'] = 'Bootstrap_instalasi';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/bootstrap_instalasi');
        $this->load->view('templates/footer_sd');
    }

    public function bootstrap_setting()
    {
        $data['title'] = 'Bootstrap_instalasi';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/bootstrap_setting');
        $this->load->view('templates/footer_sd');
    }

    public function websistem_responsive()
    {
        $data['title'] = 'Web Responsive';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_website');
        $this->load->view('website/websistem_responsive');
        $this->load->view('templates/footer_sd');
    }
}
