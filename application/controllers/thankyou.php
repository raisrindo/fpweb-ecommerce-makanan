<?php


class Thankyou extends CI_Controller{
    public function index(){


        $is_processed = $this->model_invoice->index();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header');
	        $this->load->view('home/thankyou');
	        $this->load->view('templates/footer');
			
		} else{
			echo "Maaf, Pesanan Anda Gagal Diproses";
		}
    }
}