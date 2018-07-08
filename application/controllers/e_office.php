<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_office extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->model('get_office_model');
	   $this->load->model('update_office_model');
	 }
	 function index(){
		if (!$this->session->userdata('logged_in')) {
			 redirect('login', 'refresh');		}
		$userinfo = $this->session->userdata('logged_in');
		if($userinfo['user_type_id']!=1)
			redirect('error','refresh');
	
	}
	function getOffice($id){ 		       
			if (!$this->session->userdata('logged_in'))
			 {
			 	redirect('login', 'refresh');		
			 }
			$userinfo = $this->session->userdata('logged_in');
			if($userinfo['user_type_id']!=1)
				redirect('error','refresh');
			 	$result=$this->get_office_model->getOffice($id);
	    		$sess_array = array();
	    		if($result)
	    		{
	     			foreach($result as $row)
	     			{
	       				$sess_array = array(
	         			'id' => $row->office_id,
	         			'office_code'=> $row->office_code,
	         			'office_desc' => $row->office_desc,
	         			'room_no' => $row->room_no,
	         			'building' => $row->building
	       			);
	       		$this->session->set_userdata('edit_Office', $sess_array);
	     		}     		       
				$userinfo = $this->session->userdata('edit_Office');
				$data['officeinfo']=$userinfo;
				$this->load->view('e_office_view',$data);
			}

	}
	function updateOffice(){
		$userinfo = $this->session->userdata('logged_in');
		if($userinfo['user_type_id']!=1)
			redirect('error','refresh');
		if($this->input->post('submit'))
		{
			$this->update_office_model->updateOffice();
					echo "<script>alert('Succesfully Deleted');</script>";
			redirect('s_office','refresh');		
		}
	}
}

?>