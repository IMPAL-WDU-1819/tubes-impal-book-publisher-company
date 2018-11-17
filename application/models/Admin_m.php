<?php defined('BASEPATH') or exit('No Script Allowed Here');

class Admin_m extends CI_Model {

    function get_admin($data) {
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);
        return $this->db->get('admin')->result();
    }

    function insert_admin($data) {
        if ($this->db->insert('admin',$data)) {
            return true;
        } else {
            return false;
        }
    }

}