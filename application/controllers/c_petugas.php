<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_petugas extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('m_crud','crud');
        ini_set('display_errors','off');ini_set('display_errors','off');
        if ($this->session->userdata('username') == NULL) {
            redirect('c_login');
        }
	}

    private function _validasi()
    {
        $this->form_validation->set_rules('kode_petugas', 'Kode Petugas', 'required');
        $this->form_validation->set_rules('nama_petugas', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
    }

    public function index()
    {
        $data = [
			'title' => 'Petugas',
            'data' => $this->crud->findall('petugas')
		];

		$this->routes->load('main/dashboard','petugas/index',$data);
    }

    public function add()
    {
        $data = [
			'title' => 'Petugas',
            'petugas'=>$this->crud->findall('petugas')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','petugas/add',$data);
        }else{
            $this->create();
        }
    }

    public function create()
    {
        //menentukan enkripsi & dekripsi
        if($this->input->post('type_of_petugas') == null){
            $data = $this->fungsi->inputOf('petugas',['kode_petugas','nama_petugas','jenis_kelamin','jabatan','type_of_petugas']);
        }elseif($this->input->post('type_of_petugas') == 'enc'){
            $data = $this->fungsi->input('petugas',['kode_petugas','nama_petugas','jenis_kelamin','jabatan','type_of_petugas']);
        }

        $this->crud->create('petugas',$data);

		set_pesan('data berhasil disimpan.');
		redirect('c_petugas');
    }

    public function edit($id)
    {
        $data = [
			'title' => 'Petugas',
            'data' => $this->crud->findone('petugas',$id)
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','petugas/edit',$data);
        }else{
            $this->update($id);
        }
    }

    public function update($id)
    {
        //menentukan enkripsi & dekripsi
        if($this->input->post('type_of_petugas') == null){
            $data = $this->fungsi->inputOf('petugas',['kode_petugas','nama_petugas','jenis_kelamin','jabatan','type_of_petugas'],false);
        }elseif($this->input->post('type_of_petugas') == 'enc'){
            $data = $this->fungsi->input('petugas',['kode_petugas','nama_petugas','jenis_kelamin','jabatan','type_of_petugas'],false);
        }

        $this->crud->update('petugas',$id,$data);

		set_pesan('data berhasil diubah.');
		redirect('c_petugas');
    }

    public function view($id)
    {
        $data = [
			'title' => 'Petugas',
            'data' =>  $this->crud->findone('petugas',$id)
		];
        $this->routes->load('main/dashboard','petugas/view',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_petugas', $id);
        $this->db->delete('petugas');
        set_pesan('data berhasil dihapus.');
        redirect('c_petugas');
    }
}