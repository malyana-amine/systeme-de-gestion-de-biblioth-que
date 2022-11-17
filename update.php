<?php
require 'database.php';

function updatebook(){
    global $result;
    global $conn;

    if( isset($_POST['update'])){

        $title = $_POST['title'];
        $description = $_POST['description'];
         
        $id   =  $_POST['hidinput'];
       // die($type . $priority . $status . $title . $date . $description .$id) ;
        $sql1 = "UPDATE `books` 
                SET`title`='$title',`description`='$description'
                 WHERE `id`='$id'";

            mysqli_query($conn,$sql1);

    }
           
      
    }
    
?>





