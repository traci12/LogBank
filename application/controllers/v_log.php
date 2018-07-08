<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class v_log extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->model('update_vlog_model');
	   $this->load->model('add_visitor_model');
	   $this->load->model('delete_vlog_model');
	 }

	function index(){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		else{
			$userinfo = $this->session->userdata('logged_in');
			if($userinfo['user_type_id']!=1 && $userinfo['user_type_id']!=2)
				redirect('error','refresh');
			else
				$this->addLogRecord();
		}
	
	}

	function addLogRecord(){
		
		if($this->input->post('submit')){			
				$this->add_visitor_model->insert_visitor();
				echo "<script>alert('Succesfully Added');</script>";
				redirect('v_log','refresh');			
		}
		else
		{
			
			$userinfo = $this->session->userdata('logged_in');
			if($userinfo['user_type_id']!=1 && $userinfo['user_type_id']!=2)
				redirect('error','refresh');
			else
			{
				$data['userinfo']=$userinfo;
				$this->load->view('v_log_view',$data);
			}		
		}
	}

	function timeoutRecord($id){
		$userinfo = $this->session->userdata('logged_in');
		if($userinfo['user_type_id']!=1 && $userinfo['user_type_id']!=2)
			redirect('error','refresh');
		else
		{
			$this->update_vlog_model->update_record($id);
			echo "<script>alert('SUCCESS');</script>";
			redirect('v_log','refresh');
		}
	}
	
	function deleteRecord($id){
		$userinfo = $this->session->userdata('logged_in');
		if($userinfo['user_type_id']!=1)
			redirect('error','refresh');
		else
		{
			$this->delete_vlog_model->delete_dtrecord($id);
			echo "<script>alert('Record has been deleted');</script>";
			redirect('v_log','refresh');
		}
	}
}

?>