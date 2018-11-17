<?php defined('BASEPATH') or exit('No direct script access allowed');

class Book_m extends CI_Model {

    function insert_book($data){
        if ($this->db->insert('book',$data)) {
            return true;
        } else {
            return false;
        }
    }

    function getAll_book(){
        return $this->db->get('book')->result();
    }

    function getCategory_book($category){
        $this->db->where($category);
        return $this->db->get('book')->result();
    }

    function edit_book($data){
        $this->db->where('id',$data['id']);
        if ($this->db->update('book')) {
            return true;
        } else {
            return false;
        }
    }

    function delete_book($id){
        $this->db->where('id',$id);
        if ($this->db->delete('book')) {
            return true;
        } else {
            return false;
        }
    }

}