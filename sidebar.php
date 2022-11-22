<div class="bg-dark sticky-top col-2 d-flex flex-column justify-content-between vh-100">

<img class="logo2 p-2 " src="maquette/logo/Untitled-2.png" alt="">

<div class="text-start d-flex  pb-5 mb-5 ">
    <div class="col-md-3 col-6 "></div>
    <ul class="text-white list-unstyled ">
        <li class="py-3 d-flex"><i title="dashboard" class=" pe-3 pt-1 fa-solid fa-house-user"></i><a class="text-decoration-none text-white d-none d-md-block " title="dashboard" href="#"> dashboard</a> </li>
        <li class="py-3 d-flex"><i title="Books" class="pe-3 pt-1 fa-solid fa-book"></i><a class="text-decoration-none text-white d-none d-md-block" title="Books" href="#"> Books</a> </li>
        <li class="py-3 d-flex"><i title="users" class="pe-3 pt-1 fa-solid fa-users "></i><a class="text-decoration-none text-white d-none d-md-block" title="users" href="#"> users</a> </li>
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