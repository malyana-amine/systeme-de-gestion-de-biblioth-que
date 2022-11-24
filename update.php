<?php
require 'database.php';

function updatebook(){
    global $result;
    global $conn;

    if( isset($_POST['update'])){

        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_FILES['image1']['name'];
       

            $filename = uniqid();
            $extension = pathinfo( $image, PATHINFO_EXTENSION);
            $newname = "book-".$filename . "." . $extension;

            $target = "img/".$newname;
            move_uploaded_file($_FILES['image1']['tmp_name'], $target);
         
        $id   =  $_POST['hidinput'];

        $sql1 = "UPDATE `books` 
                SET`title`='$title',`description`='$description',`img`='$newname'
                 WHERE `id`='$id'";

            mysqli_query($conn,$sql1);
            header('location: books.php');
    }
           
      
    }
    
?>





