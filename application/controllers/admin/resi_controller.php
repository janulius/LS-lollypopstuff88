<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Resi_controller extends CI_Controller {

    private $data;

    public function __construct()
    {
	parent::__construct();
	$this->load->model('resi_model');
    }

    function index()
    {
	if($this->session->userdata(ADMIN_SESSION))
	{
	    $this->data['username'] = $this->session->userdata(ADMIN_SESSION);
	    $this->data['tab_active'] = 'RESI';
	    $this->data['resies'] = $this->resi_model->show();

	    $this->load->view('admin/resi_view', $this->data);
	}
	else
	{
	    redirect(base_url() . ADMIN_URL);
	}
    }

    function update_resi()
    {
	$content = $this->input->post('resi');
	$this->resi_model->update($content);

	redirect(base_url() . ADMIN_URL . '/resi');
    }

}