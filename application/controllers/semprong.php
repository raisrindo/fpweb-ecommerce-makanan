<?php


class Semprong extends CI_Controller{
    public function index(){


        $data['judul'] = 'Semprong';
        $this->load->view('templates/header', $data);
        $this->load->view('home/makanan/semprong');
        $this->load->view('templates/footer');
    }
}