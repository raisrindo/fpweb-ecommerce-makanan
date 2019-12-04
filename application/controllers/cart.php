<?php


class Cart extends CI_Controller{


    public function index(){


        
        $this->load->view('templates/header');
        $this->load->view('home/cart');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang($id){
		$this->cart->remove($id);
        redirect('cart');
	}

}