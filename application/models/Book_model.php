<?php defined('BASEPATH') or exit('No direct script access allowed');

class Book_model extends CI_Model {

    function insert_book($data){
        if ($this->db->insert('buku',$data)) {
            return true;
        } else {
            return false;
        }
    }

    function get_book(){
        return $this->db->get('buku')->result();
    }

    function update_book($data){
        $this->db->where('id',$data['id']);
        if ($this->db->update('buku')) {
            return true;
        } else {
            return false;
        }
    }

    function delete_book($id){
        $this->db->where('id',$id);
        if ($this->db->delete('buku')) {
            return true;
        } else {
            return false;
        }
    }

}