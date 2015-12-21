<?php 
//session admin

function cek_session() {
	$CI = & get_instance();
	$session = $CI->session->userdata('status_login');
	if ($session != '24ba97d18b28a6e71b6898a158de1543') {
		redirect('admin/login');
	}

}

function cek_session_login() {
	$CI = & get_instance();
	$session = $CI->session->userdata('status_login');
	if ($session == '24ba97d18b28a6e71b6898a158de1543') {
		redirect('dashboard');
	}
}

//session reseller 

function cek_session_reseller() {
	$CI = & get_instance();
	$session = $CI->session->userdata('status_login');
	if ($session != '704db471e8957c170c00a99189d2d116') {
		redirect('auth/login_member');
	}

}

function cek_session_login_reseller() {
	$CI = & get_instance();
	$session = $CI->session->userdata('status_login');
	if ($session == '704db471e8957c170c00a99189d2d116') {
		redirect('clientarea');
	}
}
?>