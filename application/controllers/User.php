<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('model_pengaturan');
		$this->load->model('model_user');
	}

	function index() {
		cek_session();

		$jml = $this->db->get('server');

		$config['full_tag_open'] = "<ul class='pagination pagination-sm'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open'] = "<li>";
		$config['num_tag_close'] = "</li>";
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tag_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tag_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tag_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tag_close'] = "</li>";

		$config['base_url'] = base_url().'index.php/server/index';
		$config['total_rows'] = $jml->num_rows();
		$config['per_page'] = '10';
		$config['first_page'] = '&laquo;';
		$config['last_page'] = '&raquo;';
		$config['next_page'] = '&laquo;';
		$config['prev_page'] = '&raquo;';

		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
		$halaman            =  $this->uri->segment(4);
        $halaman            =$halaman==''?0:$halaman;

		$data['lihat'] = $this->model_user->tampil_halaman($config['per_page'],$halaman);
		$pengaturan_id = 1;
		$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
		$this->load->view('admin/user/user', $data);
	}

	function add() {
		if (isset($_POST['submit'])) {
			$email = $this->input->post('email');

			$fd = $this->db->get_where('member', array('email'=>$email));
			$filter_data = $fd->num_rows();

			if ($filter_data > 0 ) {
				cek_session();
				$data['error'] = "Email Already Exist!";
				$pengaturan_id = 1;
				$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
				$this->load->view('admin/user/input', $data);
			} else {
				$this->model_user->simpan();
				redirect('user');
			}

		} else {
			$pengaturan_id = 1;
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$this->load->view('admin/user/input', $data);
		}
	}

	function edit() {
		if (isset($_POST['submit'])) {
			$this->model_user->edit();
			redirect('user');
		} else {
			cek_session();
			$id = $this->uri->segment(3);
			$data['lihat'] = $this->model_user->get_user($id)->row_array();
			$pengaturan_id = 1;
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$this->load->view('admin/user/edit', $data);
		}
	}

	function delete() {
		$id = $this->uri->segment(3);
		$this->model_user->delete($id);
		redirect('user');
	}

}