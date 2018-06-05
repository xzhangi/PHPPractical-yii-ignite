<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Blogmodel extends CI_Model
    {
        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }
        /**
         * returns a list of articles
         * @return array
         */
        function get_articles_list()
        {
/*             $list = Array();

            $list[0] = (object)NULL;
            $list[0]->title = "first blog title";
            $list[0]->author = "author 1";
            $list[1] = (object)NULL;
            $list[1]->title = "second blog title";
            $list[1]->author = "author 2";
            return $list; */

            $this->db->select('blog_title');
            $this->db->select('blog_author');
            $this->db->from('tbl_blog');
            $query = $this->db->get();
            $result = $query->result();
            $list = Array();
            for ($i = 0; $i < count($result); $i++)
            {
                $list[$i] = (object)NULL;
                $list[$i]->title = $result[$i]->blog_title;
                $list[$i]->author = $result[$i]->blog_author;
            }
            return $list;
        }
    }
?>