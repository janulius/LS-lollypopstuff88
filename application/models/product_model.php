<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends CI_Model {

    private $table = 'PRODUCTS';

    function show()
    {
//	$this->db->select(['ID', 'NAME', 'IMAGE', 'DESCRIPTION']);
	$this->db->select(array('ID', 'NAME', 'IMAGE', 'DESCRIPTION'));
	$this->db->from($this->table);
	$this->db->order_by('ID', 'DESC');
	$query = $this->db->get();

	if($query->num_rows > 0){
	    return $query->result();
	} else {
	    return false;
	}
    }

    function insert($name, $image, $description)
    {
//	$data = [
//	    'NAME' => $name,
//	    'IMAGE' => $image,
//	    'DESCRIPTION' => $description
//	];
	$data = array(
	    'NAME' => $name,
	    'IMAGE' => $image,
	    'DESCRIPTION' => $description
	);
	$this->db->insert($this->table, $data);
    }

    function delete($id)
    {
//	$this->db->delete($this->table, ['ID' => $id]);
	$this->db->delete($this->table, array('ID' => $id));
    }

    function update($id, $name, $description)
    {
	$this->db->where('ID', $id);

//	$data = [
//	    'NAME' => $name,
//	    'DESCRIPTION' => $description
//	];
	$data = array(
	    'NAME' => $name,
	    'DESCRIPTION' => $description
	);

	return $this->db->update($this->table, $data);
    }

}
