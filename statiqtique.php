<?php
require 'database.php';

function counteradmin(){
        global $conn;
        $sql= "SELECT * FROM `admin`" ;
        $result = mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo count($res);
}


function counterbooks(){
    global $conn;
    $sql= "SELECT * FROM `books`" ;
    $result = mysqli_query($conn,$sql);
    $res=mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo count($res);
}

?>



