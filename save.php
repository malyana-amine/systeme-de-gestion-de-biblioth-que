<?php
require 'database.php';
session_start();
function savebook(){
    
    global $conn ;

        if( isset($_POST['submit'])) {
           
            // --------------
            $id = $_SESSION['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $image = $_FILES['image']['name'];
            $target = "img/".basename($image);
            move_uploaded_file($_FILES['image']['tmp_name'], $target);

                      
             $sql = " INSERT INTO `books`(`title`, `description`, `publisher`, `img`) VALUES ('$title','$description','$id','$image')"; 
 
            mysqli_query($conn,$sql);
            header('location: books.php');
         }
           
      
    }
    
?>
