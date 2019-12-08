<?php 

class Model_kategori extends CI_Model
{
	
	public function data_makanan_berkuah(){
		return $this->db->get_where("tb_barang",array('kategori'=>'makanan berkuah'));
	}
	public function data_makanan_tberkuah(){
		return $this->db->get_where("tb_barang", array('kategori' => 'makanan tidak berkuah'));
	}
	public function data_makanan_ringan(){
		return $this->db->get_where("tb_barang", array('kategori' => 'makanan ringan'));
	}
	
}