<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SaveBio extends CI_Controller{
	function __construct()
	{
	   parent::__construct();
	   $this->load->model('bio_add_model');
	 }

	function registerBio($a,$b,$c,$d,$uid){
		$this->bio_add_model->insertBio($a,$b,$c,$d,$uid);
	}

}

?>