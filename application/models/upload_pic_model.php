<?php

class Upload_Pic_Model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function upload_pics($url, $id) {
		$id= $id['id'];
		$this->db->query("UPDATE lb_user SET picture_url='$url' WHERE user_id='$id'");
	}
}