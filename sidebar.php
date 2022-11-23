<div class="bg-dark sticky-top col-2 d-flex flex-column justify-content-between vh-100">

<img class="logo2 p-2 " src="maquette/logo/Untitled-2.png" alt="">

<div class="text-start d-flex  pb-sm-5 mb-sm-5 ">
    <div class="col-md-3 col-6 "></div>
    <ul class="text-white list-unstyled ">
        <li class="py-3 d-flex"><a href="dashboard.php" title="dashboard" class=" text-white text-decoration-none pe-3  fa-solid fa-house-user"></a><a class="text-decoration-none text-white d-none d-md-block " title="dashboard" href="dashboard.php">Dashboard</a> </li>
        <li class="py-3 d-flex"><a href="books.php" title="Books" class="text-white text-decoration-none pe-3  fa-solid fa-book"></a><a class="text-decoration-none text-white d-none d-md-block" title="Books" href="books.php">Books</a> </li>
        <li class="py-3 d-flex"><a title="users" class=" text-white text-decoration-none pe-3  fa-solid fa-users "></a><a class="text-decoration-none text-white d-none d-md-block" title="users" href="#">Users</a> </li>
    </ul>
</div>
<div class=" d-flex flex-column align-items-center">
   
    
        
<form method="POST" class="btn-group dropup p-1">
          <div class="align-items-center d-flex flex-wrap justify-content-center">
          <div id="profilpic" class = "bg-warning rounded-circle fs-5 divpad " style="width:35px ; height:35px" ></div>
            <h6 class="text-white ps-1 pe-3 pt-2 d-none d-sm-block" id="flname"><?php echo  $_SESSION['first_name'].' '.$_SESSION['last_name'] ?></h6>
            <div type="" class=" px-1" data-bs-toggle="dropdown" aria-expanded="false">
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