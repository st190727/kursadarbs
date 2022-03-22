<?php
require_once("config1.php");
echo '<link rel="stylesheet" type="text/css" href="styles.css">';
echo '<link rel="stylesheet" type="text/css" href="styles_menu.css">';
session_start();
	echo '<br/><a href ="index.html">Main</a>';//poga uz galveno lapu
	echo '<div><a href="login1.php">Back</a></div>';
echo '<br/><br/><br/>';
echo '
<!DOCTYPE html>
<html>
		<head>
			<meta charset="UTF-8">
			
				<title></title>
		</head>
<body>
';

//Parbaude
//Ievietojam klienta (user) ievadito login mainīgajajos $login and $password, ja tie ir tukši, tad iznicinam mainīgos
	if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
	if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//Ja klients (user) neievadīja login vai parole, tad radam kļūdu un apturam programmu  
 if (empty($login) or empty($password)) 
    {
		exit ("Your entered information not full, please return and enter all required fields!");
    }
//Ja login un parole ievaditi, tad apstradam tos, jo cilveki var ievadit dazadu informaciju
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
//Dzesam tuksumus
    $login = trim($login);
    $password = trim($password);
//Piesledzamies pie datu bazes
    $sql = "SELECT * FROM client WHERE login='$login'";
	$result=$conn->query($sql);
	$myrow=mysqli_fetch_array($result);
	
//Ja klients ar ievadito paroli neeksiste..
    if (empty($myrow['client_pass']))
    {
		//exit ("Sorry, password is not correct. <br/>Please go to the main page for registration or change password." ) ;
		header("location:FP.php");
    }
    else 
	{
//Ja eksiste, tad salidzinam paroles, piemeram admin parole 0000, meistaru parole 5555, un visu parejiem ir savas paroles datu baze
//parvirzam adminu un meistarus uz savam lapam, klientus uz savu lapu
    if ($myrow['client_pass']==9999) 
	{
//Ja paroles sakrit, tad palaižam sessiju, apsveicam admin ienaca majas lapa iekšā pie datiem
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['client_id']=$myrow['client_id'];
	//na client.php redirect
	//header("location:admin.php");
	header("location:mdb5-free-standard/admin_menu.php");
    //echo "<h2>WELCOME ".$_SESSION['login']."!</h2> <br/><br><a href='admin.php'>Go to admin page</a>";
    }
	else if ($myrow['client_pass']==5555) 
	{
//Ja paroles sakrit, tad palaižam sessiju, apsveicam meistars ienaca majas lapa iekšā pie datiem
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['client_id']=$myrow['client_id'];
    //echo "Congradulations, <span>".$_SESSION['login']." ! </span>You are in! <br/><br><a href='master.php'>Go to master page</a>";
   // echo "<h2>WELCOME ".$_SESSION['login']."!</h2> <br/><br>
	//<a href='master.php'>Go to master page</a>";
	//redirect to master.php page
	header("location:master.php");
	}
	else if ($myrow['client_pass']==$password) 
	{
		//redirect to client.php page
		header("location:client.php");
//Ja paroles sakrit, tad palaižam sessiju, apsveicam klientu, viņš ienaca majas lapā iekšā pie datiem
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['client_id']=$myrow['client_id'];
	echo "<h2>WELCOME ".$_SESSION['login']."!</h2> <br/><br><a href='client.php'>Go to client page</a>";
    }
//Ja paroles nesakrit ar datu bazes datiem, tad teksts atvainojiet...nekorekti dati	
 else 
	{
		exit ("Sorry, your login or password not correct. Please register. <a href='test_reg1.php'><br/><br/>Go to registration</a>");}
    }
		
echo '	
</body>    
</html>';
?>