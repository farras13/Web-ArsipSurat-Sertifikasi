<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_model extends CI_Model {

	public function insData($data)
	{
		$this->db->insert('surat', $data);
	}

}

/* End of file Surat_model.php */
