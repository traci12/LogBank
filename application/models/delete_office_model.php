<?php
class Delete_office_model extends CI_Model{
	function deleteOffice($id){
		$this->db->query("update lb_office set is_archived = 1 where office_id = '$id'");
	}
}
?>