<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{
		$data['title'] = "Berita - PUSKES Haji";
		$data['sub_title'] = "List Berita";
		$data['url_type'] = "list-berita";

		$data['load_berita_type'] = $this->load->view('berita/list-berita', NULL, TRUE);

		$this->load->view('berita', $data);
	}

	public function laporan_kerja()
	{
		$data['title'] = "Laporan Kerja - PUSKES Haji";
		$data['sub_title'] = "Laporan Kerja";
		$data['url_type'] = "laporan-kerja";

		$data['load_berita_type'] = $this->load->view('berita/laporan-kerja', NULL, TRUE);

		$this->load->view('berita', $data);
	}

	public function informasi_kegiatan()
	{
		$data['title'] = "Informasi Kegiatan - PUSKES Haji";
		$data['sub_title'] = "Informasi Kegiatan";
		$data['url_type'] = "informasi-kegiatan";

		$data['load_berita_type'] = $this->load->view('berita/informasi-kegiatan', NULL, TRUE);

		$this->load->view('berita', $data);
	}

	public function infografis()
	{
		$data['title'] = "Infografis Operasional Haji - PUSKES Haji";
		$data['sub_title'] = "Infografis Operasional Haji";
		$data['url_type'] = "infografis";

		$data['load_berita_type'] = $this->load->view('berita/infografis', NULL, TRUE);

		$this->load->view('berita', $data);
	}

	public function grafik()
	{
		$data['title'] = "Grafik Kunjungan Web - PUSKES Haji";
		$data['sub_title'] = "Grafik Kunjungan Web";
		$data['url_type'] = "grafik";

		$data['load_berita_type'] = $this->load->view('berita/grafik', NULL, TRUE);

		$this->load->view('berita', $data);
	}
}
