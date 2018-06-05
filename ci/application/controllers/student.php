<?php
/*
* File Name: student.php
*/
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class student extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->database();
            $this->load->library('form_validation');
            //load the student model
            $this->load->model('Studentmodel');
        }

        function index()
        {
            //fetch data from school table
            $data['school'] = $this->Studentmodel->get_school();

            //set validation rules
            $this->form_validation->set_rules('studentno', 'Student No',
            'trim|required|numeric');
            $this->form_validation->set_rules('studentname', 'Student Name',
            'trim|required|callback_alpha_only_space');
            $this->form_validation->set_rules('school', 'School',
            'callback_combo_check');
            $this->form_validation->set_rules('registeredDate', 'Registered Date',
            'required');

            if ($this->form_validation->run() == FALSE)
            {
                //fail validation
                $this->load->view('student_view', $data);
            }
            else
            {
                //pass validation
                $data = array(
                'student_no' => $this->input->post('studentno'),
                'student_name' => $this->input->post('studentname'),
                'school_id' => $this->input->post('school'),
                'registered_date' => @date('Y-m-d', @strtotime($this->input->post('registeredDate'))),
                );
                //insert the form data into database
                $this->db->insert('tbl_student', $data);
                //display success message
                $this->session->set_flashdata('msg', '<div class="alert alert-success textcenter">Student
                details added to Database!!!</div>');
                redirect('student/index');
            }
        }

        //custom validation function for dropdown input
        function combo_check($str)
        {
            if ($str == "-SELECT-")
            {
                $this->form_validation->set_message('combo_check', 'Valid %s Name
                is required');
                return FALSE;
            }
            else
            {
                return TRUE;
            }
        }

        //custom validation function to accept only alpha and space input
        function alpha_only_space($str)
        {
            if (!preg_match("/^([-a-z ])+$/i", $str))
            {
                $this->form_validation->set_message('alpha_only_space', 'The %s field
                must contain only alphabets or spaces');
                return FALSE;
            }
            else
            {
                return TRUE;
            }
        }
    }
?>