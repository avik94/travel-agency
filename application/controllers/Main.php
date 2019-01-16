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
		$data['siteAddress'] = $this->Model->getOneRow('address'); //site address
		$data['footerDetails'] = $this->Model->getTableDataForOneRow("ta18_footer_part1");//footerData
		$data['navigationLink'] = $this->Model->getTableDataForOneRow("ta18_footer_part2");//footerData
		$this->load->template('common/header','index','common/footer', $data);
	}
	// about page
	public function about(){
		$data['active']='about';
		$data['siteData'] = $this->Model->getOneRow('sitedata');
		$data['siteAddress'] = $this->Model->getOneRow('address'); //site address
		$data['footerDetails'] = $this->Model->getTableDataForOneRow("ta18_footer_part1");//footerData
		$data['navigationLink'] = $this->Model->getTableDataForOneRow("ta18_footer_part2");//footerData
		$this->load->template('common/header','about','common/footer', $data);
	}
	// destination page
	public function destination(){
		$data['active']='destination';  //header data
		$data['siteData'] = $this->Model->getOneRow('sitedata'); //site global details
		$data['siteAddress'] = $this->Model->getOneRow('address'); //site address
		$data['footerDetails'] = $this->Model->getTableDataForOneRow("ta18_footer_part1"); //footerData
		$data['navigationLink'] = $this->Model->getTableDataForOneRow("ta18_footer_part2"); //footerData

		// pagination
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/travel-agency/destinations';
		$config['per_page'] = 6; $tableName="destinations";
		$config['total_rows'] = $this->Model->countRow($tableName);
		// $config['use_page_numbers'] = TRUE;
		$this->pagination->initialize($config);
		// end pagination
		// getting destination data for search
		$data["allDestinations"] = $this->Model->getTableData($tableName);
		// getting location data for search
		$data["allLocations"] = $this->Model->getTableData("locations");

		$data['destinationDetails'] = $this->Model->getTableDataWithLimit('destinations',$config['per_page'],$this->uri->segment(2));
		$this->load->template('common/header','destination/all-destination','common/footer', $data);
	}

	// all location for single destination
	public function allLocation(){
		$getId = $this->input->get("id"); // get the id that is coming from the anchor of destination
		$target["destination_id"] = $getId;

		$data['active']='allLocation';  //header data(we are not using it but it is need to avoid error)
		$data['siteData'] = $this->Model->getOneRow('sitedata'); //site global details
		$data['siteAddress'] = $this->Model->getOneRow('address'); //site address
		$data['footerDetails'] = $this->Model->getTableDataForOneRow("ta18_footer_part1"); //footerData
		$data['navigationLink'] = $this->Model->getTableDataForOneRow("ta18_footer_part2"); //footerData
		$data["destinationLocation"] = $this->Model->getSpecificData("locations",$target); //geting data with id
		$count = count($this->Model->getSpecificData("locations",$target));
		if ($count != 0){
			$this->load->template('common/header','destination/all-location','common/footer', $data);
		}else{
			echo "<h2>404 Page Not Found .!Something Wents wrong<h4>";
		}

	}
	// single location
	public function singleLocationDetail(){
		$getId = $this->input->get('id');
		$target["id"] = $getId;
		$targetLocation["location_id"] = $getId;
		$data['active']='sigleLocationDetail';  //header data(we are not using it but it is need to avoid error)
		$data['siteData'] = $this->Model->getOneRow('sitedata'); //site global details
		$data['siteAddress'] = $this->Model->getOneRow('address'); //site address
		$data['footerDetails'] = $this->Model->getTableDataForOneRow("ta18_footer_part1"); //footerData
		$data['navigationLink'] = $this->Model->getTableDataForOneRow("ta18_footer_part2"); //footerData
		$data['allLocationData'] = $this->Model->getSpecificData("locations",$target); //geting location data with id
		$data['allHotelsData'] = $this->Model->getSpecificData("hotels",$targetLocation); //geting hotels data with id
		$data["countHotel"] = count($this->Model->getSpecificData("hotels",$targetLocation));//counting hotel is available or not
		$this->load->template('common/header','destination/single-location','common/footer', $data);
	}
	// search destinationpage function
	public function searchForm(){
		$data['active']='search';
		$data['siteData'] = $this->Model->getOneRow('sitedata');
		$data['siteAddress'] = $this->Model->getOneRow('address'); //site address
		$data['footerDetails'] = $this->Model->getTableDataForOneRow("ta18_footer_part1"); //footerData
		$data['navigationLink'] = $this->Model->getTableDataForOneRow("ta18_footer_part2"); //footerData
		$destinationId = $this->input->post("des");
		$locationId = $this->input->post("loc");
		// targeting id and destination_id of locations table
		$target["id"] = $locationId;
		$target["destination_id"] = $destinationId;
		$data["searchResult"] = $this->Model->getSpecificData("locations",$target);
		$data["CountSearchResult"] = count($this->Model->getSpecificData("locations",$target));

		$this->load->template('common/header','destination/search-result','common/footer', $data);
	}
	// on destination change the location dropdown automatic update
	public function onchangeDestination(){
		$target["destination_id"]= $this->input->post("id");
		$data = $this->Model->getSpecificData("locations",$target);
		if ($data) {
			echo "<option>Select</option>";
			foreach ($data as $value) {
				echo '<option value='.$value->id.'>'.$value->name.'</option>';
			}
		}
	}

	// single hotel page
	public function singleHotel($id){
		$data['active']='singleHotel';
		$data['siteData'] = $this->Model->getOneRow('sitedata');
		$data['siteAddress'] = $this->Model->getOneRow('address'); //site address
		$data['footerDetails'] = $this->Model->getTableDataForOneRow("ta18_footer_part1"); //footerData
		$data['navigationLink'] = $this->Model->getTableDataForOneRow("ta18_footer_part2"); //footerData
		$target["id"] = $id;
		$data["hotelData"] = $this->Model->getSpecificData("hotels",$target);
		$this->load->template('common/header','hotels/single-hotel','common/footer', $data);

	}

}
