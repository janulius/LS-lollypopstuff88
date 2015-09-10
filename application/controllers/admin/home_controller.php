<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_controller extends CI_Controller {

    private $data;

    public function __construct()
    {
	parent::__construct();
	$this->load->model('slideshow_model');
    }

    function index()
    {
	if($this->session->userdata(ADMIN_SESSION))
	{
	    $this->data['username'] = $this->session->userdata(ADMIN_SESSION);
	    $this->data['tab_active'] = 'HOME';
	    $this->data['slideshows'] = $this->slideshow_model->show();

	    $this->load->view('admin/home_view', $this->data);
	}
	else
	{
	    redirect(base_url() . ADMIN_URL);
	}
    }

    function upload_slideshow()
    {
//	$config['upload_path'] = UPLOAD_PATH . '\slideshow';
	$config['upload_path'] = UPLOAD_PATH . '/slideshow';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size'] = '400';
	$config['max_width'] = '1024';
	$config['max_height'] = '768';

	$this->load->library('upload', $config);

	if (!$this->upload->do_upload('slideshow'))
	{
	    $this->data['upload_error_data'] = '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>';
	    $this->data['username'] = $this->session->userdata(ADMIN_SESSION);
	    $this->data['tab_active'] = 'HOME';
	    $this->data['slideshows'] = $this->slideshow_model->show();

	    // Load using notification
	    //$this->load->view('admin/home_view', $this->data);

	    redirect(base_url() . ADMIN_URL . '/home');
	}
	else
	{
	    $img_data = $this->upload->data();

	    $this->data['username'] = $this->session->userdata(ADMIN_SESSION);
	    $this->data['tab_active'] = 'HOME';
	    $this->data['slideshows'] = $this->slideshow_model->show();

	    $db_data = $this->slideshow_model->insert(UPLOAD_PATH_HTTP . 'slideshow/' . $img_data['file_name']) ? 'updated.' : 'not updated.';
	    $this->data['upload_success_data'] = '<div class="alert alert-success" role="alert">' . "File <b>" . $img_data['orig_name'] . "</b> successfully uploaded. Database " . $db_data . '</div>';

	    // Load using notification
	    //$this->load->view('admin/home_view', $this->data);

	    redirect(base_url() . ADMIN_URL . '/home');
	}
    }

    function delete_slideshow()
    {
	$id = $this->input->post('picture');
	$this->slideshow_model->delete($id);
	redirect(base_url() . ADMIN_URL . '/home');
    }

}
