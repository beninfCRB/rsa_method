<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_pendaftaran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('m_crud','crud');
        ini_set('display_errors','off');ini_set('display_errors','off');
        if ($this->session->userdata('username') == NULL) {
            redirect('c_login');
        }
	}

    private function _validasi()
    {
        $this->form_validation->set_rules('petugas_id', 'Petugas', 'required');
        $this->form_validation->set_rules('kepemilikan_id', 'Pemilik Kendaraan', 'required');
        $this->form_validation->set_rules('kode_pendaftaran', 'Kode Pendaftaran', 'required');
        $this->form_validation->set_rules('tanggal_pendaftaran', 'Tanggal Pendaftaran Kendaraan', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
    }

    public function index()
    {
        $data = [
			'title' => 'Pendaftaran Kendaraan',
            'data' => $this->crud->with2join('pendaftaran','petugas','kepemilikan')
		];

		$this->routes->load('main/dashboard','pendaftaran/index',$data);
    }

    public function add()
    {
        $data = [
			'title' => 'Pendaftaran Kendaraan',
            'petugas' => $this->crud->findall('petugas'),
            'kepemilikan'=>$this->crud->findall('kepemilikan'),
            'kode'=>$this->crud->code('pendaftaran')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','pendaftaran/add',$data);
        }else{
            $this->create();
        }
    }

    public function create()
    {


        if($this->input->post('type_of_pendaftaran') == null){
            $data= $this->fungsi->inputOf('pendaftaran',['petugas_id','kepemilikan_id','kode_pendaftaran','tanggal_pendaftaran','keterangan','type_of_pendaftaran']);
        }elseif($this->input->post('type_of_pendaftaran')=='enc'){
            $data= $this->fungsi->input('pendaftaran',['petugas_id','kepemilikan_id','kode_pendaftaran','tanggal_pendaftaran','keterangan','type_of_pendaftaran']);  
        }
        $this->crud->create('pendaftaran', $data);

		set_pesan('data berhasil disimpan.');
		redirect('c_pendaftaran');
    }

    public function edit($id)
    {
        $data = [
			'title' => 'Pendaftaran Kendaraan',
            'data' => $this->crud->findone('pendaftaran',$id),
            'petugas' => $this->crud->findall('petugas'),
            'kepemilikan'=>$this->crud->findall('kepemilikan')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','pendaftaran/edit',$data);
        }else{
            $this->update($id);
        }
    }

    public function update($id)
    {
        if($this->input->post('type_of_pendaftaran') == null){
            $data= $this->fungsi->inputOf('pendaftaran',['petugas_id','kepemilikan_id','kode_pendaftaran','tanggal_pendaftaran','keterangan','type_of_pendaftaran']);
        }elseif($this->input->post('type_of_pendaftaran')=='enc'){
            $data= $this->fungsi->input('pendaftaran',['petugas_id','kepemilikan_id','kode_pendaftaran','tanggal_pendaftaran','keterangan','type_of_pendaftaran']);  
        }
       
        $this->crud->update('pendaftaran',$id,$data);

		set_pesan('data berhasil diubah.');
		redirect('c_pendaftaran');
    }

    public function view($id)
    {
        $data = [
			'title' => 'Pendaftaran Kendaraan',
            'data' => $this->crud->with2joinid('pendaftaran','petugas','kepemilikan',"WHERE id_pendaftaran = '$id' ")
		];
        $this->routes->load('main/dashboard','pendaftaran/view',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_pendaftaran', $id);
        $this->db->delete('pendaftaran');
        set_pesan('data berhasil dihapus.');
        redirect('c_pendaftaran');
    }
}