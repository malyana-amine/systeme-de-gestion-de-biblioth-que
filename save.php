<?php
require 'database.php';
session_start();
function savebook(){
    
    global $conn ;

        if( isset($_POST['submit'])) {
           
            $id = $_SESSION['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $image = $_FILES['image']['name'];

            $filename = uniqid();
            $extension = pathinfo( $image, PATHINFO_EXTENSION);
            $newname = "book-".$filename . "." . $extension;

            $target = "img/".$newname;
            move_uploaded_file($_FILES['image']['tmp_name'], $target);

             $sql = " INSERT INTO `books`(`title`, `description`, `publisher`, `img`) VALUES ('$title','$description','$id','$newname')"; 
 
            mysqli_query($conn,$sql);
            
            header('location: books.php');
         }
               
    }
    
?>
