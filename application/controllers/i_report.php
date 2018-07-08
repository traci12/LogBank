<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class I_report extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	    $this->load->model('add_report_model');
	 }

	function index(){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		else{
			$userinfo = $this->session->userdata('logged_in');
			if($userinfo['user_type_id']!=1 && $userinfo['user_type_id']!=2)
				redirect('error','refresh');
			else
				$this->addReport();
		}
	} 
	function addReport(){
	
		if($this->input->post('submit')){
			
				$this->add_report_model->insert_report();
				echo "<script>alert('Succesfully Added');</script>";
				redirect('i_report','refresh');
		}
		else
		{
			$userinfo = $this->session->userdata('logged_in');
			if($userinfo['user_type_id']!=1 && $userinfo['user_type_id']!=2)
				redirect('error','refresh');
			else
			{
				$data['userinfo']=$userinfo;
				$this->load->view('i_report_view',$data);
			}		
		}
	}
}

?>