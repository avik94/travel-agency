<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Model');
  }

	public function index(){
		$data['active']='home';
		$data['siteData'] = $this->Model->getOneRow('sitedata');
		$this->load->template('common/header','index','common/footer', $data);
	}
	public function about(){
		$data['active']='about';
		$data['siteData'] = $this->Model->getOneRow('sitedata');
		$this->load->template('common/header','about','common/footer', $data);
	}
	public function destination(){
		$data['active']='destination';  //header data
		$data['siteData'] = $this->Model->getOneRow('sitedata'); //site global details

		$data['destinationDetails'] = $this->Model->getTableData('destinations');
		$this->load->template('common/header','destination/all-destination','common/footer', $data);
	}

	// all location for single destination
	public function allLocation(){
		$getId = $this->input->get('id'); // get the id that is coming from the anchor of destination
		$target["destination_id"] = $getId;

		$data['active']='allLocation';  //header data(we are not using it but it is need to avoid error)
		$data['siteData'] = $this->Model->getOneRow('sitedata'); //site global details
		$data["destinationLocation"] = $this->Model->getSpecificData("locations",$target); //geting data with id

		$this->load->template('common/header','destination/all-location','common/footer', $data);
	}

	public function sigleLocationDetail(){
		$getId = $this->input->get('id');
		$target["id"] = $getId;
		$data['active']='sigleLocationDetail';  //header data(we are not using it but it is need to avoid error)
		$data['siteData'] = $this->Model->getOneRow('sitedata'); //site global details
		$data['allLocationData'] = $this->Model->getSpecificData("locations",$target); //geting data with id
		echo "<pre>";
		print_r($data);
		$this->load->template('common/header','destination/single-location','common/footer', $data);
	}
}
