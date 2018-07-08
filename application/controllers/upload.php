<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('delete_picture_model');
	}

	function index()
	{
		$this->do_upload();
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			
			
			$data = array('upload_data' => $this->upload->data());
		
			$this->load->view('upload_success', $data);

			
		}
	}

	function save_url($url) {
		$userinfo = $this->session->userdata('logged_in');
		$data=$userinfo;
		
		$this->load->model('upload_pic_model');
		$this->upload_pic_model->upload_pics($url,$data);
		redirect('change_pic','refresh');
	}
	function deleteFiles($url){
		$file='/uploads/'.$url;
		if(is_file($file))
        	unlink($file); // delete file
        $this->delete_picture_model->updatePicture();
        
		redirect('change_pic','refresh');
	}
}
?>