<?php


class Checkout extends CI_Controller{
    public function index(){


        $data['judul'] = 'Checkout';
        $this->load->view('templates/header', $data);
        $this->load->view('home/checkout');
        $this->load->view('templates/footer');
    }

    




}