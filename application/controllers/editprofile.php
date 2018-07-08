<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class editprofile extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->helper('html'); 
	   $this->load->helper('form');
	   $this->load->library('session');
	   $this->load->model('user_profile_model');
	   $this->load->model('user_getprofile_model');
	 }

	function index(){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		else{
		$this->updateProfile();
		}
	}


	function updateProfile(){
		$config=array(
				array(
					'field'=>'cpassword',
					'label'=>'Password-confirmation',
					'rules'=>'matches[password]'
				)
			);

			$this->form_validation->set_rules($config);
		if($this->input->post('submit')&&$this->input->post('password')==$this->input->post('cpassword')){
			if($this->form_validation->run()==FALSE) {
				$userinfo = $this->session->userdata('logged_in');
				$data['userinfo']=$userinfo;
				$this->load->view('editprofile_view',$data);
			}
			else {
				$uid=$this->input->post('uid');
			//update user data
			$this->user_profile_model->update_userinfo();
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
	     echo "<script>alert('Succesfully Updated');</script>";
	       $this->session->set_userdata('logged_in', $sess_array);
	       redirect('editprofile', 'refresh');
	   	   }//End of Foreach Statement.
			}
			
		}
		else {
			if($this->form_validation->run()==FALSE) {
				$userinfo = $this->session->userdata('logged_in');
				$data['userinfo']=$userinfo;
				$this->load->view('editprofile_view',$data);
			}
		}


}





	
}

?>