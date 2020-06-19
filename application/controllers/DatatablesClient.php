<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DatatablesClient extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index()
	{
		$data = array(
			'isi' => $this->Mcrud->retrieve(),
	);
		$this->load->view('dtclient',$data);
	}
}