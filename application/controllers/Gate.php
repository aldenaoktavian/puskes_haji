<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gate extends CI_Controller {

	public function index()
	{
		$data['title'] = "Home - PUSKES Haji";

		$this->load->view('home-new', $data);
	}

	public function home()
	{
		$data['title'] = "Home - PUSKES Haji";

		$this->load->view('home-new', $data);
	}
}
