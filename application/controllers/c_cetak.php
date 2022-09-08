<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_cetak extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud','crud');
		ini_set('display_errors','off');
		$this->load->helper(
			array('enkripsi','dekripsi')
		);
		if ($this->session->userdata('username') == NULL) {
            redirect('c_login');
        }
	}

	public function index()
	{
		$data = [
			'title' => 'Laporan',
			'kepemilikan'=> $this->crud->pembayaran()
		];
		$this->routes->load('main/dashboard','laporan/laporan',$data);
	}

	public function cetak()
	{
		$id = $this->input->post('id');
		$data = [
			'title' => 'Cetak',
            'data' => $this->crud->pembayaranid($id)
		];

        $this->routes->load('main/dashboard','laporan/cetak',$data);
	}
}
