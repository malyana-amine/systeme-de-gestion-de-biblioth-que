<?php
require 'database.php';
require 'getbook.php';
require 'save.php';
require 'update.php';
require 'deletebook.php';
require 'checklogin.php';
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
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
    


    <title>Document</title>
</head>
<body class="d-flex">

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>

<?php
global $conn ;
getbook();
savebook();
updatebook();
deletebook();
?>
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
                  <div id="profilpic" class = "bg-warning rounded-circle fs-5 divpad  " style="width:35px ; height:35px" ></div>
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

    <div class="bodycolor col-10 ">
        <div class="d-flex justify-content-between">
            <h1 class="px-5 py-3">Dashboard</h1>
            <button  type="button" class="btn btn-primary p-2 m-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">add Book</button>
        </div>
        <div class="bg-dark mx-5 divline"></div>

        <div class="p-5">
        <table class="table ">
                        <thead>
                            <tr class=" text-muted">
                                
                               
                                <th scope="col" style="font-size:14px;">Book cover</th>
                                <th scope="col" style="font-size:14px;">Titlle</th>
                                <th scope="col" style="font-size:14px;">Publisher</th>
                                <th scope="col" style="font-size:14px;">Description</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                        <?php
								foreach(array_values($GLOBALS['result']) as $row ){ ?>
                
                
                
                <tr onclick="update(<?php  echo $row['id']  ?>)"  class="" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="">
             
                <td class="align-middle">
                  <?php if($row['img']){?>
                        <img class="imagebook p-2" id="image<?php  echo $row['id'] ?>" src="img/<?php echo $row['img']?>" alt="book1">
                     <?php }else{ ?>
                        <img class="imagebook p-2" src="img/9780063040885_p0_v4_s1200x630.jpg" alt="book1">
                        <?php }?>
                  </td>


                  <td class="align-middle">
                  <div id="title<?php  echo $row['id']  ?>" class=""><?php  echo $row['title']  ?></div>
                  </td>

                  <td class="align-middle">
                    <div class=""><?php echo $row['fn'] .' '. $row['ln']  ?></div>
                </td>

                <td class="align-middle">
                <div id="description<?php  echo $row['id']  ?>" class=""><?php  echo ''.$row['description'].''  ?></div>
                </td>
                  
                     </tr>
                       <?php   }
                             ?>        
              </tbody>
                     </table>

                     </div>

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
            <input name="title" type="text" class="form-control" id="recipient-name" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea name="description" class="form-control" id="message-text" required></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Choose your cover</label>
            <input name="image" class="form-control" type="file" id="formFile">
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










<form enctype="multipart/form-data" method="POST" class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <input name="title" type="text" class="form-control" id="recipient-name1">
            <input type="hidden" name="hidinput" class="id"  id="hid" value="">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea name="description" class="form-control" id="message-text1"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">apdate you cover</label>
            <div>
                <img name="image1" class="imagebook p-2" id="imageupdat" src="" alt="books">
            </div>
            <input name="image1" class="form-control" type="file" id="formFile1">
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="delete" class="btn btn-primary">delete</button>
        <button type="submit" name="update" class="btn btn-primary">update</button>
        
      </div>
    </div>
  </div>
</form>











    <!-- scripts  -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="jsFiles/main.js"></script>
</body>
</html>