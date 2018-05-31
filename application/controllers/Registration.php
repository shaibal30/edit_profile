<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function form() {
        $this->load->view('registration_form');
    }

    public function submit() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->load->model('user');
        $r = $this->user->add_data($name, $email, $password);

        if ($r) {
            $obj = new \stdClass();
            $obj->success = true;
            $obj->success_message = "Registration successfull";
            $this->load->view('registration_submit_success', array('data' => $obj));
        } else {
            $obj = new \stdClass();
            $obj->success = false;
            $obj->error_message = "Registration failed";
            $this->load->view('registration_submit_failed', array('data' => $obj));
        }
    }

    public function submit_bk() {
        $hostname = "localhost";
        $username = "root";
        $password = "AYONchat16@";
        $dbname = "edit_profile";
        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        if (!$conn) {
            die("connection failed:" . mysqli_connect_error());
        }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users(name,email,password)VALUES('$name' , '$email' , '$password')";

        if (mysqli_query($conn, $sql)) {
            $this->load->view('registration_submit_success');
        } else {
            $this->load->view('registration_submit_failed', array('a' => mysqli_error($conn), 'b' => $sql));
        }
        mysqli_close($conn);
    }

}
