<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Database');
		cek_ses();
	}


	public function index()
	{
                $this->load->view('utama');
				$this->load->view('utama_home');		
	}




}
