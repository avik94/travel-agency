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
	public function bookingForm(){
		// validation start
		$this->load->helper(array('form', 'url'));
	 	$this->load->library('form_validation');
		$this->form_validation->set_rules('checkIn', 'ChekIn', 'required');
		$this->form_validation->set_rules('checkOut', 'CheckOut', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phoneNo', 'PhoneNo', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('roomType', 'RoomType', 'required');
		if ($this->form_validation->run() == FALSE){
	      echo validation_errors();;
	  }else{
			$data["check_in"] =$this->input->post("checkIn");
			$data["check_out"] =$this->input->post("checkOut");
			$data["name"] =$this->input->post("name");
			$data["phone_no"] =$this->input->post("phoneNo");
			$data["address"] =$this->input->post("address");
			$data["email_id"] =$this->input->post("email");
			$target["hotel_id"] = $this->input->post("hotelId"); //getiing the hotel id
			$target["capacity"] = $this->input->post("roomType"); //getting the capacity

			$checkIn["check_in"] = $data["check_in"];
			$checkOut["check_out"] = $data["check_out"];

			$checkIndateCheck = count($this->Model->getSpecificData("reservations",$checkIn));
			$checkOutdateCheck = count($this->Model->getSpecificData("reservations",$checkOut));
			$getting["room"] =$this->Model->getSpecificColField("id","rooms",$target); //getting room id with checkinh the hotel_id and room capacity
			$data["room_id"] =$getting["room"]->id; //storing the room_id in data array for all input
			// selecting check out and check in value form reservation table
			$this->db->select("check_in");
			$checkInallData =$this->db->get("reservations")->result();
			$this->db->select("check_out");
			$checkOutallData =$this->db->get("reservations")->result();
			// selecting check out and check in value form reservation table end
			$emptArr1 = [];                                   //initialize blank array
			foreach ($checkInallData as $key => $value) {
				$emptArr1[$key] = $value->check_in;					//storing all check_in value in array
			}
			$emptArr2 = [];														//initialize blank array again
			foreach ($checkOutallData as $key => $value) {
				$emptArr2[$key] = $value->check_out;  //storing all check_in value in array
			}
			$combineArray = array_combine($emptArr1,$emptArr2); // combine both chek_in and check_out both value and store into a single array as key and value pair
			$i = 0;
			foreach ($combineArray as $key => $value) {   // iterate big array
				if($checkIn["check_in"]>=$key && $checkIn["check_in"]<=$value){ // check whether chek_in lies between check_out and chek_in
					$targetChekIn["check_in"] = $key;
					$checkInDate = $this->Model->getSpecificColField("room_id","reservations",$targetChekIn); //geting room_id from check_in
					if ($checkInDate->room_id == $data["room_id"]) { // checking enter room_id and saved room_id eqaul or not
						echo "Room Not Available in this date hi";
					}else{
						$i++;
						$this->db->select("check_in");
						$checkInallData =count($this->db->get("reservations")->result());
						if($i == $checkInallData){
							print_r($data);
						}
					}
				}
				// checking if check_in date lower than bookedcheck_in date and chek_out date is higher than the booked check_out date 
				elseif ($checkIn["check_in"]<$key && $checkOut["check_out"]>$key) { //checking the availability if in booking date there are already booked date
					echo "Room Not Available in this date";
					break;
				}else{
					$i++;
					$this->db->select("check_in");
					$checkInallData =count($this->db->get("reservations")->result());
					if($i == $checkInallData){
						print_r($data);
					}
				}
				// attention end here
			}
		}
		// validation end
	}

}
