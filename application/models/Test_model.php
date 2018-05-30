<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Test_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        // connecting to database. fetching the credentials from config/database.php 
        $this->load->database();
    }
    public function get_data_from_table(){
        $query= $this->db->get('users',2);
        return $query-> result();
    }
}