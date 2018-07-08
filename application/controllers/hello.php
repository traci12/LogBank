<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hello extends CI_Controller {
	
	public function index()
	{
		$this->load->view('you_view');
	}
	function you(){
		$this->load->view('you_view');
	}
}
?>