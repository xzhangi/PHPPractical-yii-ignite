<?php

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class school extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->database();
        }

        public function index()
        {
            //load the Schoolmodel
            $this->load->model('Schoolmodel');
            //call the model function to get the School data
            $schresult = $this->Schoolmodel->get_school_list();
            $data['schlist'] = $schresult;
            //load the school_view
            $this->load->view('school_view',$data);
        }
    }

?>