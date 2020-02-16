<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['title'] = "Home";
		$data['description'] = "Home Page";
		$this->load->view("front/home/index", $data);
	}

}
