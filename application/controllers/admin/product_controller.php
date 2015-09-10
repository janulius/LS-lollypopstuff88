<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_controller extends CI_Controller {

    private $data;

    public function __construct()
    {
	parent::__construct();
	$this->load->model('product_model');
    }

    function index()
    {
	if($this->session->userdata(ADMIN_SESSION))
	{
	    $this->data['username'] = $this->session->userdata(ADMIN_SESSION);
	    $this->data['tab_active'] = 'PRODUCT';
	    $this->data['products'] = $this->product_model->show();

	    $this->load->view('admin/product_view', $this->data);
	}
	else
	{
	    redirect(base_url() . ADMIN_URL);
	}
    }

    function insert_product()
    {
	// Get text data
	$name = $this->input->post('name');
	$description = $this->input->post('description');

	// Get image
//	$config['upload_path'] = UPLOAD_PATH . '\products';
	$config['upload_path'] = UPLOAD_PATH . '/products';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size'] = '400';
	$config['max_width'] = '1300';
	$config['max_height'] = '1300';

	$this->load->library('upload', $config);

	// Upload
	$this->upload->do_upload('image');

	$img_data = $this->upload->data();

	// Insert to database
	$this->product_model->insert($name, UPLOAD_PATH_HTTP . 'products/' . $img_data['file_name'], $description);

	redirect(base_url() . ADMIN_URL . '/product');
    }


    function delete_product()
    {
	$id = $this->input->post('id');

	$this->product_model->delete($id);

	redirect(base_url() . ADMIN_URL . '/product');
    }

    function update_product()
    {
	$id = $this->input->post('id');
	$name = $this->input->post('name');
	$description = $this->input->post('description');

	$this->product_model->update($id, $name, $description);

	redirect(base_url() . ADMIN_URL . '/product');
    }

}