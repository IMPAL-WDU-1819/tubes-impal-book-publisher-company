<?php defined('BASEPATH') or exit('No direct script access allowed');

class Karya_model extends CI_Model {

    function insert_karya($data){
        return $this->db->insert('karya', $data);
    }

    function update_karya($data){
        $this->db->where('id_karya', $data['id_karya']);
        return $this->db->update('karya');
    }
}