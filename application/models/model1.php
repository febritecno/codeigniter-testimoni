<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Functions extends CI_Model {
	function get_user($id){
		$this->db->where('user_id', $id);
	}
}
