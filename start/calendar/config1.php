<?php
$dblocation='localhost';
$dbuser='root';
$dbpasswd='';
$conn = new mysqli($dblocation, $dbuser, $dbpasswd);//pieslegums
if ($conn->connect_error) 
	echo "Savienojuma kļūda: " . $conn->connect_error;
	else
	//echo "<br/>Pieslēgums veiksmīgs!";
//------------------------------------------------
//kodējums DB

//echo "<br/>Kodējums: ". $conn->character_set_name();//apskatiit kodējumu
$conn->set_charset("utf8");//uzliek kodējumu utf8
//echo "<br/>Kodējums: ". $conn->character_set_name();//apskatiit kodējumu

$sql="use salon";//pieslegt savu db
$result =$conn->query($sql);//palaist
//------------------------------------------------



?>