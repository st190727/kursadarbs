
<?php
	require_once('login1.php');
	
	require('config1.php');

	require('C:\wamp64\www\PHPMailer\src\PHPMailer.php');
    require("C:\wamp64\www\PHPMailer\src/SMTP.php");
    require("C:\wamp64\www\PHPMailer\src/Exception.php");


  if(isset($_POST) & !empty($_POST))
  {
		$smsg='Update done! Check e-mail for your new password and login!';
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

		

        $mail->setFrom('test.irina.hrapane@gmail.com', 'MI salon');
        $mail->addAddress('test.irina.hrapane@gmail.com', 'Irina'); 

        $mail->Subject = 'Your New Password is';
        //$mail->Body    = "Your Password is $pass";
		//$mail->Body    = "Your new password is $password_hash";
		
$mail->Body    = "Your new password is $password_hash";
		

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

       if(!$mail->send()) {
		   
            //echo 'Message could not be sent.';
			
			if(isset($fmsg)){ 
			echo '
			<div class="container" >
				<div class="row justify-content-md-center" >
					<div class="col-md-auto" >
			
						<div class="alert alert-success" role="alert">
			
			';
			echo $fmsg;
			echo '</div></div></div></div>';
			}
			
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
			
            //echo 'Message has been sent';
			
			if(isset($smsg)){ 
			echo '
			<div class="container" >
				<div class="row justify-content-md-center" >
					<div class="col-md-auto" >
			
						<div class="alert alert-success" role="alert">
			
			';
			echo $smsg;
			echo '</div></div></div></div>';
			}
        }
		//**************
		
		/*$mail->send();
    echo 'Message has been sent';*/
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//**************
      }//result
	  else{
        echo "failed to updated password";
      }
      
    }//Count==1

  }//POST

?>


<script type="text/javascript" src="copy.js"></script>
<script>

</script>


<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        


