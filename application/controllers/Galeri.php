<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{
		$data['title'] = "Foto Galeri - PUSKES Haji";
		$data['sub_title'] = "Foto Galeri";
		$data['url_type'] = "foto";

		$data['load_galeri_type'] = $this->load->view('galeri/foto', NULL, TRUE);

		$this->load->view('galeri', $data);
	}

	public function foto()
	{
		$data['title'] = "Foto Galeri - PUSKES Haji";
		$data['sub_title'] = "Foto Galeri";
		$data['url_type'] = "foto";

		$data['load_galeri_type'] = $this->load->view('galeri/foto', NULL, TRUE);

		$this->load->view('galeri', $data);
	}

	public function video()
	{
		$data['title'] = "Video Galeri - PUSKES Haji";
		$data['sub_title'] = "Video Galeri";
		$data['url_type'] = "video";

		$data['load_galeri_type'] = $this->load->view('galeri/video', NULL, TRUE);

		$this->load->view('galeri', $data);
	}
}
