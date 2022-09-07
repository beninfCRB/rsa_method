<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_pengecekan extends CI_Controller
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
        $this->form_validation->set_rules('pendaftaran_id', 'Pemilik Kendaraan', 'required');
        $this->form_validation->set_rules('kode_pengecekan', 'Kode Pendaftaran', 'required');
        $this->form_validation->set_rules('tanggal_pengecekan', 'Tanggal Pendaftaran Kendaraan', 'required');
        $this->form_validation->set_rules('tanggal_pengecekan', 'Tanggal Pengecekan', 'required');
      
    }

    public function index()
    {
        $data = [
			'title' => 'Pengecekan Kendaraan',
            'data' => $this->crud->with2join('pengecekan','petugas','pendaftaran')
		];
		$this->routes->load('main/dashboard','pengecekan/index',$data);
    }

    public function add()
    {
        $data = [
			'title' => 'Pengecekan Kendaraan',
            'petugas' => $this->crud->findall('petugas'),
            'pendaftaran'=>$this->crud->findall('pendaftaran'),
            'kode' => $this->crud->code('pengecekan')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','pengecekan/add',$data);
        }else{
            $this->create();
        }
    }

    public function create()
    {
        
        if($this->input->post('type_of_pengecekan') == null){
            $data= $this->fungsi->inputOf('pengecekan',['petugas_id','pendaftaran_id','kode_pengecekan','tanggal_pengecekan','denda_pkb','denda_swdkllj','total_denda_pkb','total_denda_swdkllj','type_of_pengecekan']);
        }elseif($this->input->post('type_of_pengecekan')=='enc'){
            $data= $this->fungsi->input('pengecekan',['petugas_id','pendaftaran_id','kode_pengecekan','tanggal_pengecekan','denda_pkb','denda_swdkllj','total_denda_pkb','total_denda_swdkllj','type_of_pengecekan']);
        }
        // $data= $this->fungsi->input('pengecekan',['petugas_id','pendaftaran_id','kode_pengecekan','tanggal_pengecekan','denda_pkb','denda_swdkllj','total_denda_pkb','total_denda_swdkllj']);   
        $this->crud->create('pengecekan', $data);

		set_pesan('data berhasil disimpan.');
		redirect('c_pengecekan');
    }

    public function edit($id)
    {
        $data = [
			'title' => 'Pengecekan Kendaraan',
            'data' => $this->crud->findone('pengecekan',$id),
            'petugas' => $this->crud->findall('petugas'),
            'pendaftaran'=>$this->crud->findall('pendaftaran')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','pengecekan/edit',$data);
        }else{
            $this->update($id);
        }
    }

    public function update($id)
    {

        if($this->input->post('type_of_pengecekan') == null){
            $data= $this->fungsi->inputOf('pengecekan',['petugas_id','pendaftaran_id','kode_pengecekan','tanggal_pengecekan','denda_pkb','denda_swdkllj','total_denda_pkb','total_denda_swdkllj','type_of_pengecekan']);
        }elseif($this->input->post('type_of_pengecekan')=='enc'){
            $data= $this->fungsi->input('pengecekan',['petugas_id','pendaftaran_id','kode_pengecekan','tanggal_pengecekan','denda_pkb','denda_swdkllj','total_denda_pkb','total_denda_swdkllj','type_of_pengecekan']);
        }
        $this->crud->update('pengecekan',$id,$data);

		set_pesan('data berhasil diubah.');
		redirect('c_pengecekan');
    }

    public function view($id)
    {
        $data = [
			'title' => 'Pengecekan Kendaraan',
            'data' => $this->crud->with2joinid('pengecekan','petugas','pendaftaran',"WHERE id_pengecekan = '$id' ")
		];
        $this->routes->load('main/dashboard','pengecekan/view',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_pengecekan', $id);
        $this->db->delete('pengecekan');
        set_pesan('data berhasil dihapus.');
        redirect('c_pengecekan');
    }

    
    public function get()
    {
        $id = $this->input->post('penetapan_id');
        echo json_encode($this->crud->getSelect($id));
    }
}