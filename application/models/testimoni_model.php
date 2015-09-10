<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Testimoni_model extends CI_Model {

    private $table = 'TESTIMONIES';

    function show()
    {
//	$this->db->select(['ID', 'URL']);
	$this->db->select(array('ID', 'URL'));
	$this->db->from($this->table);
	$this->db->order_by('ID', 'DESC');
	$query = $this->db->get();

	if($query->num_rows > 0){
	    return $query->result();
	} else {
	    return false;
	}
    }

    function insert($image)
    {
//	$data = [
//	    'URL' => $image
//	];

	$data = array('URL' => $image);
	return $this->db->insert($this->table, $data) ? true : false;
    }

    function delete($id)
    {
//	return $this->db->delete($this->table, ['ID' => $id]);
	return $this->db->delete($this->table, array('ID' => $id));
    }
}

/* End of file Slideshow_model.php */
/* Location: ./application/MVC_FOLDER/Slideshow_model.php */