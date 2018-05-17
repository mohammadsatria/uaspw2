<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model("M_employee", "employee");
        $this->load->model("M_grade", "grade");
    }

	public function index()
	{
        $data['employee'] = $this->employee->get_employee();
        $data['modul_name'] = "Employee";
        $data['title'] = ":: Employee";
        $data['content'] = "Employee/show_view";
 		$this->load->view('Admin/template', $data);
	}

    public function add()
    {
        $data['grade'] = $this->grade->get_grade();
        $data['modul_name'] = "Employee";
        $data['title'] = ":: Employee";
        $data['content'] = "Employee/add_view";
        $this->load->view('Admin/template', $data);

    }

    public function delete($id)
    {
        if($id){
            $condition = array(
                'emp_id' => $id
            );
            $delete = $this->employee->delete_employee($condition);

            if($delete){
                $this->session->set_flashdata('messageSuccess', "Data has been deleted");
            }else{
                $this->session->set_flashdata('messageFailed', "failed to delete this data");
            }

            redirect(base_url('employee'));

        }
    }

    public function edit($id)
    {
        if($id){
            $condition = array(
                'emp_id' => $id
            );
            $data['employee'] = $this->employee->get_employee($condition)->row();
            $data['grade'] = $this->grade->get_grade();
            $data['modul_name'] = "Employee";
            $data['title'] = ":: Employee";
            $data['content'] = "Employee/edit_view";
     		$this->load->view('Admin/template', $data);
        }
    }

    public function update()
    {
        $data = $this->input->post();
        $data['emp_created_by'] = "hrd";
        $data['emp_update'] = date("Y-m-d H:i:s");

        $update = $this->employee->update_employee($data['emp_id'], $data);

        if($update){
            $this->session->set_flashdata('messageSuccess', "Data has been updated");
        }else{
            $this->session->set_flashdata('messageFailed', "failed to update this data");

        }
        redirect(base_url('employee'));
    }

    public function save()
    {
        $data = $this->input->post();
        $data['emp_created_by'] = "hrd";
        $data['emp_update'] = date("Y-m-d H:i:s");

        $condition = array(
                "emp_id" => $data['emp_id']
        );
        $check_duplicate = $this->employee->get_employee($condition);
        if($check_duplicate){
            $this->session->set_flashdata('messageFailed', "Employee ID already exist");
            redirect(base_url('employee/add'));

        }else{
            $save = $this->employee->save_employee($data);

            if($save){
                $this->session->set_flashdata('messageSuccess', "Data has been saved");
            }else{
                $this->session->set_flashdata('messageFailed', "failed to save this data");
            }
            redirect(base_url('employee'));
        }

    }

    public function getdata()
    {
        $id = $this->input->post('emp_id');
        $condition = array(
            'emp_id' => $id
        );
        $data = $this->employee->get_employee($condition)->row_array();
        $data = json_encode($data);

        echo $data;
    }
}

// created by mohammad satria 1611520022
