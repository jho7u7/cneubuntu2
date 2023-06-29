<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __contruct()
	{
		parent::__contruct();
		$this->load->model("Candidato");
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');

	}
} //fin de la class
