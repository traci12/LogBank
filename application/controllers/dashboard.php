<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dashboard extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->library('session');
	   $this->load->helper('html');
	 }

	function index(){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		else{
		$userinfo = $this->session->userdata('logged_in');
		$data['userinfo']=$userinfo;
		$this->load->view('dashboard_view',$data);
		}
	
	}
}

?>