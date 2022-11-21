<div class="bg-dark sticky-top col-2 d-flex flex-column justify-content-between vh-100">

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