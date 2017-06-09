<?php

class Common extends CI_Model {



function get_user($data) {

		$this -> db -> from('users');
		$this -> db -> where($data);
		$query = $this -> db -> get();
		return $query = $query->result_array();
	}


	function save_task_by_user($data) {

		if ($this -> db -> insert('tasks', $data)) {

			return TRUE;
		}
	}

	function get_tasks_by_user($username) {

		$this -> db -> from('tasks');
		$this -> db -> where('task_owner',$username);
		$query = $this -> db -> get();
		return $query = $query->result_array();
	}



	function get_tasks_by_id($task_id) {

		$this -> db -> from('tasks');
		$this -> db -> where('id',$task_id);
		$query = $this -> db -> get();
		return $query = $query->result_array();
	}
	
	function delete_task_by_id($task_id) {

		$this -> db -> from('tasks');
		$this -> db -> where('id',$task_id);
		return $this -> db -> delete();
		
	}


	function update_edited_task($data,$task_id){

		$this->db->where('id',$task_id);
		return $this->db->update('tasks',$data);


	}
}
