<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_user extends CI_Model {

	function tampil_data() {
		return $this->db->get('member');
	}

	function tampil_halaman($num, $offset) {
		$this->db->order_by('first_name', 'ASC');
		return $this->db->get('member', $num, $offset);
	}

	function simpan() {
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$no_hp = $this->input->post('no_hp');
		$saldo = $this->input->post('saldo');
		$tgl_registrasi = date('Y-m-d', strtotime($this->input->post('tgl_registrasi')));

		$data = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'password'=>$password,'no_hp'=>$no_hp,'saldo'=>$saldo,'tgl_registrasi'=>$tgl_registrasi);
		$this->db->insert('member', $data);
	}

	function get_user($id) {
		$param = array('member_id'=>$id);
		return $this->db->get_where('member', $param);
	}

	function edit() {
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$no_hp = $this->input->post('no_hp');
		$balance = $this->input->post('saldo');
		$member_id = $this->input->post('member_id');

		if (empty($password)) {
			$data = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'no_hp'=>$no_hp,'saldo'=>$balance);
		} else {
			$data = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'password'=>$password,'no_hp'=>$no_hp,'saldo'=>$balance);
		}

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $data);
	}

	function delete($id) {
		$this->db->where('member_id', $id);
		$this->db->delete('member');
	}

	function filter_account($username,$host) {
		return $this->db->query("SELECT s.ip_server, ta.username_ssh FROM server as s, t_account as ta WHERE s.server_id=ta.server_id AND ta.username_ssh='$username' AND s.ip_server='$host'");
	}

	function account($member_id,$num,$offset) {
		$this->db->where('member_id', $member_id);
		$this->db->order_by('username_ssh', 'ASC');
		return $this->db->get('t_account', $num, $offset);
	}
}