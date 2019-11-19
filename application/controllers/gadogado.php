<?php


class Gadogado extends CI_Controller{
    public function index(){


        $data['judul'] = 'Gado-gado';
        $this->load->view('templates/header', $data);
        $this->load->view('home/gadogado');
        $this->load->view('templates/footer');
    }
}