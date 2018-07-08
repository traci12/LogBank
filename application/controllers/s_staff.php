<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class s_staff extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->library('session');
	   $this->load->helper('html'); 
	   $this->load->helper('form');
	   $this->load->model('add_user_model');
	   $this->load->model('delete_staff_model');
	 }

	function index(){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		else
		{
			$userinfo = $this->session->userdata('logged_in');
			if($userinfo['user_type_id']!=1)
				redirect('error','refresh');
			else
				$this->insertUser();
		}
	}
	function insertUser(){
		$userinfo = $this->session->userdata('logged_in');
		if($userinfo['user_type_id']!=1)
			redirect('error','refresh');
		$config=array(
				array(
					'field'=>'email',
					'label'=>'Email',
					'rules'=>'is_unique[lb_userinfo.email]'
				),
				array(
					'field'=>'username',
					'label'=>'Username',
					'rules'=>'is_unique[lb_user.username]'
				),
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
				$this->load->view('s_staff_view',$data);
			}
			else {
				$this->add_user_model->insert_userinfo();
				echo "<script>alert('Succesfully Added');</script>";
				redirect('s_staff','refresh');
			}
			
		}
		else {
			if($this->form_validation->run()==FALSE) {
				$userinfo = $this->session->userdata('logged_in');
				$data['userinfo']=$userinfo;
				$this->load->view('s_staff_view',$data);
			}
		}
	}
	function deleteStaff($id){
		$userinfo = $this->session->userdata('logged_in');
		if($userinfo['user_type_id']!=1)
			redirect('error','refresh');
		else
		{
			$this->delete_staff_model->deleteRecord($id);
			echo "<script>alert('Record has been deleted');</script>";
			redirect('s_staff','refresh');
		}
	}
}

?>