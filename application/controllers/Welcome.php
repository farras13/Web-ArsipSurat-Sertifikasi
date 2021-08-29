<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('surat_model', 'sm');
		date_default_timezone_set("Asia/Jakarta");
	}
	
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

	public function tambahData()
	{
		$config['upload_path'] = './uploads/surat/';
		$config['allowed_types'] = 'pdf';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('surat')){
			$error = array('error' => $this->upload->display_errors());
			echo $this->upload->display_errors();
		}
		else{
			$data = array(
				'no_surat' => $this->input->post('no'), 
				'kategori' => $this->input->post('kategori'), 
				'judul' => $this->input->post('judul'), 
				'file_surat' => $this->upload->data('file_name'), 
				'waktu_input' => date('Y-m-d H:i'),
			);
			$this->sm->insData($data);
			redirect('welcome','refresh');
		}

		
	}
}
