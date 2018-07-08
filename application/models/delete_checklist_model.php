<?php
class Delete_checklist_model extends CI_Model{
	function deleteChecklist($id){
		$this->db->query("update lb_act_type set is_archived = 1 where inc_id = '$id'");
	}
}
?>