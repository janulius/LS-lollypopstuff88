<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Testimoni_controller extends CI_Controller {

    private $data;

    public function __construct()
    {
	parent::__construct();
	$this->load->model('testimoni_model');
    }

    function index()
    {
	if($this->session->userdata(ADMIN_SESSION))
	{
	    $this->data['username'] = $this->session->userdata(ADMIN_SESSION);
	    $this->data['tab_active'] = 'TESTIMONI';
	    $this->data['testimonies'] = $this->testimoni_model->show();

	    $this->load->view('admin/testimoni_view', $this->data);
	}
	else
	{
	    redirect(base_url() . ADMIN_URL);
	}
    }

    function insert_testimoni()
    {
	// Get image
//	$config['upload_path'] = UPLOAD_PATH . '\testimonies';
	$config['upload_path'] = UPLOAD_PATH . '/testimonies';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size'] = '400';
	$config['max_width'] = '320';
	$config['max_height'] = '569';

	$this->load->library('upload', $config);

	// Upload
	$this->upload->do_upload('testimoni');

	// Get file metadata
	$img_data = $this->upload->data();

	// Insert to database
	$this->testimoni_model->insert(UPLOAD_PATH_HTTP . 'testimonies/' . $img_data['file_name']);

	redirect(base_url() . ADMIN_URL . '/testimoni');
    }


    function delete_testimoni()
    {
	$id = $this->input->post('id');

	$this->testimoni_model->delete($id);

	redirect(base_url() . ADMIN_URL . '/testimoni');
    }

}