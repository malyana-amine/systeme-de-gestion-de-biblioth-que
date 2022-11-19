<?php
require 'database.php';

function register() { 
    global $conn;
    global $errors ; 
    $errors = "";

    if(isset($_POST['submit'])){
        $fname = $_POST['fname1'];
        $lname = $_POST['lname1'];
        $email = $_POST['email1'];
        $password = $_POST['password1'];
        

        $sql = "SELECT * FROM admin WHERE email='$email' ";
        $rs = mysqli_query($conn, $sql);
        $check = mysqli_num_rows($rs);
        if($check == 1){
            $errors = "This account already exist";
        }
        else{
        $sql =" INSERT INTO `admin` (first_name, last_name, email, password)
        VALUES ('$fname','$lname', '$email','$password')";

        mysqli_query($conn,$sql);
        header('location: login.php');
    }}

};




