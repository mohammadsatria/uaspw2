<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_employee extends CI_Model {

    public function get_employee($condition = NULL)
    {
        if($condition != NULL){
            $this->db->where($condition);
        }

        $this->db->join("grade", "grade.grade_id = employee.emp_grade");
        $q = $this->db->get("employee");
        if($q->num_rows() > 0){
            return $q;
        }else{
            return false;
        }
    }

    public function delete_employee($condition)
    {
        $this->db->where($condition);
        $this->db->delete("employee");

        return $this->db->affected_rows();
    }

    public function save_employee($data)
    {
        $this->db->insert('employee', $data);
        return $this->db->affected_rows();
    }

    public function update_employee($id, $data)
    {
        $this->db->where('emp_id' , $id);
        $this->db->update('employee', $data);

        return $this->db->affected_rows();
    }

}
