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
        $this->form_validation->set_rules('di_tetapkan', 'Di Tetapkan Pembayaran', 'required');
        $this->form_validation->set_rules('tanggal_pembayaran', 'Tanggal Pembayaran Pembayaran', 'required');
    }

    public function index()
    {
        $data = [
			'title' => 'Pembayaran',
            'data' => $this->crud->pembayaran()
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
        
        $fetch = $this->crud->findone('penetapan',$this->input->post('penetapan_id'));

        if($this->input->post('type_of_pembayaran') == null){
            // $data= $this->fungsi->inputOf('pembayaran',['petugas_id','penetapan_id','kode_pembayaran','tagihan','di_tetapkan','tanggal_pembayaran','type_of_pembayaran']);
            $data= [
                'id_pembayaran' => uniqid(),
                'petugas_id' => $this->input->post('petugas_id'),
                'penetapan_id' => $this->input->post('penetapan_id'),
                'pengecekan_id'=> $fetch->pengecekan_id,
                'pendaftaran_id' => $fetch->pendaftaran_id,
                'kepemilikan_id' => $fetch->kepemilikan_id,
                'pemilik_id'=> $fetch->pemilik_id,
                'kendaraan_id'=> $fetch->kendaraan_id,
                'kode_pembayaran' => $this->input->post('kode_pembayaran'),
                'tagihan' => $this->input->post('tagihan'),
                'di_tetapkan' => $this->input->post('di_tetapkan'),
                'tanggal_pembayaran' => $this->input->post('tanggal_pembayaran'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'type_of_pembayaran'=>'dec'
            ];
        }elseif($this->input->post('type_of_pembayaran')=='enc'){
            // $data= $this->fungsi->input('pembayaran',['petugas_id','penetapan_id','kode_pembayaran','tagihan','di_tetapkan','tanggal_pembayaran','type_of_pembayaran']);
            $data= [
                'id_pembayaran' => uniqid(),
                'petugas_id' => $this->input->post('petugas_id'),
                'penetapan_id' => $this->input->post('penetapan_id'),
                'pengecekan_id'=> $fetch->pengecekan_id,
                'pendaftaran_id' => $fetch->pendaftaran_id,
                'kepemilikan_id' => $fetch->kepemilikan_id,
                'pemilik_id'=> $fetch->pemilik_id,
                'kendaraan_id'=> $fetch->kendaraan_id,
                'kode_pembayaran' => enc($this->input->post('kode_pembayaran')),
                'tagihan' => enc($this->input->post('tagihan')),
                'di_tetapkan' => enc($this->input->post('di_tetapkan')),
                'tanggal_pembayaran' => enc($this->input->post('tanggal_pembayaran')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'type_of_pembayaran'=>'enc'
            ];
        }
      
        $this->crud->create('pembayaran', $data);


		set_pesan('data berhasil disimpan.');
		redirect('c_pembayaran');
    }

   

    public function edit($id)
    {
        $data = [
			'title' => 'Pembayaran',
            'data' => $this->crud->pembayaranid($id),
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
        $fetch = $this->crud->findone('penetapan',$this->input->post('penetapan_id'));

        if($this->input->post('type_of_pembayaran') == null){
            // $data= $this->fungsi->inputOf('pembayaran',['petugas_id','penetapan_id','kode_pembayaran','tagihan','di_tetapkan','tanggal_pembayaran','type_of_pembayaran']);
            $data= [
                'id_pembayaran' => uniqid(),
                'petugas_id' => $this->input->post('petugas_id'),
                'penetapan_id' => $this->input->post('penetapan_id'),
                'pengecekan_id'=> $fetch->pengecekan_id,
                'pendaftaran_id' => $fetch->pendaftaran_id,
                'kepemilikan_id' => $fetch->kepemilikan_id,
                'pemilik_id'=> $fetch->pemilik_id,
                'kendaraan_id'=> $fetch->kendaraan_id,
                'kode_pembayaran' => $this->input->post('kode_pembayaran'),
                'tagihan' => $this->input->post('tagihan'),
                'di_tetapkan' => $this->input->post('di_tetapkan'),
                'tanggal_pembayaran' => $this->input->post('tanggal_pembayaran'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'type_of_pembayaran'=>'dec'
            ];
        }elseif($this->input->post('type_of_pembayaran')=='enc'){
            // $data= $this->fungsi->input('pembayaran',['petugas_id','penetapan_id','kode_pembayaran','tagihan','di_tetapkan','tanggal_pembayaran','type_of_pembayaran']);
            $data= [
                'id_pembayaran' => uniqid(),
                'petugas_id' => $this->input->post('petugas_id'),
                'penetapan_id' => $this->input->post('penetapan_id'),
                'pengecekan_id'=> $fetch->pengecekan_id,
                'pendaftaran_id' => $fetch->pendaftaran_id,
                'kepemilikan_id' => $fetch->kepemilikan_id,
                'pemilik_id'=> $fetch->pemilik_id,
                'kendaraan_id'=> $fetch->kendaraan_id,
                'kode_pembayaran' => enc($this->input->post('kode_pembayaran')),
                'tagihan' => enc($this->input->post('tagihan')),
                'di_tetapkan' => enc($this->input->post('di_tetapkan')),
                'tanggal_pembayaran' => enc($this->input->post('tanggal_pembayaran')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'type_of_pembayaran'=>'enc'
            ];
        }

        $this->crud->update('pembayaran',$id,$data);

		set_pesan('data berhasil diubah.');
		redirect('c_pembayaran');
    }

    public function view($id)
    {
        $data = [
			'title' => 'Pembayaran',
            'data' => $this->crud->pembayaranid($id)
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

    public function getTagihan(){
        $data = $this->crud->findone('penetapan',$this->input->post('idPem'));

        $data->type_of_penetapan == 'enc'?$h_data = dec($data->total):$h_data= $data->total;
        

		$this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode($h_data));
    }
}