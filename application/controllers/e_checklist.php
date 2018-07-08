<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_checklist extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->model('get_checklist_model');
	   $this->load->model('update_checklist_model');
	 }
	 function index(){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
	
	}
	function getChecklist($id){ 		       
			if (!$this->session->userdata('logged_in'))
			 {
			 	redirect('login', 'refresh');		
			 }
			 	$result=$this->get_checklist_model->getChecklist($id);
	    		$sess_array = array();
	    		if($result)
	    		{
	     			foreach($result as $row)
	     			{
	       				$sess_array = array(
	         			'id' => $row->inc_id,
	         			'inc_des'=> $row->inc_des,
	         			'time_code' => $row->time_code,
	         			'office_id' => $row->office_id
	       			);
	       		$this->session->set_userdata('edit_checklist', $sess_array);
	     		}     		       
				$userinfo = $this->session->userdata('edit_checklist');
				$data['checklistinfo']=$userinfo;
				$this->load->view('e_checklist_view',$data);
			}

	}
	function updateChecklist(){
		if($this->input->post('submit'))
		{
			$this->update_checklist_model->updateChecklist();
			echo "<script>alert('Succesfully Updated');</script>";
			redirect('s_checklist','refresh');		
		}
	}
}

?>