<?php


class Shop extends CI_Controller{
    public function index(){


        $data['judul'] = 'About';
        $this->load->view('templates/header', $data);
        $this->load->view('home/shop');
        $this->load->view('templates/footer');
    }
}