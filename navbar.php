<?php global $user;?>
<style>
    /*:root{
  --primary-color: #fff;
  --secondary-color: #000;
  --background: #e9ecef,
  --brown-color: brown;
  --dark-brown: #5C4033;
  
  
}*/
</style>
    <nav class="navbar navbar-expand-lg navbar-light bg-white border">
        <div class="container col-lg-9 col-sm-12 col-md-10 d-flex flex-lg-row flex-md-row flex-sm-column justify-content-between">
            <div class="d-flex justify-content-between col-lg-8 col-sm-12">
                <a class="px-md-5aa" href="?">
                    <img src="assets/images/together.png" alt="" height="28">

                </a>

                </a>
                <form class="d-flex" id="searchform">
                    <input class="form-control me-2" type="search" id="search" placeholder="looking for someone.."
                        aria-label="Search" autocomplete="on">
<div class="bg-white text-end rounded border shadow py-3 px-4 mt-5" style="display:none;position:absolute;z-index:+99;" id="search_result" data-bs-auto-close="true">
<button type="button" class="btn-close"  id="close_search"></button>
<div id="sra" class="text-start">

</div>
</div>
                </form>

            </div>
            <ul class="navbar-nav flex-fill flex-row justify-content-evenly mb-lg-1 mb-sm-0">
    <li class="nav-item">
        <a class="nav-link text-dark" href="?"><i class="bi bi-house-door-fill" title="Home"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="?follow"><i class="bi bi-person-fill" title="Meet more friends"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" href="?video"><i class="bi bi-camera-video-fill" title="Vido"></i></a>
    </li>         

                    
                    <?php
if(getUnreadNotificationsCount()>0){
    ?>
 <a class="nav-link text-dark position-relative" id="show_not" data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample">
                    <i class="bi bi-bell-fill"></i>
  <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger">
   <small><?=getUnreadNotificationsCount()?></small>
  </span>
</a>

    <?php
}else{
    ?>
  <a class="nav-link text-dark" data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample"><i class="bi bi-bell-fill" title="Notification"></i></a>
    <?php
}
                    ?>
                   

</li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="offcanvas" href="#message_sidebar" href="#"><i class="bi bi-chat-dots-fill" title="Mesinger"></i>  <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger" id="msgcounter">
  
  </span></a>
                </li>
                <li class="nav-item dropdown dropstart">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="30" width="30" class="rounded-circle border">
                    </a>
                    <ul class="dropdown-menu position-absolute top-100 end-50" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="?u=<?=$user['username']?>"><img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="30" width="30" class="rounded-circle border">
                    <?=$user['username']?></a></li>

                        <li><a class="dropdown-item" href="?editprofile"><i class="bi bi-pencil-square"></i> Edit Profile</a></li>
                        <a class="dropdown-item" href="?page=top10"><i class="bi bi-eye"></i> View Top 10 populars</a>
<li>
                     

                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="assets/php/actions.php?logout"><i class="bi bi-box-arrow-in-left"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>
           

        </div>
    </nav>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
