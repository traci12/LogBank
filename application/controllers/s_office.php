<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class s_office extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->library('session');
	   	$this->load->helper('html'); 
	   $this->load->helper('form');
	   $this->load->model('add_office_model');
	   $this->load->model('delete_office_model');
	 }
 
	function index(){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		else
		{
			$userinfo = $this->session->userdata('logged_in');
			if($userinfo['user_type_id']!=1)
				$this->load->view('error_view');
			else
				$this->addOffice();
		}
	
	}
	function addOffice(){
		
		if($this->input->post('submit')){
			
				$this->add_office_model->insert_office();
				echo "<script>alert('Succesfully Added');</script>";
				redirect('s_office','refresh');
		}
		else {
				$userinfo = $this->session->userdata('logged_in');
				$data['userinfo']=$userinfo;
				$this->load->view('s_office_view',$data);
			
		}
	}
	function deleteOffice($id){
		$this->delete_office_model->deleteOffice($id);
		echo "<script>alert('Succesfully Deleted');</script>";
		redirect('s_office','refresh');
	}
}

?>