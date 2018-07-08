<?php
class Delete_picture_model extends CI_Model{
	function updatePicture(){
		$id=$_SESSION['uid'];
        $result=$this->db->query("UPDATE lb_user set picture_url=' ' where user_id = '$id'");
	}
}
?>