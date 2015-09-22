<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Detail_controller extends CI_Controller {
    public function index()
    {
	   $this->load->view('customer/detail_view');
    }

}
