<?php


class Semurjengkol extends CI_Controller{
    public function index(){


        $data['judul'] = 'Semur Jengkol';
        $this->load->view('templates/header', $data);
        $this->load->view('home/makanan/semurjengkol');
        $this->load->view('templates/footer');
    }
}