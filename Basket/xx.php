<?php
echo '
<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main_menu.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
	<body>
    <h1></h1>

    <!-- Необязательный JavaScript; выберите один из двух! -->

    <!-- Вариант 1: пакет Bootstrap с Popper -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>-->

    <!-- Вариант 2: отдельные JS для Popper и Bootstrap -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   

	<div class="container" >
	   <div class="row justify-content-md-center" >
			<div class="col-md-auto my-5 p-5" style="border:1px solid #cecece; border-radius: 0.25rem;">
				
				<form name="forma1" action="test_reg1.php" method="post">
					<h2>Login</h2>
				
						<div class="mb-3 mt-4">
							<label class="form-label" for="login">Login</label>
							<input class="form-control" type="text" id="login" name="login" placeholder="" required>
						</div>
						<div class="mb-3">
							<label class="form-label" for="password">Password</label>
							<input class="form-control" type="text" id="pass" name="password" placeholder="" required>
						</div>
							<input class="btn btn-primary mb-3" type="submit" value="Login" "><br/>
					
				
						<p>Dont t have an account?<a href="ieraksts2_s.php"> Register now</a></p>
						<p>Forgot a password?<a href="xx.php"> Reset Password</a></p>
					
				</form>
				
			</div>
		</div>
	</div>
	</body>
</html>
';
?>

 <!--
https://itchief.ru/bootstrap/spacing-v4#sintaksis-klassov-dlya-zadaniya-margin-i-padding-otstupov
-->