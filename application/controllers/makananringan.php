<?php


class Makananringan extends CI_Controller{
    public function index(){


        $data['judul'] = 'Makananringan';
        $this->load->view('templates/header', $data);
        $this->load->view('home/kategori/makananringan');
        $this->load->view('templates/footer');
    }
}