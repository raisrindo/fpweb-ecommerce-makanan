<?php


class Ketoprak extends CI_Controller{
    public function index(){


        $data['judul'] = 'Ketoprak';
        $this->load->view('templates/header', $data);
        $this->load->view('home/makanan/ketoprak');
        $this->load->view('templates/footer');
    }
}