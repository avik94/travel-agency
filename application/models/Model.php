<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	public function getOneRow($tableName){
		$data = $this->db->get($tableName)->row();
		return $data;
	}
	// getting table data
	public function getTableData($tableName){
		$qry = $this->db->get($tableName);
		$data = $qry->result();
		return $data;
	}
	// getting one row table data
	public function getTableDataForOneRow($tableName){
		$qry = $this->db->get($tableName);
		$data = $qry->row();
		return $data;
	}
	// getting table data with limit
	public function getTableDataWithLimit($tableName,$limit,$offset){
		$qry = $this->db->get($tableName,$limit,$offset);
		$data = $qry->result();
		return $data;
	}
	//count row for table
	public function countRow($tableName){
		$qry = $this->db->get($tableName);
		$data = $qry->result();
		$count =count($data);
		return $count;
	}
	public function getSpecificData($tableName,$target){
		$data = $this->db->get_where($tableName,$target)->result();
		return $data;
	}
	public function getSpecificColField($tableName,$target){
		$this->db->select("id");
		// $this->db->from($tableName);
		$data = $this->db->get_where($tableName,$target)->row();

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
