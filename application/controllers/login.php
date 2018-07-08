<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->library('session');
	 }

	function index(){
		if ($this->session->userdata('logged_in')) {
	   	 redirect('dashboard', 'refresh');
	  	 }
	  	 else{
		 $this->load->helper(array('form'));
		$this->load->view('login_view');
		}
	}

}
?>