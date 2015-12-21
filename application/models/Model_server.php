<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_server extends CI_Model {

	function tampil_data() {
		return $this->db->get('server');
	}

	function tampil_halaman($num, $offset) {
		$this->db->order_by('lokasi', 'ASC');
		return $this->db->get('server', $num, $offset);
	}

	function simpan() {
		$lokasi = $this->input->post('lokasi');
		$host = $this->input->post('host');
		$password = $this->input->post('password');
		$kapasitas = $this->input->post('kapasitas');
		$linkconfig = $this->input->post('type_url');
		$harga = $this->input->post('harga');

		$data = array('lokasi'=>$lokasi,'ip_server'=>$host,'password'=>$password,'kapasitas'=>$kapasitas,'link_config'=>$linkconfig,'harga'=>$harga);
		$this->db->insert('server', $data);
	}

	function get_server($id) {
		$param = array('server_id'=>$id);
		return $this->db->get_where('server', $param);
	}

	function edit() {
		$lokasi = $this->input->post('lokasi');
		$host = $this->input->post('host');
		$password = $this->input->post('password');
		$kapasitas = $this->input->post('kapasitas');
		$linkconfig = $this->input->post('link_config');
		$harga = $this->input->post('harga');
		$id = $this->input->post('id_server');

		if (empty($password)) {
		$data = array('lokasi'=>$lokasi, 'ip_server'=>$host, 'kapasitas'=>$kapasitas, 'link_config'=>$linkconfig, 'harga'=>$harga);
	    } else {
	    $data = array('lokasi'=>$lokasi, 'ip_server'=>$host, 'password'=>$password, 'kapasitas'=>$kapasitas, 'link_config'=>$linkconfig, 'harga'=>$harga);
	    }

	    $this->db->where('server_id', $id);
	    $this->db->update('server', $data);
	}

	function delete($id) {
		$this->db->where('server_id', $id);
		$this->db->delete('server');
	}
}