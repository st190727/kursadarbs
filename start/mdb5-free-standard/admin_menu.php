<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title></title>
    <!-- MDB icon -->
    <link rel="icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
       <!-- Custom -->
       <link rel="stylesheet" href="css/styles_admin_menu.css" />
  </head>
  <body class="bg-light">
    <!-- Start your project here-->
    <header>
      <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
          height="15"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
	   <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          
		  src="C:\wamp64\www\kursadarbs\logoimg/logo.png"
          height="15"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
	  
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a>

      <!-- Notifications -->
      <div class="dropdown">
        <a
          class="text-reset me-3 dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
    </header>
    <main>
          <!-- Sidenav -->
          <!-- https://www.cssscript.com/sidebar-navigation-bootstrap/ -->
          <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
            <ul class="nav flex-column text-white w-100">
              <a href="#" class="nav-link h3 text-white my-2">
                Side Nav
              </a>
              <li href="#" class="nav-link">
                <span class="mx-2">Home</span>
              </li>
              <li href="#" class="nav-link">
                <span class="mx-2">About</span>
              </li>
              <li href="#" class="nav-link">
                <span class="mx-2">Contact</span>
              </li>

              <li href="#" class="nav-link">
                <span class="mx-2" >
                  <a href="#" onclick="show('Section1');"> <i class="fas fa-heart " ></i><span> </span>Time add</a>
                </span>
              </li>

             


               <!-- **************************************************--> 
           <div class="list-group list-group-flush"> 
            <!-- List menu--> 
           <div>
             
                 <a href="#" class="list-group-item waves-effect" onclick="show('Section1');"> <i class="fas fa-heart " ></i><span> </span>Time add</a>
                 <a href="#" class="list-group-item waves-effect" onclick="show('Section2');"> <i class="fas fa-calendar mr-3"></i><span> </span>Test</a>
                 <a href="#" class="list-group-item waves-effect" onclick="show('Section3');"> <i class="fas fa-calendar mr-3"></i><span> </span>Calendar add</a>
                 <a href="#" class="list-group-item waves-effect" onclick="show('Section4');"> <i class="fas fa-calendar mr-3"></i><span> </span>Client add</a>
                 <a href="#" class="list-group-item waves-effect" onclick="show('Section5');"> <i class="fas fa-calendar mr-3"></i><span> </span>Visit add</a>
                 <a href="#" class="list-group-item waves-effect" onclick="show('Section6');"> <i class="fas fa-calendar mr-3"></i><span> </span>Service add</a>
               </div>
        
            </div>
  <!-- **************************************************--> 
             
            </ul>
          </div>

 
        
          
       
      <!-- Toggle button -->
          <div class="p-1 my-container active-cont">
            .....................
            <a class="btn border-0" id="menu-btn">
              <i class="fas fa-bars"></i>
            </a>
            
    <!-- Content -->          
<div class="container" >
  <div class="row justify-content-md-center" >
    <div class="col-md-auto">

      <div id="Section1"><?php include("laiki_add1.php");?></div> 
      <div id="Section2" style="display: none;">Duis erat sapien, sagittis consectetur odio at, 
      <br>
      <img src="https://via.placeholder.com/500x100"/>
      </div>   
      <div id="Section3" style="display: none;"><?php include("calendar_add.php");?></div>
      <div id="Section4" style="display: none;"><?php include("ieraksts2_sa.php");?></div>
      <div id="Section5" style="display: none;"><?php include("visit_a.php");?></div>
      <div id="Section6" style="display: none;"><?php include("service_a.php");?></div>

    <!--
	<a href="city_add.php">CITY ADD</a>
	<a href="master_add.php">MASTER ADD</a>
    <a href="image_show_a.php">IMAGE SEARCH</a>
	<a href="search_bd_a.php">BIRTHDAY</a>
	<a href="send_bd_card.php">Send BIRTHDAY card</a>
	<a href="tables.php">TABLES</a>
	<a href="XXX">Delete data</a>
-->   
  
    </div>
  </div>
</div>
    <!-- Content -->    


          </div>
      <!-- Toggle button -->
     
      <!-- Sidenav -->
    </main>
    
 
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript">
var menu_btn = document.querySelector("#menu-btn");
var sidebar = document.querySelector("#sidebar");
var container = document.querySelector(".my-container");
menu_btn.addEventListener("click", () => {
  sidebar.classList.toggle("active-nav");
  container.classList.toggle("active-cont");
});


var divs = ["Section1", "Section2", "Section3", "Section4", "Section5" , "Section6"];
      var visibleId = null;
      function show(id) {
        if(visibleId !== id) {
          visibleId = id;
        } 
        hide();
      }
      function hide() {
        var div, i, id;
        for(i = 0; i < divs.length; i++) {
          id = divs[i];
          div = document.getElementById(id);
          if(visibleId === id) {
            div.style.display = "block";
          } else {
            div.style.display = "none";
          }
        }
      }  



    </script>
  </body>
</html>
