<?php
require('config1.php');
require('config.php');
//echo '<br/><a href ="index.html">Main</a>';
//echo '<br/><a href ="client.php">Back</a>';

//require('C:\wamp64\www\PHPMailer/PHPMailerAutoload.php');
	require('C:\wamp64\www\PHPMailer\src\PHPMailer.php');
    require("C:\wamp64\www\PHPMailer\src/SMTP.php");
    require("C:\wamp64\www\PHPMailer\src/Exception.php");




    // If the values are posted, insert them into the database.
    if (isset($_POST['login']) && isset($_POST['password']))
	{
        $login = mysqli_real_escape_string($conn, $_POST['login']);
		$verification_key = md5($login);
		$email = mysqli_real_escape_string($conn, $_POST['mail']);
        $password = md5($_POST['password']);
		$passwordagain = md5($_POST['passwordagain']);
		
$name=$_POST["name"];
$surname=$_POST["surname"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$birthday=$_POST["birthday"];
$city=$_POST["city"];
$mail=$_POST["mail"];
		if($password==$passwordagain)
		{
			$fmsg="";
			$usql="select * from client where login='$login'";
			$ures=mysqli_query($conn,$usql);
			$count=mysqli_num_rows($ures);
			if($count==1)
			{
				$fmsg .="Login exists in data base, please try different login";
			}
			
			$esql="select * from client where client_mail='$mail'";
			$eres=mysqli_query($conn,$esql);
			$ecount=mysqli_num_rows($eres);
			if($count==1)
			{
				$fmsg .="Email exists in data base, please reset your password";
			}
			
			
  $sql = "insert into client values(NULL,'$name', '$surname', '$phone', '$address', '$gender', '$birthday', '$city', '$password','$mail','$login')";
        //$sql = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($conn, $sql);
        if($result)
		{
            $smsg = "User Created Successfully.";
			$id = mysqli_insert_id($conn);
			//**************
			//Import PHPMailer classes into the global namespace


//Load Composer's autoloader
//require("C:\wamp64\www\PHPMailer/class.PHPMailer.php");
//require("C:\wamp64\www\PHPMailer/class.smtp.php");


//require 'C:\wamp64\www\PHPMailer\src/Exception.php';
//require 'C:\wamp64\www\PHPMailer\src/PHPMailer.php';
//require 'C:\wamp64\www\PHPMailer\src/SMTP.php';



if(isset($_POST) & !empty($_POST))
{

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer\PHPMailer\PHPMailer;
//$mail = new PHPMailer;


    //Server settings
     
    $mail->isSMTP();
	
    $mail->Host       = 'smtp.gmail.com';                    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $smtpuser;                     //SMTP username
    $mail->Password   = $smtppass;                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
	$mail->SMTPAuth   = true;
	
    //Recipients
    $mail->setFrom('test.irina.hrapane@gmail.com', 'MI');
    $mail->addAddress('test.irina.hrapane@gmail.com', 'Irina');     //Add a recipient


    //Content
                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = "http://localhost/user-management/verify.php?key=$verification_key&id=$id";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
					    echo 'Message could not be sent.';
					    echo 'Mailer Error: ' . $mail->ErrorInfo;
					} else {
					    echo 'Message has been sent';
					}

			}else
				{$fmsg .= "Failed to register user";}
		}else{$fmsg = "Password not matching";}
	}
}
     ?>
 
<html>
<head>
	<!-- Обязательные метатеги -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="main_menu.css">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<title>Register</title>


</head>
<body>
 

     
	
	
	
	<div class="container" >
	
			<div class="row justify-content-md-center" >
			
				
				<div class="col-md-auto my-5 p-5" >
				
			<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"><?php echo $smsg; ?> </div><?php } ?>
				<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"><?php echo $fmsg; ?> </div><?php } ?>
				
		<form name="forma1" action="register.php" method="post" style="border:1px solid #cecece; border-radius: 0.25rem;">
		<h2>Registration</h2>
			
				
				<div class="mb-3 mt-4">
					<label for="name">Your Name</label>
					<input type="text" id="name" name="name" placeholder="Name" pattern=[A-Z\sa-z]{3,20} required>
				</div>
				<div class="mb-3 mt-4">
					<label for="surname">Your Surname</label>
					<input type="text" id="surname" name="surname" placeholder="Surname" pattern=[A-Z\sa-z]{3,20} required>
				</div>
				<div class="mb-3 mt-4">
					<label for="phone">Your Phone number</label>
					<input type="text" id="phone" name="phone" placeholder="Phone" pattern=[0-9]{1,10} required>
				</div>
				<div class="mb-3 mt-4">
					<label for="address">Your Address</label>
					<input type="text" id="address" name="address" placeholder="Address" required>
				</div>
				<div class="mb-3 mt-4">
				<label for="gender-selection">Choose Gender</label>
				<select id="gender-selection" name="gender" required>
					<option value="">Select</option>
					<option value="man">Male</option>
					<option value="woman">Female</option>
				</select>
				</div>
				<div class="mb-3 mt-4">
					<label for="birthday">Your Birhday date</label>
					<input type="date" name="birthday" placeholder="dd-mm-yyyy"> 
				</div>
			
				<div class="mb-3 mt-4">
				<label for="city-selection">Choose City</label>
				<select id="city-selection" name="city" required>
					<option value="">Select</option>
					<option value="1">Daugavpils</option>
					<option value="2">Riga</option>
					<option value="3">Rezekne</option>
					
				</select>
				</div>
				
				<div class="mb-3 mt-4">
					<label for="client_pass">Add Your Password</label>
					<input type="text" id="pass" name="password" placeholder="Password.." required>
				</div>
				<div class="mb-3 mt-4">
					<label for="client_pass">Add Your Password Again</label>
					<input type="text" id="pass" name="passwordagain" placeholder="Password again.." required>
				</div>
				<div class="mb-3 mt-4">
					<label for="client_mail">Add Your E-mail</label>
					<input type="text" id="mail" name="mail" placeholder="name@gmail.com" required>
				</div>
				<div class="mb-3 mt-4">
					<label for="login">Add Your Login</label>
					<input type="text" id="login" name="login" placeholder="login..." required>
				</div>
						
				<div class="mb-3 mt-4">
					<input name="knopka" input type="submit" value="Registration"><br/>
				</div>
				<div class="mb-3 mt-4">
					<p>Already have an account?<a href="login1.php">Login now</a></p>
				</div>
				<br/><br/>
				
				
		</form>
	
				</div>
		</div>
	</div>
</body></html>