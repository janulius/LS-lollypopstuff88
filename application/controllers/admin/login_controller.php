<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    public function __construct()
    {
	parent::__construct();

	$this->load->model('user_model');
    }

    public function index()
    {
	$this->load->view('admin/login_view');
    }

    function do_login()
    {
	$this->form_validation->set_rules('username', null, 'trim|required|xss_clean');
	$this->form_validation->set_rules('password', null, 'trim|required|xss_clean|callback_check_database');

	if($this->form_validation->run() == FALSE)
	{
	    $this->load->view('admin/login_view');
	}
	else
	{
	    redirect(ADMIN_URL . '/home');
	}
    }

    function check_database()
    {
	$username = $this->input->post('username');
	$password = $this->input->post('password');

	$result = $this->user_model->login($username, $password);

	if ($result)
	{
	    $this->session->set_userdata(ADMIN_SESSION, $result[0]->USERNAME);
	    return true;
	}
	else
	{
	    $this->form_validation->set_message('check_database', '<div class="alert alert-danger" role="alert">Invalid Username or Password.</div>');
	    return false;
	}
    }

}

/* End of file login_controller.php */
/* Location: ./application/MVC_FOLDER/login_controller.php */