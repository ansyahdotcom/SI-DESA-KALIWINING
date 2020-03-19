<?php

class First extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
	}

    // ke halaman admin
	public function index()
	{
        $this->load->view("admin/admin");
    }
    
    // ke halaman data kk
    public function kk(){
        $this->load->view("admin/vi_kk");
    }

    // ke halaman data penduduk
    public function pend(){
        $this->load->view("admin/vi_pend");
    }
}