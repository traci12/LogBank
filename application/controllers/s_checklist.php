<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class s_checklist extends CI_Controller{
	function __construct()
	{ 
	   parent::__construct();
	    $this->load->helper('html'); 
	   $this->load->helper('form');
	   	    $this->load->model('add_checklist_model');
	   	      $this->load->model('delete_checklist_model');

	 }

	function index(){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		else{
			$this->addCheckList();
		}
	
	}

	function addChecklist(){
		
		if($this->input->post('submit')){
				$this->add_checklist_model->insert_checklist();
				echo "<script>alert('Succesfully Added');</script>";
				redirect('s_checklist','refresh');
			}
		else {
				$userinfo = $this->session->userdata('logged_in');
				$data['userinfo']=$userinfo;
				$this->load->view('s_checklist_view',$data);
			}
	}
	function deleteChecklist($id){
		$this->delete_checklist_model->deleteChecklist($id);
		echo "<script>alert('Succesfully Deleted');</script>";
		redirect('s_checklist','refresh');
	}
}

?>