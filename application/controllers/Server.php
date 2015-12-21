<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Server extends CI_Controller {

	function __construct() {
		parent::__construct(); 
		$this->load->model('model_pengaturan');
		$this->load->model('model_server');
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

		$data['lihat'] = $this->model_server->tampil_halaman($config['per_page'],$halaman);
		$pengaturan_id = 1;
		$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
		//$data['lihat'] = $this->model_server->tampil_data();
		$this->load->view('admin/server/server', $data);
	}

	function add() {
		if (isset($_POST['submit'])) {

			$host = $this->input->post('host');

			$fd = $this->db->get_where('server', array('ip_server'=>$host));
			$filter_data = $fd->num_rows();

			if ($filter_data > 0 ) {
				cek_session();
				$data['error'] = "Host (IP Server) Already Exist!";
				$pengaturan_id = 1;
				$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
				$this->load->view('admin/server/input', $data);
			} else {
				$this->model_server->simpan();
				redirect('server');
			}

		} else {
			cek_session();
			$pengaturan_id = 1;
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$this->load->view('admin/server/input', $data);
		}
	}

	function edit() {
		if (isset($_POST['submit'])) {
			$host = $this->input->post('host');

			$fd = $this->db->get_where('server', array('ip_server'=>$host));
			$filter_data = $fd->num_rows();

			if ($filter_data > 0 ) {
				cek_session();
				$data['error'] = "Host (IP Server) Already Exist!";
				$pengaturan_id = 1;
				$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
				$this->load->view('admin/server/edit', $data);
			} else {
				$this->model_server->edit();
				redirect('server');
		    }
		} else {
			cek_session();
			$pengaturan_id = 1;
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$id = $this->uri->segment(3);
			$data['lihat'] = $this->model_server->get_server($id)->row_array();
			$this->load->view('admin/server/edit', $data);
		}
	}

	function delete() {
		$id = $this->uri->segment(3);
		$this->model_server->delete($id);
		redirect('server');
	}
}