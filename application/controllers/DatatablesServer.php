<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DatatablesServer extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index()
	{
		$data = array();
		$this->load->view('dtserver',$data);
	}

	public function showTable()
	{
		if ($this->input->is_ajax_request()) {
			$this->Mcrud->load();
		}
	}
}