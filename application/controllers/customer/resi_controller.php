<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Resi_controller extends CI_Controller {

    public function __construct()
    {
	parent::__construct();
	$this->load->model('resi_model');
    }

    public function index()
    {
	$data['resies'] = $this->resi_model->show();

	$this->load->view('customer/resi_view', $data);
    }

}

/* End of file resi_controller.php */
/* Location: ./application/MVC_FOLDER/resi_controller.php */