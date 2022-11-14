<?php
require 'database.php';

function login(){
    global $conn;


    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql =" select * from `admin` where email = '$email' and password = '$password' ";
        
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) == 1) {

            $data=mysqli_fetch_array($result);
            $_SESSION['first_name'] =$data['first_name'] ;
            $_SESSION['last_name'] =$data['last_name'] ;

            $_SESSION['email'] = $email ;
            $_SESSION['password'] = $password;

            header('location: dashboard.php');
       
      
    }
    }
}
?>



