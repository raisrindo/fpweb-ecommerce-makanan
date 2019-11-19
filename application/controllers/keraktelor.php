<?php


class Keraktelor extends CI_Controller{
    public function index(){


        $data['judul'] = 'Kerak telor';
        $this->load->view('templates/header', $data);
        $this->load->view('home/makanan/keraktelor');
        $this->load->view('templates/footer');
    }
}