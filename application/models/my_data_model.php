<?php

class My_data_model extends CI_Model {
 
    // Constructor
    function __construct() {
        parent::__construct();
    }
 
    function get() {
        $query = $this->db->get('my_data');
 
        return $query;
    }
}