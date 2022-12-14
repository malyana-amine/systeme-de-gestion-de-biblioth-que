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
<?php
include 'sidebar.php';
?>

    <div class="bodycolor col-10">
        <div>
            <h1 class="px-5 py-3">Dashboard</h1>
        </div>
        <div class="bg-dark mx-5 divline"></div>
        <div class=" d-flex justify-content-around flex-wrap p-5">

<div class="bdcolor  col-md-4 divs d-flex justify-content-around m-1">
    <h3 class=" pt-4">Books</h3>
    <h3 class="pt-5 mt-5"><?php echo counterbooks() ?></h3>
</div>
<div class="bdcolor1  col-md-4 divs d-flex justify-content-around m-1">
    <h3 class=" pt-4">Admins</h3>
    <h3 class="pt-5 mt-5"><?php echo counteradmin() ?></h3>
</div>
<div class="bdcolor2  col-md-4 divs d-flex justify-content-around m-1">
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