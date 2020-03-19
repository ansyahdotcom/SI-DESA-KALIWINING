<?php

class Kk extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kk'); // load model kk
		$this->load->helper('url');
				
	}
	
	// menampilkan data pada tabel kk
	function index(){
		// nama tabel -> modal -> function model
		// ambil data dari tabel kk yg ada di function tampil data pada model kk, lalu parsing data ke v kk
		$data['kk'] = $this->m_kk->data_kk()->result();
		$this->load->view('admin/vi_kk',$data);
	}
	
	// tambah data masuk ke halaman v tmbh kk
	function tambah_kk(){
		$this->load->view('admin/vi_tmbh_kk');
	}

	// proses tambah data
	function pr_tmbh_kk(){
		// isi data
		$NO = $this->input->post('NO');
		$KK = $this->input->post('KK');
		$RT = $this->input->post('RT');
		$RW = $this->input->post('RW');
		$KEPALA = $this->input->post('KEPALA');
		$ALAMAT = $this->input->post('ALAMAT');
 
		// jadikan array
		$data = array(
			'NO' => $NO,
			'KK' => $KK,
			'RT' => $RT,
			'RW' => $RW,
			'KEPALA' => $KEPALA,
			'ALAMAT' => $ALAMAT
			);
		
		$this->m_kk->tmbh_data($data,'kk');		// masukkan data ke tabel kk
		redirect('admin/kk/index');	// balik ke halaman awal
	}

	// hapus data
	function hapus_kk($NO){
		
		$where = array('NO' => $NO);	// berdasarkan nomor
		$this->m_kk->hapus_data($where,'kk');	//load dengan model hapus data
		redirect('admin/kk/index');	// balik ke halaman awal
	}

	/* ke halaman ubah data
	ambil nilai nomor lalu masuk ke halaman ubah data */
	function ubah_kk($NO){
		$where = array('NO' => $NO);
		$data['kk'] = $this->m_kk->ubah_data($where,'kk')->result();
		$this->load->view('admin/vi_ubah_kk',$data);
	}

	// proses ubah data
	/* ambil data lalu jadikan array. ubah berdasarkan nomor. 
	di load di model pr ubah data lalu balik ke halaman awal. */
	function pr_ubah_kk(){
		$NO = $this->input->post('NO');
		$KK = $this->input->post('KK');
		$RT = $this->input->post('RT');
		$RW = $this->input->post('RW');
		$ALAMAT = $this->input->post('ALAMAT');
		$KEPALA = $this->input->post('KEPALA');
	 
		$data = array(
			'KK' => $KK,
			'RT' => $RT,
			'RW' => $RW,
			'ALAMAT' => $ALAMAT,
			'KEPALA' => $KEPALA
		);
	 
		$where = array(
			'NO' => $NO
		);
		$this->m_kk->pr_ubah_data($where,$data,'kk');
		redirect('admin/kk/index');
	}
    
}