<?php
require ("database.php");
require ("register-function.php");
register();
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
        <div class="bg-white col-6 d-none d-md-block">
             <img class="girlimage" src="maquette/logo/5155417-HSC00001-7.jpg" alt="image11">
            
        </div>
        <form method="POST" class="col-md-6 col-12 text-center py-5">
                <img class="signlogo" src="maquette/logo/Untitled-2.png" alt="logo">
                <h1 class="fw-bold">The Bookworm </h1>
                <div class="d-flex flex-column pe-md-4 px-4">      
                    <input name="fname1" class="my-3" type="text" placeholder="First name">
                    <input name="lname1" class="my-3" type="text" placeholder="Last name">
                    <input name="email1" class="my-3" type="email" placeholder="Email">
                    <input name="password1" class="my-3" type="password" placeholder="Password">
            </div>
                <div class="text-start px-4">
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I agree all statment<a class="text-decoration-none" href="#">Terms & Condition</a>
                        </label>
                      </div>
                </div>
                <button name="submit" type="submit" class="m-2 pb-2 fs-4 fw-bold px-4 py-2 rounded-pill btn mutted2" >Register</button>
                <div>Allready have account? <a class="text-decoration-none" href="#">Login</a></div>
               

</form>

    </section>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>