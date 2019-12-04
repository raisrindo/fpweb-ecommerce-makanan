<?php


class Ketupat extends CI_Controller{
    public function index(){


        $data['judul'] = 'Ketupat Babanci';
        $this->load->view('templates/header', $data);
        $this->load->view('home/makanan/ketupat');
        $this->load->view('templates/footer');
    }
}