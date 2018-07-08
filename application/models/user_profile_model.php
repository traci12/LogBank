<?php
class User_profile_model extends CI_Model{
	function update_userinfo(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$usertype=$this->input->post('usertype');
		$uid=$this->input->post('uid');
		$fname=$this->input->post('firstname');
		$mname=$this->input->post('middlename');
		$lname=$this->input->post('lastname');
		$address1=$this->input->post('address1');
		$address2=$this->input->post('address2');
		$address3=$this->input->post('address3');
		$birthday=$this->input->post('birthday');
		$gender=$this->input->post('gender');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$office=$this->input->post('office');
        $result=$this->db->query("UPDATE lb_userinfo SET fname='$fname', mname='$mname',lname='$lname',address1='$address1'
        					      ,address2='$address2',address3='$address3',birthday='$birthday',gender='$gender', email='$email',
        					      contact='$contact',office='$office' WHERE user_id='$uid'");
       	$result2=$this->db->query("UPDATE lb_user SET username='$username', password='$password',user_type_id='$usertype' WHERE user_id='$uid'");
	}
}
?>