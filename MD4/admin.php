<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  @import url("https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css");
 
</head>
<body>
<header>
  <!-- Start your project here-->  
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container-fluid"> 
    <a href="#" class="navbar-brand waves-effect"><strong class="link-primary">Logo</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
     <a href="#" class="nav-link waves-effect">Home</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link waves-effect">Home</a>
     </li>
     <li class="nav-item">
      <a href="#" class="nav-link waves-effect">Home</a>
     </li>
  </ul>

  <!-- Icons-->
  <ul class="navbar-nav nav-flex-icons">
    <li class="nav-item mr-2">
      <a href="#" class="nav-link border border-light rounded waves-effect">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
    </a>
    
    
    </li>
    <li class="nav-item mr-2">
      <a href="#" class="nav-link border border-light rounded waves-effect">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg>
    </a>
    </li>
    <li class="nav-item mr-2">
      <a href="#" class="nav-link border border-light rounded waves-effect">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
          <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg>
    </a>
    </li>
    </ul>
</div>
  </div>
  </nav> 
 
 <!-- Sidebar--> 

<div class="sidebar-fixed position-fixed">
  <a href="#" class="logo-wrapper waves-effect">
    <img src="img/logomd.jpg" alt="" class="img-fluid">
  </a>
  <div class="list-group list-group-flush">
    <!-- List menu--> 
	 <!--<div>-->
         <a href="#" class="list-group-item waves-effect" onclick="show('Section1');">  <i class="fas fa-heart " ><span> </span>Time add</i></a>
         <a href="#" class="list-group-item waves-effect" onclick="show('Section2');"> <i class="fas fa-calendar mr-3"><span> </span>Calendar add</i></a>
         <a href="#" class="list-group-item waves-effect" onclick="show('Section3');"> <i class="fa fa-user mr-3"></i><span> </span>Client add</a>
         <a href="#" class="list-group-item waves-effect" onclick="show('Section4');">Section4</a>
       <!--</div>-->
 <!-- div example--> 
	<a href="div.php" class="list-group-item active waves-effect" >
      <i class="fas fa-heart" >ADD</i>
    </a>
<!-- div example--> 


  </div>
</div>

</header>
<main class="pt-5 max-lg-5">
  <div class="container-fluid mt-5">
    <div class="card mb-4 wow fadein">
      
        <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-2 mb-sm-0 pt-1">
          <a href="#">Home page</a>
          <span> / </span>
          <span>Dashboard</span>
        </h4>
        <form class="display-flex justify-content-center">
          <input type="search" class="form-control" placeholder="Type your query">
          <button class="btn btn-primary btn-sm my-0 p" type="submit"> <i class="fa fa-search"></i></button>
        </form>
      </div>

    </div>
  </div>
</main>
<!-- test form Laiki add-->

<div class="container" >
    <div class="row justify-content-md-center" >
      <div class="col-md-auto">
	
<div id="Section1"><?php include("laiki_add1.php");?></div> 

  
<div id="Section2" style="display: none;">Duis erat sapien, sagittis consectetur odio at, 
	<br>
	<img src="https://via.placeholder.com/500x100"/>
</div>   
<div id="Section3" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
<div id="Section4" style="display: none;"><?php include("laiki_add1.php");?></div>
		
      </div>
    </div>
  </div>
  
  
   
	  
	  <!-- test div-->

 <!-- test form end-->


  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
<script type="text/javascript">
      var divs = ["Section1", "Section2", "Section3", "Section4"];
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
</html>
  <!-- avots
https://stackhowto.com/show-hide-multiple-divs-in-javascript/
-->




