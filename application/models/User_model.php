<?php

class User_model extends CI_Model {

    function get_all()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('id',);
        $query = $this->db->get();

        if ($query->num_rows() < 1) {
            return null;
        } else {
            return $query->result();
        }
    }

    function create($post_data){
        $this->db->insert('users', $post_data);
    }

    function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->num_rows() > 0 ? $query->row() : null;
    }

    function update($id, $post_data) {
        $this->db->where('id', $id);
        $this->db->update('users', $post_data);
    }
    
    // function get_delete_id($id)
    // {
    //     $this->db->delete('id', $id);
    //     $this->db->from('users');
    //     if ($query->num_rows() < 1) {
    //         return null;
    //     } else {
    //         return $query->result();
    //     }

}