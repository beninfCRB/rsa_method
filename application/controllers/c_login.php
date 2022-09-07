<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud','crud');
		ini_set('display_errors','off');
	}

	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect('c_dashboard');
		}

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Akun';
			$this->load->view('auth/login-view', $data);
		} else {
			// validasi sukses
			$this->_login();
		}
	}


	private function _login()
	{

		// var_dump($this->input->post('username'));
		// die;
		$username = enc($this->input->post('username'));
		// echo getDB($username);
		// die;
		
		$password = enc($this->input->post('password'));

		// var_dump($username);
		// die;

		// $admin = $this->db->get_where('user',['username'=>$username])->row();

		// if($this->input->post('type_of_login') == 'enc'){
		// 	$type = true;
		// 	$username = enc($this->input->post('username'));
		// 	$password = enc($this->input->post('password'));	
		// }else{
		// 	$type = false;
		// 	$username = $this->input->post('username');
		// 	$password = $this->input->post('password');	
		// }

		$admin = $this->crud->withjoinid('user','users_level','level_id=id_level','username',$username);

		// var_dump($admin);
		// die;
		// cek username
		if ($admin) {
			// cek password
			if ($password == $admin->password) {
				// $data = [
				// 	'id_user' => $admin->id_user,
				// 	'nama'=> $type == true? dec($admin->nama):$admin->nama,
				// 	'username' => $type == true?dec($admin->username):$admin->username,
				// 	'password' => $type == true?dec($admin->password):$admin->password,
				// 	'email' => $type == true?dec($admin->email):$admin->email,
				// 	'role' => $type == true?dec($admin->role):$admin->role
				// ];
				$data = [
					'id_user' => $admin->id_user,
					'nama'=>  dec($admin->nama),
					'username' => dec($admin->username),
					'password' => dec($admin->password),
					'email' => dec($admin->email),
					'role' => dec($admin->role)
				];

				$this->session->set_userdata($data);
				redirect('c_dashboard');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Password salah </div>');
				redirect('c_login');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Username salah </div>');
			redirect('c_login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil keluar!</div>');
		redirect('c_login');
	}
}
