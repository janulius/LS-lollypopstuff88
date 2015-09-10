<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Resi_model extends CI_Model {

    private $table = 'RESI';

    function show()
    {
//	$this->db->select(['ID', 'CONTENT']);
	$this->db->select(array('ID', 'CONTENT'));
	$this->db->from($this->table);
	$query = $this->db->get();

	if($query->num_rows > 0){
	    return $query->result();
	} else {
	    return false;
	}
    }

    function update($content)
    {
//	$this->db->where(['ID' => 1]);
	$this->db->where(array('ID' => 1));
//	return $this->db->update($this->table, ['CONTENT' => $content]);
	return $this->db->update($this->table, array('CONTENT' => $content));
    }

}
