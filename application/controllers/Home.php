<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Database');
	}


	public function index()
	{
		$d['b']=$this->Login_Database->read();
                $this->load->view('home',$d);	
	}



	
	public function add()
	{
			$data = array(
			'title' => $this->input->post('title'),
			'view' => $this->input->post('view')
			);
		
			$result = $this->Login_Database->insert($data);
			redirect(base_url(),'refresh')	;
	}



	// public function add()
	// {
 //                $this->load->view('home');	
	// }


	public function del()
	{
		$delete= $this->db->empty_table('page');
                redirect(base_url(),$delete)	;
	}

	



}
