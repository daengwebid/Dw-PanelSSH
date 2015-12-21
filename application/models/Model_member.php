<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_member extends CI_Model {

	function login_member($email, $password) {
		$check = $this->db->get_where('member', array('email'=>$email, 'password'=>md5($password)));
		if ($check->num_rows() > 0) {
			return 1;
		} else {
			return 0;
		}
    }

    function registration() {
    	$first_name = $this->input->post('first_name');
    	$last_name = $this->input->post('last_name');
    	$email = $this->input->post('email');
    	$password = md5($this->input->post('password'));
    	$no_hp = $this->input->post('no_hp');
    	$saldo = $this->input->post('saldo');
    	$tgl_registrasi  = $this->input->post('tgl_registrasi');

   		$data = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'password'=>$password,'no_hp'=>$no_hp,'saldo'=>$saldo,'tgl_registrasi'=>$tgl_registrasi);
   		$this->db->insert('member', $data);
    }

    function get_member($email) {
        $get_email = array('email'=>$email);
        return $this->db->get_where('member', $get_email);
    }

    function tampil_halaman($halaman, $offset) {
        $this->db->order_by('status', 'ASC');
        return $this->db->get('invoice', $halaman, $offset);
    }

    function get_invoice($id) {
        return $this->db->query("SELECT i.invoice_id, i.deposit, m.email, i.status FROM invoice as i, member as m WHERE i.member_id=m.member_id AND i.invoice_id='$id'");
    }

    function get_invoice_print($id) {
        $this->db->where('invoice_id', $id);
        return $this->db->get('invoice');
    }

    function filter_invoice_email($member_id) {
        $query = "SELECT m.email, m.saldo, i.tgl_invoice, i.deposit, i.bukti, i.status, i.invoice_id FROM invoice as i, member as m WHERE m.member_id=i.member_id AND i.member_id='$member_id' AND i.status='pending'";
        return $this->db->query($query);
    }

    function delete_invoice($invoice_id) {
        $this->db->where('invoice_id', $invoice_id);
        $this->db->delete('invoice');
    }

    function account_admin($num,$offset) {
        $this->db->order_by('username_ssh', 'ASC');
        return $this->db->get('t_account', $num, $offset);
    }

}