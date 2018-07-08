<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reg_clock extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	 }

	function index(){
		$this->load->view('reg_clock_view');
	}
}

?>