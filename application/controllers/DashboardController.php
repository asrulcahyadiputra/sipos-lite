<?php


defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$this->load->view('dashboard');
	}
}

/* End of file DashboardController.php */
