<?php


class Shop extends CI_Controller{

    public function index(){


        $data['barang'] = $this->model_barang->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('home/shop' , $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id){

    	if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth/login');

		} else{
			$barang = $this->model_barang->find($id);

			$data = array(
			        'id'      => $barang->id_brg,
			        'qty'     => 1,
			        'price'   => $barang->harga,
			        'name'    => $barang->nama_brg
			        
			);

			$this->cart->insert($data);
			redirect('shop');

		}

		
	}


	public function detail($id_brg){
		$data['barang'] = $this->model_barang->detail_brg($id_brg );
		$this->load->view('templates/header');
		$this->load->view('home/detail_barang', $data);
		$this->load->view('templates/footer');	
	}




}