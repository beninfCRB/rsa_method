<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_kepemilikan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('m_crud','crud');
        ini_set('display_errors','off');
        if ($this->session->userdata('username') == NULL) {
            redirect('c_login');
        }
	}

    private function _validasi()
    {
        $this->form_validation->set_rules('petugas_id', 'Petugas', 'required');
        $this->form_validation->set_rules('kendaraan_id', 'Kendaraan', 'required');
        $this->form_validation->set_rules('pemilik_id', 'Pemilik Kendaraan', 'required');
        $this->form_validation->set_rules('kode_kepemilikan', 'Kode Kendaraan', 'required');
        $this->form_validation->set_rules('no_registrasi', 'Nomor Registrasi Kendaraan', 'required');
        $this->form_validation->set_rules('kepemilikan_ke', 'Kepemilikan Kendaraan', 'required');
        $this->form_validation->set_rules('no_bpkb', 'Nomor BPKB', 'required');
        $this->form_validation->set_rules('masa_berlaku', 'Masa Berlaku BPKB', 'required');
    }

    public function index()
    {
        $data = [
			'title' => 'Kepemilikan Kendaraan',
            'data' => $this->crud->with3join('kepemilikan','petugas','kendaraan','pemilik')
		];

		$this->routes->load('main/dashboard','kepemilikan/index',$data);
    }

    public function add()
    {
        $data = [
			'title' => 'Kepemilikan Kendaraan',
            'petugas' => $this->crud->findall('petugas'),
            'pemilik'=>$this->crud->findall('pemilik'),
            'kendaraan'=>$this->crud->findall('kendaraan'),
            'kode' => $this->crud->code('kepemilikan')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','kepemilikan/add',$data);
        }else{
            $this->create();
        }
    }

    public function create()
    {
        if($this->input->post('type_of_kepemilikan') == null){
            $data= $this->fungsi->inputOf('kepemilikan',['petugas_id','kendaraan_id','pemilik_id','kode_kepemilikan','no_registrasi','kepemilikan_ke','no_bpkb','masa_berlaku','type_of_kepemilikan']);
        }elseif($this->input->post('type_of_kepemilikan')=='enc'){
            $data= $this->fungsi->input('kepemilikan',['petugas_id','kendaraan_id','pemilik_id','kode_kepemilikan','no_registrasi','kepemilikan_ke','no_bpkb','masa_berlaku','type_of_kepemilikan']);
        }
        $this->crud->create('kepemilikan', $data);

		set_pesan('data berhasil disimpan.');
		redirect('c_kepemilikan');
    }

    public function edit($id)
    {
        $data = [
			'title' => 'Kepemilikan Kendaraan',
            'data' => $this->crud->findone('kepemilikan',$id),
            'petugas' => $this->crud->findall('petugas'),
            'pemilik'=>$this->crud->findall('pemilik'),
            'kendaraan'=>$this->crud->findall('kendaraan')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','kepemilikan/edit',$data);
        }else{
            $this->update($id);
        }

    }

    public function update($id)
    {
        if($this->input->post('type_of_kepemilikan') == null){
            $data= $this->fungsi->inputOf('kepemilikan',['petugas_id','kendaraan_id','pemilik_id','kode_kepemilikan','no_registrasi','kepemilikan_ke','no_bpkb','masa_berlaku','type_of_kepemilikan'],false);
        }elseif($this->input->post('type_of_kepemilikan')=='enc'){
            $data= $this->fungsi->input('kepemilikan',['petugas_id','kendaraan_id','pemilik_id','kode_kepemilikan','no_registrasi','kepemilikan_ke','no_bpkb','masa_berlaku','type_of_kepemilikan'],false);
        }
        $this->crud->update('kepemilikan',$id,$data);

		set_pesan('data berhasil diubah.');
		redirect('c_kepemilikan');
    }

    public function view($id)
    {
        $data = [
			'title' => 'Kepemilikan Kendaraan',
            'data' => $this->crud->with3joinid('kepemilikan','petugas','kendaraan','pemilik',"WHERE id_kepemilikan = '$id' ")
		];
        $this->routes->load('main/dashboard','kepemilikan/view',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_kepemilikan', $id);
        $this->db->delete('kepemilikan');
        set_pesan('data berhasil dihapus.');
        redirect('c_kepemilikan');
    }
}