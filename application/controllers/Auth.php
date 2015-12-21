<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('model_member');
		$this->load->model('model_pengaturan');
	}

	function index() {
		$pengaturan_id = 1;
		$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
		$this->load->view('front', $data);
	}

	function login_member() {
		if (isset($_POST['submit'])) {
			$email = $this->input->post('username');
			$password = $this->input->post('password');

			$otentikasi = $this->model_member->login_member($email, $password);
			if ($otentikasi == 1) {

				$this->db->where('email', $email);
				$this->db->update('member', array('last_login'=>date('Y-m-d')));
				$this->session->set_userdata(array('status_login'=>'704db471e8957c170c00a99189d2d116','email'=>$email));
				redirect('clientarea');
			} else {
				$this->session->set_flashdata('pesan', 'Invalid Email/Password!');
				redirect('auth/login_member');
			}

		} else {
			cek_session_login_reseller();
			$pengaturan_id = 1;
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$data['title'] = "Client Area";
			$this->load->view('reseller/login', $data);
		}
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('auth/login_member');
	}

	function registration() {
		if (isset($_POST['submit'])) {
			$email = $this->input->post('email');
			$fd = $this->db->get_where('member', array('email'=>$email));
			$filter_data = $fd->num_rows();

			if ($filter_data > 0) {
				$data['error'] = "Email Already Exist!";
				$pengaturan_id = 1;
				$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
				$this->load->view('reseller/registration', $data);
			} else {
				$this->model_member->registration();
				$pengaturan_id = 1;
				$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
				$data['message'] = "Registration Successfully <br> Please <a href='login_member'>Login Here</a>";
				$this->load->view('reseller/registration', $data);

			}

		} else {
			$pengaturan_id = 1;
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$this->load->view('reseller/registration', $data);
		}
	}
}