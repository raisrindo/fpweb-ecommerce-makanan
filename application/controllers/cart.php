<?php


class Cart extends CI_Controller{
    public function index(){


        $data['judul'] = 'Cart';
        $this->load->view('templates/header', $data);
        $this->load->view('home/cart');
        $this->load->view('templates/footer');
    }
}