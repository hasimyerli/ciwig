<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['title'] = "Help";
		$data['description'] = "Help Page";
		$this->load->view("front/help/index", $data);
	}

}
