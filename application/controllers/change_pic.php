<?php

class Change_Pic extends CI_Controller {
	
	function __construct() {
		parent::__construct();
			   $this->load->model('user_profile_model');
			   	   $this->load->model('user_getprofile_model');


	}

	function index() {
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		else{
		$userinfo = $this->session->userdata('logged_in');
		$data['userinfo']=$userinfo;
		//echo $userinfo['id'];
		//$this->load->view('editprofile_view',$data);
		$uid=$userinfo['id'];
		$url2=$userinfo['url'];
		$file='./uploads/'.$url2;
		if(is_file($file))
			unlink($file);
			//update user data
			//get user data 
			$result=$this->user_getprofile_model->get_userprofile($uid);
			//Reload Session
	    	$sess_array = array();
	   	    foreach($result as $row)
	   		{
	     		$sess_array = array(
	     		'url'=> $row->picture_url,
	        	'id' => $row->user_id,
	        	'password'=> $row->password,
	        	'username' => $row->username,
	        	'lname' => $row->lname,
	        	'fname' => $row->fname,
	        	'mname' => $row->mname,
	        	'email' => $row->email,
	        	'user_type_id' => $row->user_type_id,
	        	'address1' => $row ->address1,
	        	'address2' => $row ->address2,
	         	'address3' => $row ->address3,
	        	'birthday' => $row ->birthday,
	        	'gender' => $row ->gender,
	        	'email' => $row ->email,
	        	'contact' => $row ->contact,
	        	'office' => $row -> office
	       );
	     	
	       $this->session->set_userdata('logged_in', $sess_array);
	       echo "<script>window.opener.location.href = window.opener.location='./editprofile';</script>";
			     echo "<script>window.close()</script>";
	       redirect('editprofile', 'refresh');
	   	   }//End of Foreach Statement.
		}
		
	}
}