<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('model_pengaturan');
		$this->load->model('model_member');
	}

	function index() {
		cek_session();
		$data['server'] = $this->db->get('server');
		$data['member'] = $this->db->get('member');
		$data['account'] = $this->db->get('t_account');
		$data['invoice'] = $this->db->query("SELECT * FROM invoice WHERE status='pending'");
		$pengaturan_id = 1;
		$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
		$this->load->view('admin/dashboard', $data);

	}

	function pengaturan() {
		cek_session();

		if (isset($_POST['submit'])) {

			$pengaturan_id = 1;
			$nama_perusahaan = $this->input->post('nama_perusahaan');
			$meta_title = $this->input->post('meta_title');
			$meta_description = $this->input->post('meta_description');
			$meta_keyword = $this->input->post('meta_keyword');
			$meta_author = $this->input->post('meta_author');
			$alamat = $this->input->post('alamat');
			$mode_maintenance = $this->input->post('mode_maintenance');
			$mode_register = $this->input->post('mode_register');
			$user_admin = $this->input->post('user_admin');
			$pass_admin = $this->input->post('pass_admin');
			$email = $this->input->post('email');
			$no_hp = $this->input->post('no_hp');
			$bank_account = $this->input->post('bank_account');
			$mata_uang = $this->input->post('mata_uang');

			if (empty($pass_admin)) {
				$data = array('nama_perusahaan'=>$nama_perusahaan,'meta_title'=>$meta_title,'meta_description'=>$meta_description,'meta_keyword'=>$meta_keyword,'meta_author'=>$meta_author,'alamat'=>$alamat,'mode_maintenance'=>$mode_maintenance,'mode_register'=>$mode_register,'user_admin'=>$user_admin,'email'=>$email,'no_hp'=>$no_hp,'bank_account'=>$bank_account,'mata_uang'=>$mata_uang);
			} else {
				$data = array('nama_perusahaan'=>$nama_perusahaan,'meta_title'=>$meta_title,'meta_description'=>$meta_description,'meta_keyword'=>$meta_keyword,'meta_author'=>$meta_author,'alamat'=>$alamat,'mode_maintenance'=>$mode_maintenance,'mode_register'=>$mode_register,'user_admin'=>$user_admin,'pass_admin'=>md5($pass_admin),'email'=>$email,'no_hp'=>$no_hp,'bank_account'=>$bank_account,'mata_uang'=>$mata_uang);
			}

			$this->db->where('pengaturan_id', $pengaturan_id);
			$this->db->update('pengaturan', $data);
			redirect('dashboard/pengaturan');

		} else {
			$pengaturan_id = 1;
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$this->load->view('admin/pengaturan.php', $data);
		}
	}

	function account() {
		cek_session();
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

		$config['base_url'] = base_url().'index.php/dashboard/invoice/index/';
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

		$data['lihat'] = $this->model_member->account_admin($config['per_page'],$halaman);
		$pengaturan_id = 1;
		$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
		$this->load->view('admin/account', $data);
	}

	function delete_account() {
		cek_session();
		$account_id = $this->uri->segment(3);
		$data = $this->db->query("SELECT s.ip_server, s.password, ta.username_ssh, ta.server_id FROM t_account as ta, server as s WHERE ta.server_id=s.server_id AND ta.account_id='$account_id'")->row_array();
		$username_ssh = $data['username_ssh'];
		$connection = ssh2_connect($data['ip_server'], 22);
		if (ssh2_auth_password($connection, 'root', $data['password'])) {
			$result = ssh2_exec($connection, "userdel -r $username_ssh");
		}
		$this->db->where('account_id', $account_id);
		$this->db->delete('t_account');
		redirect('dashboard/account');
	}

	function invoice() {
		cek_session();
		$jml = $this->db->get('invoice');

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

		$config['base_url'] = base_url().'index.php/dashboard/invoice/index/';
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

		$data['lihat'] = $this->model_member->tampil_halaman($config['per_page'],$halaman);
		$pengaturan_id = 1;
		$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
		$this->load->view('admin/invoice', $data);
	}

	function approve_payment() {

		if (isset($_POST['submit'])) {
			$deposit = $this->input->post('deposit');
			$email = $this->input->post('email');
			$status = $this->input->post('status');
			$invoice_id = $this->input->post('invoice_id');
			$this->db->where('email', $email);
			$subtotal = $this->db->get('member')->row_array();
			$total = $subtotal['saldo'] + $deposit;
			$this->db->query("UPDATE invoice as i, member as m SET m.saldo='$total', i.status='$status' WHERE i.member_id=m.member_id AND i.invoice_id='$invoice_id'");
			redirect('dashboard/invoice');
		} else {
			$id = $this->uri->segment(3);
			$data['lihat'] = $this->model_member->get_invoice($id)->row_array();
			$pengaturan_id = 1;
			$data['record'] = $this->model_pengaturan->get_pengaturan($pengaturan_id)->row_array();
			$this->load->view('admin/approve', $data);
		}
	}

	function delete_invoice() {
		cek_session();
		$invoice_id = $this->uri->segment(3);
		$this->db->where('invoice_id', $invoice_id);
		$link_path = $this->db->get('invoice')->row_array();
		$get_path = $link_path['bukti'];
		if (empty($get_path)) {
			$this->model_member->delete_invoice($invoice_id);
			redirect('dashboard/invoice');
		} else {
			$path = './assets/index/invoice/'.$get_path;
			unlink($path);
			$this->model_member->delete_invoice($invoice_id);
			redirect('dashboard/invoice');
		}
	}

}
