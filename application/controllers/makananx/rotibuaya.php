<?php


class Rotibuaya extends CI_Controller{
    public function index(){


        $data['judul'] = 'Roti Buaya';
        $this->load->view('templates/header', $data);
        $this->load->view('home/makanan/rotibuaya');
        $this->load->view('templates/footer');
    }
}