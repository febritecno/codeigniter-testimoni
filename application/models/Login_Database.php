<?php

Class Login_Database extends CI_Model {

	// Registration
	public function registration_insert($data) {

	// Kueri untuk check apakah data tersedia
	$condition = "user_name =" . "'" . $data['user_name'] . "'";
	$this->db->select('*');
	$this->db->from('user_login');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();
	if ($query->num_rows() == 0) {

	// kueri untuk memasukan data
	$this->db->insert('user_login', $data);
	if ($this->db->affected_rows() > 0) {
	return true;
	}
	} else {
	return false;
	}
	}


/// 	Home


	public function insert($data) {
		$this->db->insert('page', $data);
    }
 
    // public function update() {
    //     $sql = sprintf("UPDATE page SET title='%s', view='%s' WHERE nim = '%id'",
    //                     $this->title,
    //                     $this->view,
    //                     $this->id
    //                     );
    //     $this->db->query($sql);   
    // }
 
    // public function delete() {
    //     $sql = sprintf("DELETE FROM mahasiswa WHERE nim='%d'",
    //                     $this->nim);
    //     $this->db->query($sql);
    // }
 
    public function read() {
        $this->db->from('page');
		$this->db->order_by("id", "desc");
		$query = $this->db->get(); 

        return $query->result();
    }










	// // Baca Data Username dan Password
	// public function login($data) {

	// $condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
	// $this->db->select('*');
	// $this->db->from('user_login');
	// $this->db->where($condition);
	// $this->db->limit(1);
	// $query = $this->db->get();

	// if ($query->num_rows() == 1) {
	// return true;
	// } else {
	// return false;
	// }
	// }



	// public function logged_id()
 //    {
 //    	return $this->session->userdata('masuk');
 //    }

    //fungsi check login
    public function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

	// // Membaca data untuk ditampilkan pada admin
	// public function read_user_information($username) {

	// $condition = "user_name =" . "'" . $username . "'";
	// $this->db->select('*');
	// $this->db->from('user_login');
	// $this->db->where($condition);
	// $this->db->limit(1);
	// $query = $this->db->get();

	// if ($query->num_rows() == 1) {
	// return $query->result();
	// } else {
	// return false;
	// }
	// }

}

?>