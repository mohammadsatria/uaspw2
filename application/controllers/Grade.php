<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grade extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model("M_grade", "grade");
    }

	public function index()
	{
        $data['grade'] = $this->grade->get_grade();
        $data['modul_name'] = "Grade";
        $data['content'] = "Grade/show_view";
 		$this->load->view('Admin/template', $data);
	}

    public function add()
    {
        $data['modul_name'] = "Grade";
        $data['content'] = "Grade/add_view";
        $this->load->view('Admin/template', $data);

    }

    public function delete($id)
    {
        if($id){
            $condition = array(
                'grade_id' => $id
            );
            $delete = $this->grade->delete_grade($condition);

            if($delete){
                $this->session->set_flashdata('messageSuccess', "Data has been deleted");
            }else{
                $this->session->set_flashdata('messageFailed', "failed to delete this data");
            }

            redirect(base_url('grade'));

        }
    }

    public function edit($id)
    {
        if($id){
            $condition = array(
                'grade_id' => $id
            );
            $data['grade'] = $this->grade->get_grade($condition)->row();
            $data['modul_name'] = "Grade";
            $data['content'] = "Grade/edit_view";
     		$this->load->view('Admin/template', $data);
        }
    }

    public function update()
    {
        $data = $this->input->post();
        $data['grade_created_by'] = "hrd";
        $data['grade_update'] = date("Y-m-d H:i:s");

        $condition = array(
                "grade_id !=" => $data['grade_id'],
                "grade_desc" => $data['grade_desc']
        );
        $check_duplicate = $this->grade->get_grade($condition);

        if($check_duplicate){
            $this->session->set_flashdata('messageFailed', "Grade already exist");
            redirect(base_url('grade/edit/'.$data['grade_id']));
        }else{
            $update = $this->grade->update_grade($data['grade_id'], $data);

            if($update){
                $this->session->set_flashdata('messageSuccess', "Data has been updated");
            }else{
                $this->session->set_flashdata('messageFailed', "failed to update this data");

            }
            redirect(base_url('grade'));
        }
    }

    public function save()
    {
        $data = $this->input->post();
        $data['grade_created_by'] = "hrd";
        $data['grade_update'] = date("Y-m-d H:i:s");

        $condition = array(
                "grade_desc" => $data['grade_desc']
        );
        $check_duplicate = $this->grade->get_grade($condition);

        if($check_duplicate){
            $this->session->set_flashdata('messageFailed', "Grade already exist");
            redirect(base_url('grade/add'));

        }else{
            $save = $this->grade->save_grade($data);

            if($save){
                $this->session->set_flashdata('messageSuccess', "Data has been saved");
            }else{
                $this->session->set_flashdata('messageFailed', "failed to save this data");
            }
            redirect(base_url('grade'));
        }

    }
}

// created by mohammad satria 1611520022
