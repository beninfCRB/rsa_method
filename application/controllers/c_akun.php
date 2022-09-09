<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_akun extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->model('m_crud','crud');
        ini_set('display_errors','off');
        if ($this->session->userdata('username') == NULL && $this->session->userdata('role') == 'admin') {
            redirect('c_login');
        }
	}

    private function _validasi()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('level_id', 'Level', 'required');
    }

    public function index()
    {
        $data = [
			'title' => 'User',
            'data' => $this->crud->withjoin('user','users_level','level_id = id_level')
		];

		$this->routes->load('main/dashboard','user/index',$data);
    }

    public function add()
    {
        $data = [
			'title' => 'User',
            'role' => $this->crud->findall('users_level')
		];

        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','user/add',$data);
        }else{
            $this->create();
        }
    }

    public function create()
    {
        // if($this->input->post('type_of_user')==null){
        //     $data = $this->fungsi->inputOf('user',['nama','username','password','email','level_id','type_of_user']);
        // }elseif($this->input->post('type_of_user')=='enc'){
        //     $data = $this->fungsi->input('user',['nama','username','password','email','level_id','type_of_user']);
        // }
        $data = $this->fungsi->input('user',['nama','username','password','email','level_id','type_of_user']);
        $this->crud->create('user',$data);

		set_pesan('data berhasil disimpan.');
        redirect('c_akun');
    }

    public function edit($id)
    {
        $data = [
			'title' => 'User',
            'data' => $this->crud->findone('user',$id),
            'role' => $this->crud->findall('users_level')
		];

        $this->_validasi();
        
        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','user/edit',$data);
        }else{
            $this->update($id);
        }
    }

    public function update($id)
    {
        // if($this->input->post('type_of_user')==null){
        //     $data = $this->fungsi->inputOf('user',['nama','username','password','email','level_id','type_of_user']);
        // }elseif($this->input->post('type_of_user')=='enc'){
        //     $data = $this->fungsi->input('user',['nama','username','password','email','level_id','type_of_user']);
        // }
        $data = $this->fungsi->input('user',['nama','username','password','email','level_id','type_of_user']);
        $this->crud->update('user',$id,$data);

		set_pesan('data berhasil diubah.');
		redirect('c_akun');
    }

    public function view($id)
    {
        $data = [
			'title' => 'User',
            'data' =>  $this->crud->findone('user',$id)
		];
        $this->routes->load('main/dashboard','user/view',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
        set_pesan('data berhasil dihapus.');
        redirect('c_akun');
    }
}