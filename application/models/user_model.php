<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    private $table = 'USERS';

    function login($username, $password)
    {
//	$this->db->select(['USERNAME', 'PASSWORD']);
	$this->db->select(array('USERNAME', 'PASSWORD'));
	$this->db->from($this->table);
//	$this->db->where(['USERNAME' => $username, 'PASSWORD' => md5($password)]);
	$this->db->where(array('USERNAME' => $username, 'PASSWORD' => md5($password)));
	$this->db->limit(1);
	$query = $this->db->get();

	if($query->num_rows == 1){
	    return $query->result();
	} else {
	    return false;
	}
    }

}
