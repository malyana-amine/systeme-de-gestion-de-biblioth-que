<?php
require 'database.php';


function deletebook(){
    global $conn ;
    //CODE HERE
   
   
    if( isset($_POST['delete'])){
        $id   =  $_POST['hidinput'];
        
       $sql2 = " DELETE FROM `books` WHERE id = $id ";

       mysqli_query($conn,$sql2);
       header('location: books.php');
    }

}


?>

























