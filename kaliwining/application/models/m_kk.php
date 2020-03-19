<?php

class M_kk extends CI_Model{
	// menampilkan data kk
	function data_kk(){
        // ambil data dari tabel penduduk
		$data=$this->db->query("SELECT * FROM kk ORDER BY kk.NO ASC");
		return $data;
	}
	
	// tambah data
	function tmbh_data($data,$table){
		$this->db->insert($table,$data);
	}

	// hapus data
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	// ubah data
	function ubah_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	// proses ubah data
	function pr_ubah_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}