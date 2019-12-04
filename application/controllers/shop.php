<?php


class Shop extends CI_Controller{
    public function index(){


        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('home/shop');
        $this->load->view('templates/footer');
    }
}