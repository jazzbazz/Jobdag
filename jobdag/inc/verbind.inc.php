<?php
// session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'jobdag';
if ( !isset($_SESSION['control']) ) {
// 	BEVEILIGING TEGEN INKIJK ?
  	die ('you are not alowed to see this!');
  }
// Try and connect using the info above.Windowsuser change pass !!!
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// TEST OM TE ZIEN OF CONNECTIE GOED ZIT
echo "<br> We didn't die";

if ( !isset($_POST['voornaam'], $_POST['naam'] ) ) {
// IS NORMAAL OPGEVANGEN DOOR HTML REQUIRED
  	die ('Please fill both the voornaam and naam field!');
  }


// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
$sql = "INSERT INTO 
		students
		(vnaam, naam,antw1,antw2,antw3,antw4,check1,check2,check3, omschrijving)
		VALUES (?,?,?,?,?,?,?,?,?,?)";
if($stmt = $con->prepare($sql)){
	$stmt->bind_param('ssssssssss',$vnaam , $naam, $antw1, $antw2, $antw3,$antw4,$check1,$check2, $check3, $omschrijving);
	$stmt->execute();
}else {
	$error = $con->errno. ' '.$con->error;
	echo $error;
}
// HIERBOVEN ELSE GEEFT ERRORMELDING ALS ER IETS MIS IS (handig !)  
	

?>
