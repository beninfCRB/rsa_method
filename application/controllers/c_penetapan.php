<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_penetapan extends CI_Controller
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
        $this->form_validation->set_rules('pengecekan_id', 'Pengecekan Kendaraan', 'required');
        $this->form_validation->set_rules('kode_penetapan', 'Kode Penetapan', 'required');
        $this->form_validation->set_rules('pkb', 'PKB Kendaraan', 'required');
        $this->form_validation->set_rules('swdkllj', 'SWKDLLJ Kendaraan', 'required');
        $this->form_validation->set_rules('total', 'Masa Berlaku Kendaraan', 'required');
        $this->form_validation->set_rules('tanggal_penetapan', 'Tanggal Penetapan', 'required');
    }

    public function index()
    {
        $data = [
			'title' => 'Penetapan Kendaraan',
            'data' => $this->crud->penetapan()
		];

		$this->routes->load('main/dashboard','penetapan/index',$data);
    }

    public function add()
    {
        $data = [
			'title' => 'Penetapan Kendaraan',
            'petugas' => $this->crud->findall('petugas'),
            'kepemilikan'=>$this->crud->findall('kepemilikan'),
            'pendaftaran'=>$this->crud->findall('pendaftaran'),
            'pengecekan'=>$this->crud->findall('pengecekan'),
            'kendaraan'=>$this->crud->findall('kendaraan'),
            'pemilik'=>$this->crud->findall('pemilik'),
            'kode'=> $this->crud->code('penetapan')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','penetapan/add',$data);
        }else{
            $this->create();
        }
    }

    public function create()
    {
        $fetch1 = $this->crud->getId1($this->input->post('pengecekan_id'));
        // print_r($fetch1);die;
        $fetch2 = $this->crud->getId2($fetch1->pendaftaran_id);
        $fetch3 = $this->crud->getId3($fetch2->kepemilikan_id);
        if($this->input->post('type_of_penetapan') == null){
            // $data= $this->fungsi->inputOf('penetapan',['petugas_id','pengecekan_id','pendaftaran_id','kepemilikan_id',
            // 'pemilik_id','kendaraan_id','kode_penetapan','bbnkb','pkb','swdkllj','penerbitan_stnk','penerbitan_ntkb',
            // 'd_pkb','d_swdkllj','total','tanggal_penetapan','type_of_penetapan']);
                    $data= [
            'id_penetapan' => uniqid(),
            'petugas_id' => $this->input->post('petugas_id'),
            'pengecekan_id'=> $this->input->post('pengecekan_id'),
            'pendaftaran_id' => $fetch1->pendaftaran_id,
            'kepemilikan_id' => $fetch2->kepemilikan_id,
            'pemilik_id'=> $fetch3->pemilik_id,
            'kendaraan_id'=> $fetch3->kendaraan_id,
            'kode_penetapan' => $this->input->post('kode_penetapan'),
            'bbnkb' => $this->input->post('bbnkb'),
            'pkb' => $this->input->post('pkb'),
            'swdkllj' => $this->input->post('swdkllj'),
            'penerbitan_stnk' => $this->input->post('stnk'),
            'penerbitan_ntkb' => $this->input->post('ntkb'),
            'd_pkb' => $this->input->post('d_pkb'),
            'd_swdkllj' => $this->input->post('d_swdkllj'),
            'total' => $this->input->post('total'),
            'tanggal_penetapan' => $this->input->post('tanggal_penetapan'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'type_of_penetapan'=>'dec'
        ];
        
    }elseif($this->input->post('type_of_penetapan')=='enc'){
        // $data= $this->fungsi->input('penetapan',['petugas_id','pengecekan_id','pendaftaran_id','kepemilikan_id',
        // 'pemilik_id','kendaraan_id','kode_penetapan','bbnkb','pkb','swdkllj','penerbitan_stnk','penerbitan_ntkb',
        // 'd_pkb','d_swdkllj','total','tanggal_penetapan','type_of_penetapan']);
        
        $data= [
            'id_penetapan' => uniqid(),
            'petugas_id' => $this->input->post('petugas_id'),
            'pengecekan_id'=> $this->input->post('pengecekan_id'),
            'pendaftaran_id' => $fetch1->pendaftaran_id,
            'kepemilikan_id' => $fetch2->kepemilikan_id,
            'pemilik_id'=> $fetch3->pemilik_id,
            'kendaraan_id'=> $fetch3->kendaraan_id,
            'kode_penetapan' => enc($this->input->post('kode_penetapan')),
            'bbnkb' => enc($this->input->post('bbnkb')),
            'pkb' => enc($this->input->post('pkb')),
            'swdkllj' => enc($this->input->post('swdkllj')),
            'penerbitan_stnk' => enc($this->input->post('stnk')),
            'penerbitan_ntkb' => enc($this->input->post('ntkb')),
            'd_pkb' => enc($this->input->post('d_pkb')),
            'd_swdkllj' => enc($this->input->post('d_swdkllj')),
            'total' => enc($this->input->post('total')),
            'tanggal_penetapan' => enc($this->input->post('tanggal_penetapan')),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'type_of_penetapan'=>'enc'
        ];
        
        
        }
        
        // $fetch1 = $this->crud->getId1($this->input->post('pengecekan_id'));
        // $fetch2 = $this->crud->getId2($fetch1->pendaftaran_id);
        // $fetch3 = $this->crud->getId3($fetch2->kepemilikan_id);

        // $data= [
        //     'id_penetapan' => uniqid(),
        //     'petugas_id' => $this->input->post('petugas_id'),
        //     'pengecekan_id'=> $this->input->post('pengecekan_id'),
        //     'pendaftaran_id' => $fetch1->pendaftaran_id,
        //     'kepemilikan_id' => $fetch2->kepemilikan_id,
        //     'pemilik_id'=> $fetch3->pemilik_id,
        //     'kendaraan_id'=> $fetch3->kendaraan_id,
        //     'kode_penetapan' => enc($this->input->post('kode_penetapan')),
        //     'bbnkb' => enc($this->input->post('bbnkb')),
        //     'pkb' => enc($this->input->post('pkb')),
        //     'swdkllj' => enc($this->input->post('swdkllj')),
        //     'penerbitan_stnk' => enc($this->input->post('stnk')),
        //     'penerbitan_ntkb' => enc($this->input->post('ntkb')),
        //     'd_pkb' => enc($this->input->post('d_pkb')),
        //     'd_swdkllj' => enc($this->input->post('d_swdkllj')),
        //     'total' => enc($this->input->post('total')),
        //     'tanggal_penetapan' => enc($this->input->post('tanggal_penetapan')),
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ];
        $this->crud->create('penetapan', $data);

		set_pesan('data berhasil disimpan.');
		redirect('c_penetapan');
    }

    public function edit($id)
    {
        $data = [
			'title' => 'Penetapan Kendaraan',
            'data' => $this->crud->findone('penetapan',$id),
            'petugas' => $this->crud->findall('petugas'),
            'pengecekan'=>$this->crud->findall('pengecekan')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','penetapan/edit',$data);
        }else{
            $this->update($id);
        }
    }

    public function update($id)
    {
        $fetch1 = $this->crud->getId1($this->input->post('pengecekan_id'));
        $fetch2 = $this->crud->getId2($fetch1->pendaftaran_id);
        $fetch3 = $this->crud->getId3($fetch2->kepemilikan_id);

        if($this->input->post('type_of_penetapan') == null){
            // $data= $this->fungsi->inputOf('penetapan',['petugas_id','pengecekan_id','pendaftaran_id','kepemilikan_id',
            // 'pemilik_id','kendaraan_id','kode_penetapan','bbnkb','pkb','swdkllj','penerbitan_stnk','penerbitan_ntkb',
            // 'd_pkb','d_swdkllj','total','tanggal_penetapan','type_of_penetapan']);
                    $data= [
            'id_penetapan' => uniqid(),
            'petugas_id' => $this->input->post('petugas_id'),
            'pengecekan_id'=> $this->input->post('pengecekan_id'),
            'pendaftaran_id' => $fetch1->pendaftaran_id,
            'kepemilikan_id' => $fetch2->kepemilikan_id,
            'pemilik_id'=> $fetch3->pemilik_id,
            'kendaraan_id'=> $fetch3->kendaraan_id,
            'kode_penetapan' => $this->input->post('kode_penetapan'),
            'bbnkb' => $this->input->post('bbnkb'),
            'pkb' => $this->input->post('pkb'),
            'swdkllj' => $this->input->post('swdkllj'),
            'penerbitan_stnk' => $this->input->post('stnk'),
            'penerbitan_ntkb' => $this->input->post('ntkb'),
            'd_pkb' => $this->input->post('d_pkb'),
            'd_swdkllj' => $this->input->post('d_swdkllj'),
            'total' => $this->input->post('total'),
            'tanggal_penetapan' => $this->input->post('tanggal_penetapan'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'type_of_penetapan'=>'dec'
        ];
        
    }elseif($this->input->post('type_of_penetapan')=='enc'){
        // $data= $this->fungsi->input('penetapan',['petugas_id','pengecekan_id','pendaftaran_id','kepemilikan_id',
        // 'pemilik_id','kendaraan_id','kode_penetapan','bbnkb','pkb','swdkllj','penerbitan_stnk','penerbitan_ntkb',
        // 'd_pkb','d_swdkllj','total','tanggal_penetapan','type_of_penetapan']);
        
        $data= [
            'id_penetapan' => uniqid(),
            'petugas_id' => $this->input->post('petugas_id'),
            'pengecekan_id'=> $this->input->post('pengecekan_id'),
            'pendaftaran_id' => $fetch1->pendaftaran_id,
            'kepemilikan_id' => $fetch2->kepemilikan_id,
            'pemilik_id'=> $fetch3->pemilik_id,
            'kendaraan_id'=> $fetch3->kendaraan_id,
            'kode_penetapan' => enc($this->input->post('kode_penetapan')),
            'bbnkb' => enc($this->input->post('bbnkb')),
            'pkb' => enc($this->input->post('pkb')),
            'swdkllj' => enc($this->input->post('swdkllj')),
            'penerbitan_stnk' => enc($this->input->post('stnk')),
            'penerbitan_ntkb' => enc($this->input->post('ntkb')),
            'd_pkb' => enc($this->input->post('d_pkb')),
            'd_swdkllj' => enc($this->input->post('d_swdkllj')),
            'total' => enc($this->input->post('total')),
            'tanggal_penetapan' => enc($this->input->post('tanggal_penetapan')),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'type_of_penetapan'=>'enc'
        ];
        
        
        }
        $this->crud->update('penetapan',$id,$data);

		set_pesan('data berhasil diubah.');
		redirect('c_penetapan');
    }

    public function view($id)
    {
        $data = [
			'title' => 'Penetapan Kendaraan',
            'data' => $this->crud->penetapanid($id)
		];
        $this->routes->load('main/dashboard','penetapan/view',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_penetapan', $id);
        $this->db->delete('penetapan');
        set_pesan('data berhasil dihapus.');
        redirect('c_penetapan');
    }

    public function getCode()
    {
        $id = $this->input->post('penetapan_id');
        echo json_encode($this->crud->getSelect($id));
    }

    public function getDenda(){
        $data = $this->crud->findone('pengecekan',$this->input->post('idCek'));

        $data->type_of_pengecekan == 'enc'?$h_data = ["d_pkb"=>dec($data->total_denda_pkb),"d_swdkllj"=>dec($data->total_denda_swdkllj)]:$h_data= ["d_pkb"=>$data->total_denda_pkb,"d_swdkllj"=>$data->total_denda_swdkllj];

		$this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode($h_data));
    }
}