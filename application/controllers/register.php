<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->model('bio_add_model');
	 }

	function getProfile($uid){
		$userinfo = $this->session->userdata('logged_in');
		if($userinfo['user_type_id']!=1)
			redirect('error','refresh');
		$data['id']=$uid;
		$this->load->view('register_view',$data);
	}
	function saveBio($a,$b,$c,$d,$uid){
		$userinfo = $this->session->userdata('logged_in');
		if($userinfo['user_type_id']!=1)
			redirect('error','refresh');
		$this->bio_add_model->insertBio($a,$b,$c,$d,$uid);
		echo "<script>alert('Succesfully Updated');</script>";
		echo "<script>window.opener.location.href = window.opener.location='../s_office';</script>";
		echo "<script>window.close()</script>";	
	}

}

?>