<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Biometrics extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->library('session');
	 }

	function index(){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		else{
			$userinfo = $this->session->userdata('logged_in');
			if($userinfo['user_type_id']!=1 && $userinfo['user_type_id']!=2)
				$this->load->view('error_view');
			else
			{
				$data['userinfo']=$userinfo;
				$this->load->view('biometrics_view',$data);
			}
		}
	
	}
}

?>