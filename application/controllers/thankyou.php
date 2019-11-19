<?php


class Thankyou extends CI_Controller{
    public function index(){


        $data['judul'] = 'Thankyou';
        $this->load->view('templates/header', $data);
        $this->load->view('home/thankyou');
        $this->load->view('templates/footer');
    }
}