<?php


class Nasiuduk extends CI_Controller{
    public function index(){


        $data['judul'] = 'Nasi Uduk';
        $this->load->view('templates/header', $data);
        $this->load->view('home/makanan/nasiuduk');
        $this->load->view('templates/footer');
    }
}