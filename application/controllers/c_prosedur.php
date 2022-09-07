<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_prosedur extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
        $this->load->model('m_crud','crud');
        ini_set('display_errors','off');
        if ($this->session->userdata('username') == NULL) {
            redirect('c_login');
        }
	}

    public function index()
    {
        $data = [
            'title'=>'Prosedur Pajak',
            'kepemilikan' => $this->crud->_count('kepemilikan'),
            'pendaftaran' => $this->crud->_count('pendaftaran'),
            'pengecekan' => $this->crud->_count('pengecekan'),
            'penetapan' => $this->crud->_count('penetapan'),
            'pembayaran' => $this->crud->_count('pembayaran')
        ];

        $this->routes->load('main/dashboard','prosedur',$data);
    }
}