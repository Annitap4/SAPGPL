<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SAPGPL extends CI_Controller {

	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('welcome_message');
        $this->load->view('templates/footer');
	}
}

