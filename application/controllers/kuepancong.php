<?php


class Kuepancong extends CI_Controller{
    public function index(){


        $data['judul'] = 'Kue Pancong';
        $this->load->view('templates/header', $data);
        $this->load->view('home/makanan/gadogado');
        $this->load->view('templates/footer');
    }
}