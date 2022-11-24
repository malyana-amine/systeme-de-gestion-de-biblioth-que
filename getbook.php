<?php
require 'database.php';

function getbook(){
    global $result;
    global $conn;

    $sql="SELECT b.id, b.title,b.description,ad.first_name as fn ,ad.last_name as ln,b.img FROM `books` b 
    INNER JOIN admin ad on b.publisher = ad.id";

    $qry = mysqli_query($conn, $sql);
   
    while($row = mysqli_fetch_assoc($qry)){

        $GLOBALS['result'][] = $row;
   }
  
           return $GLOBALS['result'];
      
    }
    
?>





