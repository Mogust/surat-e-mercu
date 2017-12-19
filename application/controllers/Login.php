<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('login/login');
		$this->load->view('home/footer');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */