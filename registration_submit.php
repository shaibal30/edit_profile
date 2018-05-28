<?php
	$hostname= "localhost";
	$username= "root";
	$password= "AYONchat16@";
	$dbname= "edit_profile";
	$conn= mysqli_connect($hostname,$username,$password,$dbname);
	if(!$conn){
	    die("connection failed:".mysqli_connect_error());
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO user_info(name,email,password)VALUES('$name' , '$email' , '$password')";
    echo $sql;
    if(mysqli_query($conn,$sql)){
	    echo "Registration Successfull";
    }
    else{
	    echo "Error:" .$sql. "<br/>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?> 
