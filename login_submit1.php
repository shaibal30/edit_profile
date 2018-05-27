<?php
session_start();
?>
<?php

    $hostname="localhost";
    $username="root";
    $password="shaibal";
    $dbname="edit_profile";
    
    
    $conn = mysqli_connect($hostname,$username,$password,$dbname);
    if(!$conn){
        die("connection failed: ".mysqli_connect_error());
    }
    
    $email= $_POST['email'];
    $password= $_POST['password'];
    $sql = "SELECT * FROM user_info WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        die(mysqli_error($conn));
    }
   
    
    $row = mysqli_fetch_array($result);
    if(!$row){
        echo "failed";
    }
    else{
        echo "successful";
        echo "$email";
        echo $row['name'];
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
    
    }
    
    mysqli_close($conn);
?>
<a href="dashboard.php">click here</a>
