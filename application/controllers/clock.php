<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class clock extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	 }

	function index(){
		$this->load->view('clock_view');
	}
}

?>