<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientarea extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('model_pengaturan');
		$this->load->model('model_member');
		$this->load->model('model_server');
		$this->load->model('model_user');
	}

	function index() {
		cek_session_reseller();
		$exec_member = $this->model_member->get_member($this->session->userdata('email'))->row_array();
		$member_id = $exec_member['member_id'];
		$data['server'] = $this->db->get('server');
		$data['invoice'] = $this->db->query("SELECT * FROM invoice WHERE status='pending' AND member_id='$member_id'");
		$data['account'] = $this->db->query("SELECT * FROM t_account WHERE member_id='$member_id'");
		$pengaturan_id = 1;
		$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
		$data['profil'] = $this->model_member->get_member($this->session->userdata('email'))->row_array();
		$this->load->view('reseller/home', $data);
	}

	function pengaturan() {
		if (isset($_POST['submit'])) {
			cek_session_reseller();
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$member_id = $this->input->post('member_id');

			if (empty($password)) {
				$data = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email);
			} else {
				$data = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'password'=>$password);
			}

			$this->db->where('member_id', $member_id);
			$this->db->update('member', $data);
			redirect('clientarea/pengaturan');

		} else {
			cek_session_reseller();
			$data['member'] = $this->model_member->get_member($this->session->userdata('email'))->row_array();
			$pengaturan_id = 1;
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$this->load->view('reseller/pengaturan', $data);
		}
	}

	function server() {
		cek_session_reseller();
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

		$config['base_url'] = base_url().'index.php/clientarea/server/index';
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
		$data['member'] = $this->model_member->get_member($this->session->userdata('email'))->row_array();
		$pengaturan_id = 1;
		$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
		$this->load->view('reseller/server', $data);
	}

	function create() {
		if (isset($_POST['submit'])) {
			cek_session_reseller();
			$host = $this->input->post('host');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$tgl_expire = $this->input->post('tgl_expire');
			$kapasitas = $this->input->post('kapasitas');
			$harga = $this->input->post('harga');
			$email = $this->input->post('email');
			$server_id = $this->input->post('server_id');
			$type = "/bin/false -m";

			$exec_server = $this->model_server->get_server($server_id)->row_array();
			$exec_account = $this->model_user->filter_account($username,$host);
			$exec_member = $this->model_member->get_member($email)->row_array();
			$member_id = $exec_member['member_id'];
			$balance = $exec_member['saldo'];
			$saldo = $balance-$harga;
			
			if ($exec_account->num_rows() > 0 ) {
				$data['error'] = "Account Already Exist";
				$data['lihat'] = $this->model_server->get_server($this->uri->segment(3))->row_array();
				$data['member'] = $this->model_member->get_member($this->session->userdata('email'))->row_array();
				$pengaturan_id = 1;
				$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
				$this->load->view('reseller/create', $data);
				header("Refresh: 3; URL=" . base_url('index.php/clientarea/server') . "");
			} else {
				$connection = ssh2_connect($host, 22);
				if (ssh2_auth_password($connection, 'root', $exec_server['password'])) {
					$result = ssh2_exec($connection, "useradd -e `date -d '30 days' +'%Y-%m-%d'` $username -s $type; { echo $password; echo $password; } | passwd $username; usermod -c $email $username");
				}

				$data = array('server_id'=>$server_id,'member_id'=>$member_id,'username_ssh'=>$username,'password_ssh'=>$password,'tgl_buat'=>date('Y-m-d'),'expired_account'=>$tgl_expire);
				$this->db->insert('t_account', $data);
				$this->db->query("UPDATE member SET saldo='$saldo' WHERE email='$email'");
				redirect('clientarea/account');
			}


		} else {
			cek_session_reseller();
			$data['lihat'] = $this->model_server->get_server($this->uri->segment(3))->row_array();
			$data['member'] = $this->model_member->get_member($this->session->userdata('email'))->row_array();
			$pengaturan_id = 1;
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$this->load->view('reseller/create', $data);
		}
	}

	function account() {
		cek_session_reseller();
		$jml = $this->db->get('t_account');

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

		$config['base_url'] = base_url().'index.php/clientarea/account/index';
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
        $exec_member = $this->model_member->get_member($this->session->userdata('email'))->row_array();
		$data['lihat'] = $this->model_user->account($exec_member['member_id'],$config['per_page'],$halaman);
		$data['member'] = $this->model_member->get_member($this->session->userdata('email'))->row_array();
		$pengaturan_id = 1;
		$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
		$this->load->view('reseller/account', $data);

	}

	function deposit() {
		if (isset($_POST['submit'])) {
			cek_session_reseller();
			$jumlah = $this->input->post('jumlah');
			$get_email = $this->input->post('email');
			$status = "pending";
			$tgl_invoice = date('Y-m-d', strtotime($this->input->post('tgl_invoice')));

			$get_member_id = $this->model_member->get_member($get_email)->row_array();
			$pars_id = $get_member_id['member_id'];

			$data = array('deposit'=>$jumlah,'member_id'=>$pars_id,'status'=>$status,'tgl_invoice'=>$tgl_invoice);
			$this->db->insert('invoice', $data);
			$last_id = $this->db->query("SELECT invoice_id FROM invoice ORDER BY invoice_id DESC")->row_array();
			redirect('clientarea/invoice_print/'.$last_id['invoice_id']);

		} else {
			cek_session_reseller();
			$data['member'] = $this->model_member->get_member($this->session->userdata('email'))->row_array();
			$pengaturan_id = 1;
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$this->load->view('reseller/deposit', $data);
		}
	}

	function invoice_print() {
		if (isset($_POST['submit'])) {
			$invoice_id = $this->input->post('invoice_id');
			$config['upload_path']          = './assets/index/invoice/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 500;
            $config['file_name']			= 'mks_'.date('dmYHis').'.png';
            $config['file_ext_tolower']		= TRUE;
            $config['remove_spaces']		= TRUE;

            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $hasil = $this->upload->data();
            $data = array('bukti'=>$hasil['file_name']);
            $this->db->where('invoice_id', $invoice_id);
            $this->db->update('invoice', $data);
            redirect('clientarea/invoice');

		} else {
			cek_session_reseller();
			$id = $this->uri->segment(3);
			$pengaturan_id = 1;
			$data['invoice'] = $this->model_member->get_invoice_print($id)->row_array();
			$data['member'] = $this->model_member->get_member($this->session->userdata('email'))->row_array();
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$this->load->view('reseller/invoice_print', $data);
		}
	}

	function invoice() {
		cek_session_reseller();
		$get_email = $this->session->userdata('email');
		$get_member_id = $this->model_member->get_member($get_email)->row_array();
		$member_id = $get_member_id['member_id'];
		$data['member'] = $this->model_member->get_member($get_email)->row_array();
		$data['lihat'] = $this->model_member->filter_invoice_email($member_id);
		$pengaturan_id = 1;
		$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
		$this->load->view('reseller/invoice', $data);
	}
}