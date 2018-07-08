<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dtr_record extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->model('delete_model');
	   $this->load->model('update_dtr_model');
	 }

	function index(){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		else{
			$userinfo = $this->session->userdata('logged_in');
			if($userinfo['user_type_id']!=1 && $userinfo['user_type_id']!=2)
				redirect('error','refresh');
			else
			{
				$userinfo = $this->session->userdata('logged_in');
				$data['userinfo']=$userinfo;
				$this->load->view('dtr_record_view',$data);
			}
		}
	
	}
	function deleteRecord($id){
		$userinfo = $this->session->userdata('logged_in');
		if($userinfo['user_type_id']!=1 && $userinfo['user_type_id']!=2)
			redirect('error','refresh');
		else
		{
			$this->delete_model->delete_dtrecord($id);
			echo "<script>alert('Record has been deleted');</script>";
			redirect('dtr_record','refresh');
		}
	}
	function timeoutRecord($id){
		$userinfo = $this->session->userdata('logged_in');
		if($userinfo['user_type_id']!=1 && $userinfo['user_type_id']!=2)
			redirect('error','refresh');
		else
		{
			$this->update_dtr_model->update_record($id);
			echo "<script>alert('SUCCESS');</script>";
			redirect('dtr_record','refresh');
		}
	}

}

?>