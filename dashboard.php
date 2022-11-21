<?php
session_start();
require 'checklogin.php';
require 'statiqtique.php';
require 'logout.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <title>Document</title>
</head>
<body class="d-flex">
    <div class="bg-dark col-2 d-flex flex-column justify-content-between vh-100">

        <img class="logo2 px-5 py-2 " src="maquette/logo/Untitled-2.png" alt="">

        <div class="text-start d-flex  pb-5 mb-5 ">
            <div class="col-4"></div>
            <ul class="text-white list-unstyled ">
                <li class="py-3"><i class="fa-solid fa-house-user"></i><a class="text-decoration-none text-white " href="#"> dashboard</a> </li>
                <li class="py-3"><i class="fa-solid fa-user"></i><a class="text-decoration-none text-white" href="#"> Books</a> </li>
                <li class="py-3"><i class="fa-solid fa-book "></i><a class="text-decoration-none text-white" href="#"> users</a> </li>
            </ul>
        </div>
        <div class=" d-flex flex-column align-items-center">
           
            
                
        <form method="POST" class="btn-group dropup pb-3">
                  <div class="align-items-center d-flex ">
                  <div id="profilpic" class = "bg-warning rounded-circle fs-5 divpad " style="width:35px ; height:35px" ></div>
                    <h6 class="text-white ps-1 pe-3 pt-2" id="flname"><?php echo  $_SESSION['first_name'].' '.$_SESSION['last_name'] ?></h6>
                    <div type="" class="" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="text-white fa-solid fa-gear"></i>
                    </div>
                  
                    <ul class="dropdown-menu bg-dark p-0 m-0">
                        <li class="py-1 p-2"><a class="text-decoration-none text-white" href="#"> Profil </a>
                        <li class="py-1 p-2"><input type="submit" name="logout" value="Logout" class="text-decoration-none text-white border-0 bg-transparent" > Log out </li>
                    </ul>
                  </div>
                  </form>
              </div>
        </div>

    <div class="bodycolor col-10">
        <div>
            <h1 class="px-5 py-3">Dashboard</h1>
        </div>
        <div class="bg-dark mx-5 divline"></div>
        <div class=" d-flex justify-content-between flex-wrap p-5">

<div class="bdcolor divs d-flex justify-content-around m-2">
    <h3 class=" pt-4">Books</h3>
    <h3 class="pt-5 mt-5"><?php echo counterbooks() ?></h3>
</div>
<div class="bdcolor1 divs d-flex justify-content-around m-2">
    <h3 class=" pt-4">Admins</h3>
    <h3 class="pt-5 mt-5"><?php echo counteradmin() ?></h3>
</div>
<div class="bdcolor2 divs d-flex justify-content-around m-2">
    <h3 class="pt-4">Users</h3>
    <h3 class="pt-5 mt-5">??</h3>
</div>

</div>


    </div>
    


















    <!-- scripts  -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="jsFiles/main.js"></script>
</body>
</html>