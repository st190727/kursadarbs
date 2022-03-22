<?php
error_reporting(0);
require_once("config1.php");
echo '<link rel="stylesheet" type="text/css" href="styles.css">';
//apstrādajam formu SERVISE ADD, pievienojam dati
// Ja nospiesta submit poga

if (isset($_POST['submit'])) {
	$datums=$_POST["datums"];
	$start=date('Y-m-d H:i:s', strtotime($_POST["start"]));
	$end=date('Y-m-d H:i:s', strtotime($_POST["end"]));
	
	
	$db = mysqli_connect("localhost", "root", "", "salon");
	if (!$db) {die("Connection failed: " . mysqli_connect_error());}
	//echo "You are connected! ";

//Saņemam dati no formas
		$sql_laiki = "INSERT INTO laiki VALUES (NULL, '$datums','$start','$end')";
		
if (mysqli_query($db, $sql_laiki)) {
      //echo "Time data added successfully";
	  echo' 
	  	<div class="alert alert-success" role="alert">
  			Time data added successfully!
		</div>';
} /*else {
      echo "Error: " . $sql_calendar . "<br>" . mysqli_error($db);
}*/
}
$result = mysqli_query($db, "SELECT * FROM laiki");
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
				<div class="col-md-auto my-5 p-5" style="border:1px solid #cecece; border-radius: 0.25rem;">
  				<form method="POST" action="laiki_add.php" enctype="multipart/form-data">
				
					
					<h2>Time add</h2>
							<p>Please add Your data.</p>
								<div class="mb-3 mt-4">
									<label class="form-label" for="datums">Date</label>
									<input class="form-control" type="date" name="datums" placeholder="dd-mm-yyyy">
								</div>
								<div class="mb-3 mt-4">
									<label class="form-label" for="start">From</label>
									<input class="form-control" type="datetime-local" id="start" name="start"  required>
								</div>
								<div class="mb-3 mt-4">						
									<label class="form-label" for="end">To</label>
									<input class="form-control" type="datetime-local" id="end" name="end"  required><br/><br/>
								</div>
							<button class="btn btn-primary mb-3" type="submit" name="submit">SUBMIT</button>
					</form>
				</div>
			</div>
		</div>
	';
//

echo '
	</body>    
</html>';
?>