<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_myprofile extends CI_Controller
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
        $this->form_validation->set_rules('nama', 'nama lengkap', 'trim|required');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('email', 'password baru', 'trim|required');
        $this->form_validation->set_rules('level_id', 'Level', 'trim|required');
    }

    public function edit($id)
    {
        $data = [
			'title' => 'Pengaturan Akun',
            'data' => $this->crud->withjoinid('user','users_level','level_id=id_level','id_user',$id),
		];
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $this->routes->load('main/dashboard','myprofile',$data);
        }else{
            $this->update($id);
        }

    }

    public function update($id)
    {
            $pwd = $this->crud->findone('user',$id);

            if($this->input->post('pwd') == NULL){
                $old = $pwd->password;
            }else if($pwd->password == $this->input->post('password')){
                $old = $this->input->post('pwd');
            }

            $foto = $this->uploadImage();
            
            $data = [
                'nama'=> enc($this->input->post('nama')),
                'username'=>enc($this->input->post('username')),
                'password'=>enc($old),
                'email'=> enc($this->input->post('email')),
                'level_id'=> $this->input->post('level_id'),
                'foto' => enc($foto),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $this->crud->update('user',$id,$data);

			set_pesan('data berhasil diubah.');
			redirect('c_myprofile/edit/'.$id);
    }

    public function uploadImage()
    {
        $data = $this->db->get_where('user', ['username' => enc($this->session->userdata('username'))])->row();
        $config['upload_path']          = '/assets/img/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $data->username;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            return $data->foto;
        } else {
            $image_data = $this->upload->data();
            file_get_contents($image_data['full_path']);
            $img = $this->upload->data('file_name');
            return $img;
        }
    }
}