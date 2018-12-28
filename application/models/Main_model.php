<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function getOneRow($table_name){
		$data = $this->db->get($table_name)->row();
		return $data;
	}


}
