<?php


class Login extends CI_Controller{
    public function index(){


        $data['judul'] = 'Login';
        $this->load->view('templates/header', $data);
        $this->load->view('home/login');
        $this->load->view('templates/footer');
    }
}