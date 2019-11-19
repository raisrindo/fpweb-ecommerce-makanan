<?php


class Gabuspucung extends CI_Controller{
    public function index(){


        $data['judul'] = 'Gabus Pucung';
        $this->load->view('templates/header', $data);
        $this->load->view('home/gabuspucung');
        $this->load->view('templates/footer');
    }
}