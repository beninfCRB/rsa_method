<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_pemilik extends CI_Controller
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

    private function _validasi()
    {
        $this->form_validation->set_rules('petugas_id', 'Petugas', 'required');
        $this->form_validation->set_rules('nik', 'Nomor Induk Kependudukan', 'required');
        $this->form_validation->set_rules('nama_pemilik', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required');
    }

    public function index()
    {
        $data = [
			'title' => 'Pemilik',
            'data' => $this->crud->withjoin('pemilik','petugas','petugas_id=id_petugas')
		];

		$this->routes->load('main/dashboard','pemilik/index',$data);
    }

    public function add()
    {
        $data = [
			'title' => 'Pemilik',
            'petugas' => $this->crud->findall('petugas'),
            'pemilik' => $this->crud->findall('pemilik')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','pemilik/add',$data);
        }else{
            $this->create();
        }
    }

    public function create()
    {
        if($this->input->post('type_of_pemilik')==null){
            $data = $data = $this->fungsi->inputOf('pemilik',['petugas_id','nik','nama_pemilik','alamat','type_of_pemilik']);
        }elseif($this->input->post('type_of_pemilik')=='enc'){
            $data = $data = $this->fungsi->input('pemilik',['petugas_id','nik','nama_pemilik','alamat','type_of_pemilik']);
        }
        $this->crud->create('pemilik',$data);
		set_pesan('data berhasil disimpan.');
		redirect('c_pemilik');
    }

    public function edit($id)
    {
        $data = [
			'title' => 'Pemilik',
            'data' => $this->crud->findone('pemilik',$id),
            'petugas' => $this->crud->findall('petugas')
		// 
    ];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','pemilik/edit',$data);
        }else{
            $this->update($id);
        }
    }

    public function update($id)
    {
        if($this->input->post('type_of_pemilik')==null){
            $data = $data = $this->fungsi->inputOf('pemilik',['petugas_id','nik','nama_pemilik','alamat','type_of_pemilik'],false);
        }elseif($this->input->post('type_of_pemilik')=='enc'){
            $data = $data = $this->fungsi->input('pemilik',['petugas_id','nik','nama_pemilik','alamat','type_of_pemilik'],false);
        }
        $this->crud->update('pemilik',$id,$data);

		set_pesan('data berhasil diubah.');
		redirect('c_pemilik');
    }

    public function view($id)
    {
        $data = [
			'title' => 'Pemilik',
            'data' =>  $this->crud->withjoinid('pemilik','petugas','petugas_id=id_petugas','id_pemilik',$id)
		];
        $this->routes->load('main/dashboard','pemilik/view',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_pemilik', $id);
        $this->db->delete('pemilik');
        set_pesan('data berhasil dihapus.');
        redirect('c_pemilik');
    }
}