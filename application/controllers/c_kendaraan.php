<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_kendaraan extends CI_Controller
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
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('produksi', 'Tahun Produksi', 'required');
        $this->form_validation->set_rules('silinder', 'Volume Mesin', 'required');
        $this->form_validation->set_rules('no_rangka', 'Nomor Rangka', 'required');
        $this->form_validation->set_rules('no_mesin', 'Nomor Mesin', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
        $this->form_validation->set_rules('bahan_bakar', 'Bahan Bakar', 'required');
        
    }

    public function index()
    {
        $data = [
			'title' => 'Kendaraan',
            'data' =>  $this->crud->withjoin('kendaraan','petugas','petugas_id=id_petugas')
		];

		$this->routes->load('main/dashboard','kendaraan/index',$data);
    }

    public function add()
    {
        $data = [
			'title' => 'Kendaraan',
            'petugas'=> $this->crud->findall('petugas')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','kendaraan/add',$data);
        }else{
            $this->create();
        }
    }

    public function create()
    {
        if($this->input->post('type_of_kendaraan')==null){
            $data = $this->fungsi->inputOf('kendaraan',['petugas_id','merk','jenis','tipe','produksi','silinder','no_rangka','no_mesin','warna','bahan_bakar','type_of_kendaraan']);
        }elseif($this->input->post('type_of_kendaraan')== 'enc'){
            $data = $this->fungsi->input('kendaraan',['petugas_id','merk','jenis','tipe','produksi','silinder','no_rangka','no_mesin','warna','bahan_bakar','type_of_kendaraan']);
        }
        $this->crud->create('kendaraan',$data);

		set_pesan('data berhasil disimpan.');
	    redirect('c_kendaraan');
    }

    public function edit($id)
    {
        $data = [
			'title' => 'Kendaraan',
            'data' => $this->crud->findone('kendaraan',$id),
            'petugas'=> $this->crud->findall('petugas')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','kendaraan/edit',$data);
        }else{
            $this->update($id);
        }
    }

    public function update($id)
    {
        if($this->input->post('type_of_kendaraan')==null){
            $data = $this->fungsi->inputOf('kendaraan',['petugas_id','merk','jenis','tipe','produksi','silinder','no_rangka','no_mesin','warna','bahan_bakar','type_of_kendaraan'],false);
        }elseif($this->input->post('type_of_kendaraan')== 'enc'){
            $data = $this->fungsi->input('kendaraan',['petugas_id','merk','jenis','tipe','produksi','silinder','no_rangka','no_mesin','warna','bahan_bakar','type_of_kendaraan'],false);
        }
        $this->crud->update('kendaraan',$id,$data);

		set_pesan('data berhasil diubah.');
		redirect('c_kendaraan');
    }

    public function view($id)
    {
        $data = [
			'title' => 'Kendaraan',
            'data' =>  $this->crud->withjoinid('kendaraan','petugas','petugas_id=id_petugas','id_kendaraan',$id)
		];
        $this->routes->load('main/dashboard','kendaraan/view',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_kendaraan', $id);
        $this->db->delete('kendaraan');
        set_pesan('data berhasil dihapus.');
        redirect('c_kendaraan');
    }
}