<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pengaturan extends CI_Model {

	function login($user_admin, $pass_admin) {
		$check = $this->db->get_where('pengaturan', array('user_admin'=>$user_admin, 'pass_admin'=>md5($pass_admin)));
		if ($check->num_rows() > 0 ) {
			return 1;
		} else {
			return 0;
		}
	}

	function get_pengaturan($pengaturan_id) {
		$param = array('pengaturan_id' => $pengaturan_id);
		return $this->db->get_where('pengaturan', $param);
	}
}