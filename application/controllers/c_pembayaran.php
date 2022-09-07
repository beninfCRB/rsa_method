<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_pembayaran extends CI_Controller
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
        $this->form_validation->set_rules('penetapan_id', 'Penetapan', 'required');
        $this->form_validation->set_rules('kode_pembayaran', 'Kode Pembayaran', 'required');
        $this->form_validation->set_rules('tagihan', 'Tagihan Pembayaran', 'required');
        $this->form_validation->set_rules('di_tetapkan', 'Di Tetpkan Pembayaran', 'required');
        $this->form_validation->set_rules('tanggal_pembayaran', 'Tanggal Pembayaran Pembayaran', 'required');
    }

    public function index()
    {
        $data = [
			'title' => 'Pembayaran',
            'data' => $this->crud->with2join('pembayaran','petugas','penetapan')
		];    
		$this->routes->load('main/dashboard','pembayaran/index',$data);
    }

    public function add()
    {
        $data = [
			'title' => 'Pembayaran',
            'petugas' => $this->crud->findall('petugas'),
            'penetapan'=>$this->crud->findall('penetapan'),
            'kode'=>$this->crud->code('pembayaran')
		];

       

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','pembayaran/add',$data);
        }else{
            $this->create();
        }
    }


    
    public function create()
    {

        
        if($this->input->post('type_of_pembayaran') == null){
            $data= $this->fungsi->inputOf('pembayaran',['petugas_id','penetapan_id','kode_pembayaran','tagihan','di_tetapkan','tanggal_pembayaran','type_of_pembayaran']);
        }elseif($this->input->post('type_of_pembayaran')=='enc'){
            $data= $this->fungsi->input('pembayaran',['petugas_id','penetapan_id','kode_pembayaran','tagihan','di_tetapkan','tanggal_pembayaran','type_of_pembayaran']);
        }
      
        $this->crud->create('pembayaran', $data);


		set_pesan('data berhasil disimpan.');
		redirect('c_pembayaran');
    }

   

    public function edit($id)
    {
        $data = [
			'title' => 'Pembayaran',
            'data' => $this->crud->findone('pembayaran',$id),
            'petugas' => $this->crud->findall('petugas'),
            'penetapan'=>$this->crud->findall('penetapan')
		];

            
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','pembayaran/edit',$data);
        }else{
            $this->update($id);
        }
    }

    public function update($id)
    {
        if($this->input->post('type_of_pembayaran') == null){
            $data= $this->fungsi->inputOf('pembayaran',['petugas_id','penetapan_id','kode_pembayaran','tagihan','di_tetapkan','tanggal_pembayaran','type_of_pembayaran']);
        }elseif($this->input->post('type_of_pembayaran')=='enc'){
            $data= $this->fungsi->input('pembayaran',['petugas_id','penetapan_id','kode_pembayaran','tagihan','di_tetapkan','tanggal_pembayaran','type_of_pembayaran']);
        }
      
        $this->crud->update('pembayaran',$id,$data);

       

		set_pesan('data berhasil diubah.');
		redirect('c_pembayaran');
    }

    public function view($id)
    {
        $data = [
			'title' => 'Pembayaran',
            'data' => $this->crud->with2joinid('pembayaran','petugas','penetapan',"WHERE id_pembayaran = '$id' " )
		];
            
        $this->routes->load('main/dashboard','pembayaran/view',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_pembayaran', $id);
        $this->db->delete('pembayaran');
        set_pesan('data berhasil dihapus.');
        redirect('c_pembayaran');
    }
}