<?php
/*
* File Name: Studentmodel.php
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Studentmodel extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //fetch all student records
    function get_student_list()
    {
        $this->db->from('tbl_student');
        $this->db->join('tbl_school', 'tbl_student.school_id = tbl_school.school_id');
        $query = $this->db->get();
        return $query->result();
    }

    //fetch student record by student no
    function get_student_record($studno)
    {
        $this->db->where('student_no', $studno);
        $this->db->from('tbl_student');
        $query = $this->db->get();
        return $query->result();
    }

    //get school table to populate the school name dropdown
    function get_school()
    {
        $this->db->select('school_id');
        $this->db->select('school_name');
        $this->db->from('tbl_school');
        $query = $this->db->get();
        $result = $query->result();
        //array to store department id & department name
        $sch_id = array('-SELECT-');
        $sch_name = array('-SELECT-');
        
        for ($i = 0; $i < count($result); $i++)
        {
            array_push($sch_id, $result[$i]->school_id);
            array_push($sch_name, $result[$i]->school_name);
        }
        return $school_result = array_combine($sch_id, $sch_name);
    }
}
?>