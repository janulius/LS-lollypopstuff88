<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Testimoni_controller extends CI_Controller {

    public function __construct()
    {
	parent::__construct();
	$this->load->model('testimoni_model');
    }

    public function index()
    {
	$data['testimonies'] = $this->testimoni_model->show();
	$this->load->view('customer/testimoni_view', $data);
    }

}

/* End of file testimoni_controller.php */
/* Location: ./application/MVC_FOLDER/testimoni_controller.php */