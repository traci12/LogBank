<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class my_visitors extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->library('session');
	 }

	function index(){
		$userinfo = $this->session->userdata('logged_in');
		$data['userinfo']=$userinfo;
		$this->load->view('my_visitor_view',$data);
	}
}

?>