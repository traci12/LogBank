<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_staff extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   	   $this->load->model('user_profile_model');
	   $this->load->model('user_getprofile_model');
	 }
	function getProfile($uid){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		else{
			$userinfo = $this->session->userdata('logged_in');
			if($userinfo['user_type_id']!=1)
				redirect('error','refresh');
				$result = $this->user_getprofile_model->get_userprofile($uid);
	    		 $sess_array = array();
	    	if($result)
	    	{
	     		foreach($result as $row)
	     		{
	       			$sess_array = array(
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
	       		$this->session->set_userdata('edit_profile', $sess_array);
	     		}     		       
				$userinfo = $this->session->userdata('edit_profile');
				$data['userinfo']=$userinfo;
				$this->load->view('e_staff_view',$data);
			}

		}
	}
	function updateProfile(){
		$userinfo = $this->session->userdata('logged_in');
		if($userinfo['user_type_id']!=1)
			redirect('error','refresh');
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
				$this->load->view('e_staff_view',$data);
			}
			else {
				$this->user_profile_model->update_userinfo();
				echo "<script>alert('Succesfully Deleted');</script>";
			    redirect('s_staff','refresh');
			}
			
		}
		else {
			if($this->form_validation->run()==FALSE) {
				$userinfo = $this->session->userdata('logged_in');
				$data['userinfo']=$userinfo;
				$this->load->view('e_staff_view',$data);
			}
		}

	}
}

?>