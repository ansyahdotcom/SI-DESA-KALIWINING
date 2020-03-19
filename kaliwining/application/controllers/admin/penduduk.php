<?php

class Penduduk extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_penduduk');
		$this->load->helper('url');
				
	}
	
	// menampilkan data pada tabel penduduk
	/*nama tabel -> modal -> function model
	ambil data dari tabel penduduk yg ada di function tampil data pada model penduduk, 
	lalu parsing data ke v penduduk */
		function index(){
		
		$data['penduduk'] = $this->m_penduduk->data_pend()->result();
		$this->load->view('admin/vi_pend',$data);
	}
	
	// tambah data masuk ke halaman vi tmbh pend
	function tambah_pend(){
		$this->load->view('admin/vi_tmbh_pend');
	}

	// proses ubah data
	/* tangkap data lalu jadikan array
	di load di model tmbh data dan balik ke halaman awal */
	function pr_tambah_pnd(){
		$NO = $this->input->post('NO');
		$NAMA = $this->input->post('NAMA');
		$NIK = $this->input->post('NIK');
		$KK = $this->input->post('KK');
		$JK = $this->input->post('JK');
		$TPT_LHR = $this->input->post('TPT_LHR');
		$TGL_LHR = $this->input->post('TGL_LHR');
		$AGAMA = $this->input->post('AGAMA');
		$PENDIDIKAN = $this->input->post('PENDIDIKAN');
		$PEKERJAAN = $this->input->post('PEKERJAAN');
 
		$data = array(
			'NO' => $NO,
			'NAMA' => $NAMA,
			'NIK' => $NIK,
			'KK' => $KK,
			'JK' => $JK,
			'TPT_LHR' => $TPT_LHR,
			'TGL_LHR' => $TGL_LHR,
			'AGAMA' => $AGAMA,
			'PENDIDIKAN' => $PENDIDIKAN,
			'PEKERJAAN' => $PEKERJAAN
			);
		$this->m_penduduk->tmbh_data($data,'penduduk');
		redirect('admin/penduduk/index');
	}

	// hapus data berdasarkan nomor
	function hapus_pnd($NO){
		$where = array('NO' => $NO);
		$this->m_penduduk->hapus_data($where,'penduduk');
		redirect('admin/penduduk/index');
	}

	// ke halaman ubah data
	function ubah_pnd($NO){
		$where = array('NO' => $NO);
		$data['penduduk'] = $this->m_penduduk->ubah_data($where,'penduduk')->result();
		$this->load->view('admin/vi_ubah_pend',$data);
	}

	// proses ubah data
	function pr_ubah_pnd(){
		$NO = $this->input->post('NO');
		$NAMA = $this->input->post('NAMA');
		$NIK = $this->input->post('NIK');
		$KK = $this->input->post('KK');
		$JK = $this->input->post('JK');
		$TPT_LHR = $this->input->post('TPT_LHR');
		$TGL_LHR = $this->input->post('TGL_LHR');
		$AGAMA = $this->input->post('AGAMA');
		$PENDIDIKAN = $this->input->post('PENDIDIKAN');
		$PEKERJAAN = $this->input->post('PEKERJAAN');
	 
		$data = array(
			'NAMA' => $NAMA,
			'NIK' => $NIK,
			'KK' => $KK,
			'JK' => $JK,
			'TPT_LHR' => $TPT_LHR,
			'TGL_LHR' => $TGL_LHR,
			'AGAMA' => $AGAMA,
			'PENDIDIKAN' => $PENDIDIKAN,
			'PEKERJAAN' => $PEKERJAAN
		);
	 
		$where = array(
			'NO' => $NO
		);
		// masuk ke model dengan nama function update data masuk ke tabel penduduk  
		$this->m_penduduk->pr_ubah_data($where,$data,'penduduk');
		// balik halaman penduduk
		redirect('admin/penduduk/index');
	}
    
}