<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_controller extends CI_Controller {

    public function __construct()
    {
	parent::__construct();
    }

    public function index()
    {
	$this->load->view('customer/contact_view');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */