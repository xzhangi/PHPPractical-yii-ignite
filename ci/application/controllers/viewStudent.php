<?php
/*
* File Name: viewStudent.php
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class viewStudent extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->database();
            //load the student model
            $this->load->model('Studentmodel');
        }

        //index function
        function index()
        {
            //get the student list
            $data['student_list'] = $this->Studentmodel->get_student_list();
            $this->load->view('view_student_view', $data);
        }

        //delete student record from db
        function delete_student($id)
        {
            //delete student record
            $this->db->where('student_id', $id);
            $this->db->delete('tbl_student');
            redirect('viewStudent/index');
        }
    }
?>