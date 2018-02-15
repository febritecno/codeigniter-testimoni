<?php

Class Login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Database');
	}

	public function index() 
	{
		

			$this->load->view('login_form');
		}

	public function register() 
	{
		$this->load->view('registration_form');
	}

	public function new_user_registration() 
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email_value', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('registration_form');
		} else {
			$data = array(
			'user_name' => $this->input->post('username'),
			'user_email' => $this->input->post('email_value'),
			'user_password' => SHA1($this->input->post('password')),
			);
		
		$result = $this->Login_Database->registration_insert($data);
		
		if ($result == TRUE) {
			$pesan['message_display'] = 'Registration Successfully !';
			$this->load->view('login_form',$pesan);
		} else {
			$pesan['message_display'] = 'Username already exist!';
			$this->load->view('registration_form',$pesan);
			}
		}
	}

	public function user_login_process() {

		// $this->form_validation->set_rules('username', 'Username', 'trim|required');
		// $this->form_validation->set_rules('password', 'Password', 'trim|required');

		// if ($this->form_validation->run() == FALSE) {
			
		// 	if(isset($this->session->userdata['logged_in'])){
		// 		redirect('Welcome','refresh');
		// 	}else{
		// 		$this->load->view('login_form');
		// 		}
			
		// 	} else {
		// 		$data = array(
		// 			'username' => $this->input->post('username'),
		// 			'password' => $this->input->post('password')
		// 			);
		// 	$result = $this->Login_Database->login($data);
			
			
		// 	if ($result == TRUE) {
		// 		$username = $this->input->post('username');
		// 		$result = $this->Login_Database->read_user_information($username);

		// 		if ($result != false) {

		// 		$session_data = array(
		// 			'username' => $result[0]->user_name
		// 		);
			
			// MEMASUKAN KE SESSION
			// $this->session->set_userdata('logged_in', $session_data);
			// $this->load->view('utama');
			// }
		
	///dawdawdawdaw


                //cek validasi


				//set form validation
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');


                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = $this->input->post('password', TRUE);

                //checking data via model
                $checking = $this->Login_Database->check_login('user_login', array('user_name' => $username), array('user_password' => SHA1($password)));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'id'   => $apps->id,
                            'user' => $apps->user_name,
                            'pass' => $apps->user_password,
                            'm' => $apps->user_email
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

	                    $this->load->view('utama');
						$this->load->view('utama_home');


                        }
                }else{


					$data = array(
						'error_message' => 'Invalid Username or Password'
					);
					$this->load->view('login_form', $data);                
				}

            }else{
            	$data = array(
						'error_message' => 'Invalid Username or Password'
					);

                $this->load->view('login_form',$data);
            }

			///

		// } else {
		// 		$data = array(
		// 			'error_message' => 'Invalid Username or Password'
		// 		);
		// 		$this->load->view('login_form', $data);
	
		// 	}
	}
					

	
	public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}

?>