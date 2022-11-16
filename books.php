<?php
require 'database.php';
require 'getbook.php';
require 'save.php';
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
global $conn ;
getbook();
savebook();
?>
    <div class="bg-success col-2 d-flex flex-column justify-content-between vh-100">

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
           
            
                
                <div class="btn-group dropup pb-3">
                    <h6>amine malyana</h6>
                    <div type="" class="" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-gear"></i>
                    </div>
                    <ul class="dropdown-menu bg-danger">
                        <li class="py-3"><i class="fa-solid fa-house-user"></i><a class="text-decoration-none text-white " href="#"> dashboard</a> </li>
                        <li class="py-3"><i class="fa-solid fa-user"></i><a class="text-decoration-none text-red" href="#"> Books</a> </li>
                        <li class="py-3"><i class="fa-solid fa-book "></i><a class="text-decoration-none text-red" href="#"> users</a> </li>
                    </ul>
                  </div>
              </div>
        </div>

    <div class="bg-danger col-10">
        <div>
            <h1 class="px-5 py-3">Dashboard</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">add Book</button>
        </div>
        <div class="bg-dark mx-5 divline"></div>

        <?php
								foreach(array_values($GLOBALS['result']) as $row ){ ?>


        
        <button class=" d-flex justify-content-between p-1">

            <div class="bg-warning divs2 d-flex justify-content-between  align-items-center m-2">
                <div class=" h-100">
                    <?php if($row['img']){?>
                        <img class="imagebook p-2" src="img/<?php echo $row['img']?>" alt="book1">
                     <?php }else{ ?>
                        <img class="imagebook p-2" src="img/9780063040885_p0_v4_s1200x630.jpg" alt="book1">
                        <?php }?>
                </div>
                <div class=""><?php  echo $row['title']  ?></div>
                <div class="bg-dark m-4 divline1"></div>
                <div class=""><?php echo $row['fn'] .' '. $row['ln']  ?></div>
                <div class="bg-dark m-4 divline1"></div>
                <div class=""><?php  echo ''.$row['description'].''  ?></div>
                
            </div>
           
        </button>

                             <?php   }
                             ?>

    </div>
    



        <!-- modal -->

        
<form enctype="multipart/form-data" method="POST" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Titlle</label>
            <input name="title" type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea name="description" class="form-control" id="message-text"></textarea>
          </div>
          <div>
            <input name="image" type="file">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">save</button>
      </div>
    </div>
  </div>
</form>





    <!-- scripts  -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>