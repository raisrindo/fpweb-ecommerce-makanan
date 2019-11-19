<?php


class Makananberkuah extends CI_Controller{
    public function index(){


        $data['judul'] = 'Makananberkuah';
        $this->load->view('templates/header', $data);
        $this->load->view('home/kategori/makananberkuah');
        $this->load->view('templates/footer');
    }
}