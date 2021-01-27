<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()	{

		$data['title'] = 'Home';
		$data['js_files'] 		= array('home.js');

		$this->load->view('header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('footer', $data);
  }
}
