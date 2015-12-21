<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('model_pengaturan');
	}

	function index() {
		cek_session_login();
		$data['title'] = "Panel Admin";
		$pengaturan_id = 1;
		$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
		$this->load->view('admin/login', $data);
	}

	function login() {

		if (isset($_POST['submit'])) {
			$user_admin = $this->input->post('username');
			$pass_admin = $this->input->post('password');

			$otentikasi = $this->model_pengaturan->login($user_admin, $pass_admin);
			if ($otentikasi == 1) {

				$this->db->where('user_admin', $user_admin);
				$this->db->update('pengaturan', array('last_login'=>date('Y-m-d')));

				$this->session->set_userdata(array('status_login'=>'24ba97d18b28a6e71b6898a158de1543','user_admin'=>$user_admin));
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('pesan', 'Invalid Email/Password!');
				redirect('admin/login');
			}

		} else {
			cek_session_login();
			$data['title'] = "Panel Admin";
			$pengaturan_id = 1;
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$this->load->view('admin/login', $data);
		}

	}

	function logout() {
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}