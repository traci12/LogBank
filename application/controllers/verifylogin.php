<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class VerifyLogin extends CI_Controller {
 
	function __construct()
	{
	   parent::__construct();
	   $this->load->library('session');
	   $this->load->model('user_login_model','',TRUE);
	   $this->load->model('update_currsession_model');
	 }

	function index(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	    if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed.  User redirected to login page
	   //	$this->load->view('login_alert');
	     $this->load->view('login_view');
	   }
	    else
	   {
	     //Go to private area
	     redirect('dashboard', 'refresh');
	   }
	}


function check_database($password)
	 {
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username');
	 
	   //query the database
	   $result = $this->user_login_model->get_user_login($username, $password);
	 
	   if($result)
	   {
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
	       $_SESSION['uid']=$row->user_id;
	       $_SESSION['office']=$row-> office;
	       $this->session->set_userdata('logged_in', $sess_array);
	       $this->update_currsession_model->insert_session($row->user_id);
	     }
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', "<script type='text/javascript'>alert('Invalid username or password')</script>");
	     return false;
	   }
	 }
	}

?>