<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Main_model');
  }
	public function index(){
		$data['active']='home';
		$data['siteData'] = $this->Main_model->getOneRow('sitedata');
		$this->load->template('common/header','index','common/footer', $data);
	}
	public function about(){
		$data['active']='about';
		$data['siteData'] = $this->Main_model->getOneRow('sitedata');
		$this->load->template('common/header','about','common/footer', $data);
	}
	public function destination(){
		$data['active']='destination';
		$data['siteData'] = $this->Main_model->getOneRow('sitedata');
		$this->load->template('common/header','destination/all-destination','common/footer', $data);
	}
}
