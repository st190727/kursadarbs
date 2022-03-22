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

	if (empty($datums) or empty($start)or empty($end)) 
 //ja klients neievadīja dati, apturam 
    {
    exit ("Not all information is entered, please return and fill all fields.");
    }
//apstrādajam login un password, jo klienti var ievietot jebkuru tekstu
    $datums = stripslashes($datums);
    $datums = htmlspecialchars($datums);
	$start = stripslashes($start);
    $start = htmlspecialchars($start);
	$end = stripslashes($end);
    $end = htmlspecialchars($end);
//dzešam tukšumi
    $datums = trim($datums);
    $end = trim($end);
	//izvēlamies datumus, kuriem datums ir vienads ar mainīga $datums datiem
    $sql = "select laiki_id from laiki where start='$start'";
	$result=$conn->query($sql);
	$myrow=mysqli_fetch_array($result);
	
	if (!empty($myrow['laiki_id'])) {
    exit ("Sorry, You entered date start is already registered. Choose different date start.");
    }
	
	//ja jauna ievadita start nav tad saglabajam dati

    $sql_laiki = "INSERT INTO laiki VALUES (NULL, '$datums','$start','$end')";
	$result2=$conn->query($sql_laiki);
	
	//Parbaudam vai ir kludas
    /*if ($result2=='TRUE')
    {echo' 
	  	<div class="alert alert-success" role="alert">
  			Time data added successfully!
		</div>';}
 else 
	{echo "Error! Time is not added.";}*/
}
/*$result = mysqli_query($db, "SELECT * FROM laiki");*/

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
  				//<form method="POST" action="laiki_add.php" enctype="multipart/form-data">
				echo'
				<form id="MyForm" action="" method="POST">
				
					
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

echo '
	</body>    
</html>';
?>