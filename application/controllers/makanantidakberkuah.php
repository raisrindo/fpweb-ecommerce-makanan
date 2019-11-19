<?php


class Makanantidakberkuah extends CI_Controller{
    public function index(){


        $data['judul'] = 'Makanantidakberkuah';
        $this->load->view('templates/header', $data);
        $this->load->view('home/kategori/makanantidakberkuah');
        $this->load->view('templates/footer');
    }
}