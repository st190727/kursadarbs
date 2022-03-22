<?php
	require_once('login1.php');
	require('config1.php');

	require('C:\wamp64\www\PHPMailer\src\PHPMailer.php');
    require("C:\wamp64\www\PHPMailer\src/SMTP.php");
    require("C:\wamp64\www\PHPMailer\src/Exception.php");


  if(isset($_POST) & !empty($_POST))
  {
		$smsg='Update done Check e-mail for your new password!';
		$fmsg='Update error';
		$input = $_POST['login'];
		$pass = rand(999, 99999);
		$password_hash = md5($pass);
		$sql = "SELECT * FROM `client` WHERE ";
		  if(filter_var($input, FILTER_VALIDATE_EMAIL)){
        $sql .= "client_mail='$input'";
      }else{
        $sql .= "login='$input'";
      }
    $res = mysqli_query($conn, $sql);
    
    $count = mysqli_num_rows($res);
    if($count == 1){
      
      
      $r = mysqli_fetch_assoc($res);
      //$password = $r['password'];
      $login = $r['login'];
//po login
      //echo $usql = "UPDATE `client` SET client_pass=" . md5($pass) . "  WHERE login='$login'";
      $usql = "UPDATE `client` SET client_pass='$password_hash' WHERE login='$login'";
	  $result = mysqli_query($conn, $usql);
      if($result){
     


$mail = new PHPMailer\PHPMailer\PHPMailer(true);
//$mail = new PHPMailer(true);
       
try{
        $mail->isSMTP();   // set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';
        //$mail->SMTPAuth = true;
        $mail->Username = $smtpuser;
        $mail->Password = $smtppass;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
		
		//$mail->SMTPSecure = 'ssl';
        //$mail->Port = 465;
		
		$mail->SMTPAuth   = true; // turn on SMTP authentication
		$conn = true;

		

        $mail->setFrom('test.irina.hrapane@gmail.com', 'MI');
        $mail->addAddress('test.irina.hrapane@gmail.com', 'Irina'); 

        $mail->Subject = 'Your New Password is';
        //$mail->Body    = "Your Password is $pass";
		$mail->Body    = "Your Password is $password_hash";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

       if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
		//**************
		$mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//**************
      }//result
	  else{
        echo "failed to updated password";
      }
      
    }

  }

?>
<!DOCTYPE html>
<html>
		<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="styles.css">
				<title></title>
				
		</head>

<body>

<div class="all_reg_form">
	<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST" action="FP.php">
        <h2 class="form-signin-heading">Password update</h2>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">login</span>
		  <input type="text" name="login" class="form-control" placeholder="Login name" required>
		</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Update Password</button>
        <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
      </form>
	</div>
</div>






<?php
/*
$password = rand(999, 99999);
$password_hash = md5($pass);

 $r= mysqli_fetch_assoc($res);
      $username = $r['login'];

      $usql = "UPDATE `login` SET password='$password_hash' WHERE login='$username'";
      $result = mysqli_query($connection, $usql);
      if($result){
      //send email here
      }
	  */
	  ?>
	 