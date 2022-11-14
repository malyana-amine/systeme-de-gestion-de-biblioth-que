<?php
require 'database.php';

function register() { 
    global $conn;

    if(isset($_POST['submit'])){
        $fname = $_POST['fname1'];
        $lname = $_POST['lname1'];
        $email = $_POST['email1'];
        $password = $_POST['password1'];
        var_dump($_POST);

        $sql =" INSERT INTO `admin` (first_name, last_name, email, password)
        VALUES ('$fname','$lname', '$email','$password')";

        mysqli_query($conn,$sql);
        header('location: login.php');
    }

};




