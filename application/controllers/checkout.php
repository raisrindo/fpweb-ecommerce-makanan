<?php


class Checkout extends CI_Controller{
    public function index(){


        $data['judul'] = 'Checkout';
        $this->load->view('templates/header', $data);
        $this->load->view('home/checkout');
        $this->load->view('templates/footer');
    }



 //    public function proses_pesanan(){

	// 	$is_processed = $this->model_invoice->index();
	// 	if($is_processed){
	// 		$this->cart->destroy();
	// 		$this->load->view('templates/header');
	//         $this->load->view('home/thankyou');
	//         $this->load->view('templates/footer');
			
	// 	} else{
	// 		echo "Maaf, Pesanan Anda Gagal Diproses";
	// 	}

	// }


}