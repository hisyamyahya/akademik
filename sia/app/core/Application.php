<?php if ( ! defined("BASEPATH")) exit("No direct script access alllowed");


class Application extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('akademik_model');
		$this->load->model('admin_model');
		$this->load->model('dosen_model');
		$this->load->model('mahasiswa_model');

		$db = $this->db->get('sia_settings');
		foreach ($db->result() as $rows) {
			# code...
			$data['title'] = $rows->title;
			$data['keyword'] = $rows->keyword;
			$data['description'] = $rows->description;
			$data['author'] = $rows->author;
			$data['logo'] = $rows->logo;
			$data['maintance'] = $rows->maintance;
		}
		$data['wew'] = "asswue";
		$this->twig->set($data);
	}
}