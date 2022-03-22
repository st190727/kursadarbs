<?php
session_start();
require_once("config1.php");
echo '<link rel="stylesheet" type="text/css" href="styles.css">';
echo '<link rel="stylesheet" type="text/css" href="styles_menu.css">';
echo '<br/><br/>';

echo'
<a href="login1.php" class="previous">Back</a>
<a href="index.html" class="next">Main</a>
<br/>';


echo'
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>
	';
echo "<h2>WELCOME ".$_SESSION['login']."!</h2>";
echo '

<script>
function myFunction(x) {
    x.classList.toggle("change");
}
</script>
<div class="client">
<h2>Client page</h2>
<p>Choose action in the menu.</p>

<div class="dropdown">
  <button class="dropbtn">
						  <div class="container" onclick="myFunction(this)">
						  <div class="bar1"></div>
						  <div class="bar2"></div>
						  <div class="bar3"></div>
						</div>
						
						</button>
  
  <div class="dropdown-content">
    <a href="xxxx.php">Link 1</a>
    <a href="yyyy.php">Link 2</a>
    <a href="image_show_cl.php">IMAGE SEARCH</a>
	<a href="index.html">CHANGE PASSWORD</a>
	<a href="logout.php">LOG OUT</a>
	
  </div>
</div></div>

</body>
</html>
';
 

?>