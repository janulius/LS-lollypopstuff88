<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class List_controller extends CI_Controller {
    public function index()
    {
	   $this->load->view('customer/list_view');
    }

}
