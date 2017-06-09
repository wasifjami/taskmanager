<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

		function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
	}
	
	
	public function index()
	{
			if(!isset($_SESSION['loggedIn'])){
				redirect('home');
			}	


			$username = $_SESSION['username'];

			$data['tasks'] = $this->common->get_tasks_by_user($username);
		 
			$data['view'] = "task_home_view"; 
			$this->load->view('template',$data);
	}



	public function save_task()
	{
		
			
			//var_dump($_SESSION); die;
			$name = $this->input->post('title');
			$task_description = $this->input->post('task_description');
			$username= $_SESSION['username'];

			$data = array(
				'name' => $name,
				'description' => $task_description,
				'task_owner' => $username

				);

			if($this->common->save_task_by_user($data)){
				$_SESSION['message'] = "Task Saved Successfully";
				redirect(site_url());
			}else{
				$_SESSION['message'] = "Failed to save task";
				redirect(site_url());
			}
		

	}


		public function save_edited_task()
	{
		
			
			//var_dump($_SESSION); die;
			$task_id = $this->input->post('task_id');
			$name = $this->input->post('title');
			$task_description = $this->input->post('task_description');
			$username= $_SESSION['username'];

			$data = array(
				'name' => $name,
				'description' => $task_description,
				);

			if($this->common->update_edited_task($data, $task_id)){
				$_SESSION['message'] = "Task updated Successfully";
				redirect(site_url());
			}else{
				$_SESSION['message'] = "Failed to update task";
				redirect(site_url());
			}
		

	}



	public function delete_task()
	{
		$task_id = $this->input->get('task_id');

		if($this->common->delete_task_by_id($task_id)){
				$_SESSION['message'] = "Task Deleted Successfully";
				redirect(site_url());
		}else{
				$_SESSION['message'] = "Failed Successfully";
				redirect(site_url());
		}
	}
	

	public function edit_task()
	{
		$task_id = $this->input->get('task_id');

		$data['tasks'] = $this->common->get_tasks_by_id($task_id);
		 
		$data['view'] = "task_edit_view"; 
		$this->load->view('template',$data);
	}
		
	
	
	
}
