<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_controller extends CI_Controller {

    public function __construct()
    {
	parent::__construct();
	$this->load->model('slideshow_model');
	$this->load->model('product_model');
    }

    public function index()
    {
	$data['slideshows'] = $this->slideshow_model->show();
	$data['products'] = $this->product_model->show();

	$this->load->view('customer/home_view', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */