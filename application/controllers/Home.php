<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
	}
	
	
	
	public function index()
	{
		
		if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']== 1){
			redirect('task_home');
		}	
		$data['view'] = "home_view"; 
		$this->load->view('template',$data);
		log_message('debug', 'home', false);
	}
	


		public function login()
		
		{	

			if(isset($_POST['submit'])){
			  $username	= $this->input->post('username');
			  $password	= $this->input->post('password');
			
			  $data = array(
			  			'username'=> $username , 	
			  			'password'=> MD5($password), 	
			  			 	
				);

				$result = $this->common->get_user($data);

				if(count($result) > 0){
					 foreach ($result as $key => $value) {
						$data['id']= $value['id']; 	
			  			$data['username']= $value['username']; 	
			  			$data['email']= $value['email']; 							
					}
				
					
					$_SESSION = $data;
					$_SESSION['loggedIn'] = 1;
					
					redirect('task_home');
				
				}else{
					$this->session->set_flashdata('conf', '<span class = "danger">Login failed.</span>');
					redirect(site_url());
					
				}
				
			
		}
	}



	public function logout()
	{
		session_destroy();
		redirect('home');	
	}



}
