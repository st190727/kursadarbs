<?php
echo '
<!DOCTYPE html>
<html>
	<head>
		<!-- Обязательные метатеги -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="main_menu.css">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<title>Visit data</title>
	</head>
	<body>
	<!-- Вариант 2: отдельные JS для Popper и Bootstrap -->
	    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
		<div class="container" >
			<div class="row justify-content-md-center" >
				<div class="col-md-auto my-5 p-5" style="border:1px solid #cecece; border-radius: 0.25rem;">';
				
	  echo'
						<form class="form-signin" method="POST" action="FP.php" >
							<h2 class="form-signin-heading">Password update</h2>
								<div class="input-group mb-3">
									<span class="input-group-text" id="basic-addon1">login</span>
									<input type="text" name="login" class="form-control" placeholder="Login name" required>
								</div>
						
							<button class="btn btn-primary mb-3 mr-3 btn-block" type="submit">Update Password</button>
							<a class="btn btn-primary mb-3 btn-block" href="register.php">Register</a>
					</form>
				</div>
			</div>
		</div>
	</body>    
</html>';
?>