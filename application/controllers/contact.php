<?php


class Contact extends CI_Controller{
    public function index(){


        $data['judul'] = 'About';
        $this->load->view('templates/header', $data);
        $this->load->view('home/contact');
        $this->load->view('templates/footer');
    }
}