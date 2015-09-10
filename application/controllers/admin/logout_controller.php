<?php

class Logout_controller extends CI_Controller {

    public function __construct()
    {
	parent::__construct();
    }

    function logout()
    {
	$this->session->unset_userdata(ADMIN_SESSION);
	$this->session->sess_destroy();
	redirect(ADMIN_URL);
    }

}
