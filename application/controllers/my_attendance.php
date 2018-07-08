<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class my_attendance extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->library('session');
	 }

	function index(){
		$userinfo = $this->session->userdata('logged_in');
		$data['userinfo']=$userinfo;
		$this->load->view('my_attendance_view',$data);
	}

	function prints($uid,$date1,$date2) {
		
		if ($date1==" ") {
			
		}
		else {
			$data['data']=array(
				'uid' => $uid,
				'date1' => $date1,
				'date2' => $date2
			);
			$this->load->view('daterange_view',$data);
		}
	}
}

?> 