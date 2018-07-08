<?php

class Compare extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}

	function index() {
		$userinfo = $this->session->userdata('logged_in');
		$data['userinfo']=$userinfo;
		$this->load->view('compare_view.php',$data);
	}
}