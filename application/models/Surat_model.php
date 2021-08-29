<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_model extends CI_Model {

	public function getData($w = null)
	{
		if ($w != null) {
			$this->db->where($w);
			return $this->db->get('surat');			
		} else {
			return $this->db->get('surat');			
		}
	}

	public function insData($data)
	{
		$this->db->insert('surat', $data);
	}

}

/* End of file Surat_model.php */
