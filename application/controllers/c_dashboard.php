<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		ini_set('display_errors','off');
		$this->load->helper(
			array('enkripsi','dekripsi')
		);
		if ($this->session->userdata('username') == NULL) {
            redirect('c_login');
        }
	}

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
		];
		$this->routes->load('main/dashboard','dashboard',$data);
	}

	public function myprofile()
	{
		$data['title']    = 'Myprofile';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if ($this->form_validation->run() == false) {
			// $this->load->view('templates/header', $data);
			// $this->load->view('templates/sidebar', $data);
			// $this->load->view('templates/topbar', $data);
			$this->load->view('admin/myprofile', $data);
			// $this->load->view('templates/footer');
		} else {
			$this->Model_admin->ubah();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin_dashboard/myprofile');
		}
	}
}
