<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();

        $this->load->model("m_grade", "grade");
        $this->load->model("m_employee", "employee");
    }


    public function index()
    {
        $data['content'] = "Admin/dashboard_view";
        $data['modul_name'] = "Dashboard";
        $data['title'] = ":: Dashboard";
        $data['employee'] = $this->employee->get_employee()->num_rows();
        $data['grade'] = $this->grade->get_grade()->num_rows();

        $this->load->view("Admin/template", $data);
    }
}

    // created by mohammad satria 1611520022
 ?>
