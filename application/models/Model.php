<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	public function getOneRow($tableName){
		$data = $this->db->get($tableName)->row();
		return $data;
	}
	public function getTableData($tableName){
		$qry = $this->db->get($tableName);
		$data = $qry->result();
		return $data;
	}
	// public function joinLocationDestination(){
	// 	$this->db->select('*');
	// 	$this->db->from('destinations');
	// 	$this->db->join('locations', 'locations.destination_id = destinations.id');
	// 	$qry = $this->db->get();
	// 	$data = $qry->result();
	// 	return $data;
	// }



}
