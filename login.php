<?php
include ("database.php");
include ("login-function.php");
//require 'checklogin.php';
login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bodycolor divcard">
    <section class="d-flex  bg-white ">
                <form method="POST" class="col-md-6 col-12 text-center py-5 mt-4 ps-2">
                <img class="signlogo ps-4" src="maquette/logo/Untitled-2.png" alt="logo">
                <h1 class="fw-bold ps-4">The Bookworm </h1>
                <div class="d-flex flex-column ps-md-4 px-4">      
                    <input name="email" class="my-3" type="email" placeholder="Email" value="<?php getcookie('email'); ?>">
                    <input name="password" class="my-3" type="password" placeholder="Password" value="<?php getcookie('pass'); ?>">
                </div>
                <div class="text-start ps-4">
                    <div class="form-check">
                    
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="checked">
                        <label class="form-check-label" for="flexCheckDefault">Remenber me</label>
                      </div>
                </div>
                <button class="ms-4 m-2 pb-2 fs-4 fw-bold px-4 py-2 rounded-pill btn mutted2" name="submit" type="submit">Sign In</button>
                <div class="ps-md-4 px-4">You dont have acoount? <a class="text-decoration-none" href="#">register</a></div>
               

</form>
        <div class="bg-white col-6 d-none d-md-block">
            <img class="girlimage" src="maquette/logo/7210527-HSC00001-7.jpg" alt="image11">
           
       </div>

    </section>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>