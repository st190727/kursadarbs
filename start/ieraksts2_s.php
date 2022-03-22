<?php
require_once("config1.php");
echo '
<!DOCTYPE html>
<html>
		<head>
			 <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main_menu.css">
	<link rel="stylesheet" type="text/css" href="login-form.css">
				<title></title>
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		</head>

	<body>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

	
		<div class="container" >
			<div class="row justify-content-md-center" >
				<div class="col-md-auto my-5 p-5" style="border:1px solid #cecece; border-radius: 0.25rem;">
					<form name="forma1" action="4A.php" method="post">
						<h2>Registration</h2>
							<div class="mb-3 mt-4 ">
								<label class="form-label" for="name">Your Name</label>
								<input class="form-control" type="text" id="name" name="name" placeholder="" pattern=[A-Z\sa-z]{3,20} required>
							</div>
							<div class="mb-3">
								<label class="form-label" for="surname">Your Surname</label>
								<input class="form-control" type="text" id="surname" name="surname" placeholder="" pattern=[A-Z\sa-z]{3,20} required>
							</div>
							<div class="mb-3">
								<label class="form-label" for="phone">Your Phone number</label>
								<input class="form-control" type="text" id="phone" name="phone" placeholder="22154598" pattern=[0-9]{1,10} required>
							</div>
							<div class="mb-3">
								<label class="form-label" for="address">Your Address</label>
								<input class="form-control" type="text" id="address" name="address" placeholder="" required>
							</div>
							<div class="mb-3">
							<label class="form-label" for="gender-selection">Choose Gender</label>
							<select class="form-select" id="gender-selection" name="gender" required>
								 <option selected></option>
								<option value="man">Male</option>
								<option value="woman">Female</option>
							</select>
							</div>
							<div class="mb-3">
								<label class="form-label" for="birthday">Choose your Birhday date</label>
								<input class="form-control" type="date" name="birthday" placeholder="dd-mm-yyyy"> 
							</div>
						
							<div class="mb-3">
							<label class="form-label" for="city-selection">Choose City</label>
								<select class="form-select" id="city-selection" name="city" required>
								  <option selected></option>
								  <option value="1">Daugavpils</option>
								  <option value="2">Riga</option>
								  <option value="3">Rezekne</option>
								</select>
							</div>
							
							<div class="mb-3">
								<label class="form-label" for="client_pass">Add Your Password</label>
								<input class="form-control" type="text" id="pass" name="password" placeholder="" required>
							</div>
							<div class="mb-3">
								<label class="form-label" for="client_pass">Add Your Password Again</label>
								<input class="form-control" type="text" id="pass" name="passwordagain" placeholder="" required>
							</div>
							<div class="mb-3">
								<label class="form-label" for="client_mail">Add Your E-mail</label>
								<input class="form-control" type="text" id="mail" name="mail" placeholder="name@gmail.com" required>
							</div>
							<div class="mb-3">
								<label class="form-label" for="login">Add Your Login</label>
								<input class="form-control" type="text" id="login" name="login" placeholder="" required>
							</div>
									
							
								<input class="btn btn-primary mb-3" name="knopka" input type="submit" value="Registration"><br/>
								<p>Already have an account?<a href="login1.php">  Login now</a></p>
				
					</form>
				</div>
			</div>
		</div>
	</body>    
</html>';				
?>






