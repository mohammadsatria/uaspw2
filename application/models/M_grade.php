<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_grade extends CI_Model {

    public function get_grade($condition = NULL)
    {
        if($condition != NULL){
            $this->db->where($condition);
        }

        $this->db->order_by("grade_order", "asc");
        $q = $this->db->get("grade");
        if($q->num_rows() > 0){
            return $q;
        }else{
            return false;
        }
    }

    public function delete_grade($condition)
    {
        $this->db->where($condition);
        $this->db->delete("grade");

        return $this->db->affected_rows();
    }

    public function save_grade($data)
    {
        $this->db->insert('grade', $data);
        return $this->db->affected_rows();
    }

    public function update_grade($id, $data)
    {
        $this->db->where('grade_id' , $id);
        $this->db->update('grade', $data);

        return $this->db->affected_rows();
    }

}
