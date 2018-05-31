<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function form() {
        $this->load->view('login_form');
    }

    public function submit() {
        session_start();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->load->model('user');
        $row = $this->user->check_user_password($email, $password);

        if (!$row) {
            $obj = new \stdClass();
            $obj->success = false;
            $obj->error_message = "login failed";
            $this->load->view('login_submit_failed', array('data' => $obj));
        } else {
            $_SESSION['user_id'] = $row->id;
            //$_SESSION['user_name'] = $r->name;

            $obj = new \stdClass();
            $obj->success = true;
            $obj->success_message = "login successful";
            $obj->row = $row;

            $this->load->view('login_submit_successful', array('data' => $obj));
        }
    }

    public function submit_bk() {
        session_start();

        $hostname = "localhost";
        $username = "root";
        $password = "shaibal";
        $dbname = "edit_profile";

        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        if (!$conn) {
            die("connection failed: " . mysqli_connect_error());
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die(mysqli_error($conn));
        }

        $row = mysqli_fetch_array($result);
        if (!$row) {
            $this->load->view('login_submit_failed');
        } else {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $this->load->view('login_submit_successful', array('arr' => $row));
            $this->load->view('login_submit_successful');
        }

        mysqli_close($conn);
    }

}
