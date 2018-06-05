<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Schoolmodel extends CI_Model
    {
        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }

        //read the department list from db
        function get_school_list()
        {
            $sql = 'select * from tbl_school';
            $query = $this->db->query($sql);
            $result = $query->result();
            return $result;
        }
    }
?>