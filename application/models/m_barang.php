<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
Class M_barang extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function insert($data){
		$this->db->insert('barang', $data);
	}
	function update($data, $id){
		$this->db->where('idbarang', $id);
		$this->db->update('barang', $data);
		die('tes');
	}
	function get_one($id){
		$data = array();
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('idbarang', $id);
		$hasil = $this->db->get();
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return $data;
		}
	}
/*
	function get_all(){
		$data = array();
		$this->db->select('*');
		$this->db->from('barang');
		$hasil = $this->db->get();
		if($hasil->num_rows() > 0){
			$data = $hasil->result();
		}
		$hasil->free_result();
		return $data;
	}
*/
	function get_all(){
		$this->db->select('*');
		$this->db->from('barang');
		$hasil = $this->db->get();
		return $hasil->result();
	}

	function del_barang($id=''){
		$this->db->where('idbarang', $id);
		$this->db->delete('barang');
	}
}

/* End of file absen_m.php */
/* Location: ./application/models/absen_m.php */