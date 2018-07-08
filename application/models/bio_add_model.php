<?php
class Bio_add_model extends CI_Model{
	function insertBio($a,$b,$c,$d,$uid){
		if ($a <> null && $b <> null && $c <> null && $d <> null)
		{
		$this->db->query("INSERT INTO lb_bio(bio_code1, bio_code2, bio_code3, bio_code4, user_id) VALUES('$a','$b','$c', '$d', '$uid')");
			echo '<script>alert("Success");</script>';
			echo 'window.close();';
					echo "<script>alert('Succesfully Updated');</script>";
		echo "<script>window.opener.location.href = window.opener.location='../s_staff';</script>";
		echo "<script>window.close()</script>";	
		}
		else
			echo '<script>alert("Failed");</script>';
		}
	}
?>