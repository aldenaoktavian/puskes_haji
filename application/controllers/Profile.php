<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data['title'] = "Profile - PUSKES Haji";
		$data['url_type'] = "visi-misi";

		$data['load_profile_type'] = $this->load->view('profile/visi-misi', NULL, TRUE);

		$this->load->view('profile', $data);
	}

	public function visi_misi()
	{
		$data['title'] = "Visi Misi - PUSKES Haji";
		$data['url_type'] = "visi-misi";

		$data['load_profile_type'] = $this->load->view('profile/visi-misi', NULL, TRUE);

		$this->load->view('profile', $data);
	}

	public function tugas_fungsi()
	{
		$data['title'] = "Tugas dan Fungsi - PUSKES Haji";
		$data['url_type'] = "tugas-fungsi";

		$data['load_profile_type'] = $this->load->view('profile/tugas-fungsi', NULL, TRUE);

		$this->load->view('profile', $data);
	}

	public function struktur_organisasi()
	{
		$data['title'] = "Struktur Organisasi - PUSKES Haji";
		$data['url_type'] = "struktur-organisasi";

		$data['load_profile_type'] = $this->load->view('profile/struktur-organisasi', NULL, TRUE);

		$this->load->view('profile', $data);
	}
}
