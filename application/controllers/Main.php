<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Model');
  }
	// home page
	public function index(){
		$data['active']='home';
		$data['siteData'] = $this->Model->getOneRow('sitedata');
		$this->load->template('common/header','index','common/footer', $data);
	}
	// about page
	public function about(){
		$data['active']='about';
		$data['siteData'] = $this->Model->getOneRow('sitedata');
		$this->load->template('common/header','about','common/footer', $data);
	}
	// destination page
	public function destination(){
		$data['active']='destination';  //header data
		$data['siteData'] = $this->Model->getOneRow('sitedata'); //site global details

		// pagination
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/travel-agency/destinations';
		$config['per_page'] = 6; $tableName="destinations";
		$config['total_rows'] = $this->Model->countRow($tableName);
		// $config['use_page_numbers'] = TRUE;
		$this->pagination->initialize($config);
		// end pagination

		$data['destinationDetails'] = $this->Model->getTableDataWithLimit('destinations',$config['per_page'],$this->uri->segment(2));
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
	// single location
	public function singleLocationDetail(){
		$getId = $this->input->get('id');
		$target["id"] = $getId;
		$targetLocation["location_id"] = $getId;
		$data['active']='sigleLocationDetail';  //header data(we are not using it but it is need to avoid error)
		$data['siteData'] = $this->Model->getOneRow('sitedata'); //site global details
		$data['allLocationData'] = $this->Model->getSpecificData("locations",$target); //geting location data with id
		$data['allHotelsData'] = $this->Model->getSpecificData("hotels",$targetLocation); //geting hotels data with id
		$data["countHotel"] = count($this->Model->getSpecificData("hotels",$targetLocation));//counting hotel is available or not
		$this->load->template('common/header','destination/single-location','common/footer', $data);
	}
}
