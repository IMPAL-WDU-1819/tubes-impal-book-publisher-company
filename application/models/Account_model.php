<?php defined('BASEPATH') or exit('No Script Allowed Here');

class Account_model extends CI_Model {

    function insert_account($data){
        if ($this->db->insert('account',$data)) {
            return true;
        } else {
            return false;
        }
    }

    function get_account($data){
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);
        return $this->db->get('admin')->result();
    }

    function update_account($data){
        $this->db->where('username', $data['username']);
        return $this->db->update('account');
    }

    function delete_account($data){
        $this->db->where('username', $data['username']);
        return $this->db->delete('account');
    }

}