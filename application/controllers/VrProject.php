<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VrProject extends CI_Controller {

	public function index()
	{
		$this->load->view('main.php');
	}

	public function entrada(){
		$this->load->view('entrada.php');
	}
}
