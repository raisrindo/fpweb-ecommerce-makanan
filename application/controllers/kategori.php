<?php 


class Kategori extends CI_Controller{

	public function makanan_berkuah(){
		$data['makanan_berkuah'] = $this->model_kategori->data_makanan_berkuah()->result();
		$this->load->view('templates/header');
		$this->load->view('home/makanan_berkuah', $data);
		$this->load->view('templates/footer');

	}

	public function makanan_tberkuah(){
		$data['makanan_tberkuah'] = $this->model_kategori->data_makanan_tberkuah()->result();
		$this->load->view('templates/header');
		$this->load->view('home/makanan_tberkuah',$data);
		$this->load->view('templates/footer');

	}

	public function makanan_ringan(){
		$data['makanan_ringan'] = $this->model_kategori->data_makanan_ringan()->result();
		$this->load->view('templates/header');
		$this->load->view('home/makanan_ringan',$data);
		$this->load->view('templates/footer');

	}





}