<?php
session_start();
echo '<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="side_menu.css">
	</head>
';
echo "<h2>WELCOME ".$_SESSION['login']."!</h2>";
echo '
<nav>
    <a class="logo" href="">
    <h2 style="color:white">M<span style="color:white">I<span></h2>
  </a> 

  <div class="label">Menu</div>
<div class="scrollbar" id="style-1">
  <a href="index.html">
    <i class="fa fa-home fa-lg"></i>
    <span class="nav-text">Home</span>
  </a>

  <a href=" ">
    <i class="fa fa-user fa-lg"></i>
    <span class="nav-text">Profile</span>
  </a>
  
  <a href=" ">
      <i class="fa fa-envelope-o fa-lg"></i>
      <span class="nav-text">E-mail</span>
  </a>
  
  <div class="mid-block">

    <a href="visit.php">
     <i class="fa fa-html5 fa-lg"></i>
      <span class="nav-text" >Visit add</span>
	  
  </a>
  
  <a  href="service.php">
  <i class="fa fa-css3 fa-lg"></i>
  <span class="nav-text">Service add</span>
  </a>

  <a  href="calendar_add.php ">
    <i class="fa fa-flask fa-lg"></i>
    <span class="nav-text">Calendar add</span>
  </a>

  <a  href="image_show_mas.php ">
    <i class="fa fa-picture-o fa-lg"></i>
    <span class="nav-text">Image search</span>
  </a>
  <a  href=" ">
    <i class="fa fa-gamepad fa-lg"></i>
    <span class="nav-text">XXXXX</span>
  </a>
   
  </div>
   <a href="search_bd_mas.php">
    <i class="fa fa-book fa-lg"></i>
    <span class="nav-text">Birthday</span>
  </a>
  <a href=" ">
   <i class="fa fa-cog fa-lg"></i>
    <span class="nav-text">Setting</span>
  </a>
  <a href=" ">
    <i class="fa fa-question-circle fa-lg"></i>
    <span class="nav-text">Help</span>
  </a>
</div> 
</nav>

</html>';
?>