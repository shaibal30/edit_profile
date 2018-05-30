<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check_user_password($email, $password) {
        $query = $this->db->get_where('users', array('email' => $email, 'password' => $password));

        foreach ($query->result() as $row) {
            return $row;
        }

        return false;
    }

}
