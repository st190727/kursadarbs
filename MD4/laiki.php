<?php
//pievienojam
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
//ievietojam klienta ievadito login mainigajā $login, ja tas ir tukšs tad iznicinam mainīgo
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//ievietojam klienta ievadito paroli mainigajā $password, ja ta ir tukša tad iznicinam mainīgo
 if (empty($login) or empty($password)) 
 //ja klients neievadīja dati, apturam 
    {
    exit ("Not all information is entered, please return and fill all fields.");
    }
//apstrādajam login un password, jo klienti var ievietot jebkuru tekstu
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
//dzešam tukšumi
    $login = trim($login);
    $password = trim($password);
//piesledzamies pie datu bazes
//|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
//izvēlamies klientus, kuriem login ir vienads ar mainīga $login datiem
    $sql = "select client_id from client where login='$login'";
	$result=$conn->query($sql);
	$myrow=mysqli_fetch_array($result);
	
    if (!empty($myrow['client_id'])) {
    exit ("Sorry, You entered login is already registered. Choose different login.");
    }
//ja jauna ievadita login nav tad saglabajam dati
//ievietojam klienta tabula dati ar insert vaicajumu 
    $sql2 = "insert into client values(NULL,'$name', '$surname', '$phone', '$address', '$gender', '$birthday', '$city', '$password','$mail','$login')";   
$result2=$conn->query($sql2);
//Parbaudam vai ir kludas
    if ($result2=='TRUE')
    {echo "You have successfully registered! Now you can go to the site. <a href='http://localhost:8080/mysite/index.html'>Main page</a> <br/>
	or You can login <a href='http://localhost:8080/mysite/login1.php'>Login</a>";}
 else 
	{echo "Error! You are not registred.";}
?>