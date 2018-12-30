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
}
