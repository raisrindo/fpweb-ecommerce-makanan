<?php


class Taugegoreng extends CI_Controller{
    public function index(){


        $data['judul'] = 'Tauge Goreng';
        $this->load->view('templates/header', $data);
        $this->load->view('home/taugegoreng');
        $this->load->view('templates/footer');
    }
}