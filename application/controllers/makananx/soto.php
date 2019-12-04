<?php


class Soto extends CI_Controller{
    public function index(){


        $data['judul'] = 'Soto Betawi';
        $this->load->view('templates/header', $data);
        $this->load->view('home/makanan/soto');
        $this->load->view('templates/footer');
    }
}