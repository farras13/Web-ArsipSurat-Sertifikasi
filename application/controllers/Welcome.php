<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['view_name'] = "index";
		$this->load->view('template',$data);
	}

	public function unggah()
	{
		$data['view_name'] = "unggah";
		$this->load->view('template', $data);
	}

	public function lihat()
	{
		$data['view_name'] = "lihat";
		$this->load->view('template', $data);
	}

	public function about()
	{
		$data['view_name'] = "about";
		$this->load->view('template', $data);
	}
}
