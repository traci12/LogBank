<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	 }

	function index(){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		else{
			$userinfo = $this->session->userdata('logged_in');
			if($userinfo['user_type_id']!=4)
				redirect('error','refresh');
		$userinfo = $this->session->userdata('logged_in');
		$data['userinfo']=$userinfo;
		$this->load->view('staff_view',$data);
		}
	
	}
	function prints($uid,$date1,$date2) {
		$userinfo = $this->session->userdata('logged_in');
		if($userinfo['user_type_id']!=4)
			redirect('error','refresh');
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