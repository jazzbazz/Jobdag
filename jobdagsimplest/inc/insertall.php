<?php

$vnaam = $_SESSION['voornaam'];
$naam = $_SESSION['naam'];
$antw1 = $_SESSION['waarom'];
$antw2 = $_SESSION['heartbeat'];
$antw3 = $_SESSION['wat'];
$antw4 = $_SESSION['waarde'];
$check1 = $_SESSION['skill1'];
$check2 = $_SESSION['skill2'];
$check3 = $_SESSION['skill3'];
$omschrijving = $_SESSION['omschrijving'];
$pad = $_SESSION['path'];
$alt = $_SESSION['alt'];

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
$sql = "INSERT INTO 
		students
		(vnaam, naam,antw1,antw2,antw3,antw4,check1,check2,check3, omschrijving, pad,alt)
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
if($stmt = $con->prepare($sql)){
	$stmt->bind_param('ssssssssssss',$vnaam , $naam, $antw1, $antw2, $antw3,$antw4,$check1,$check2, $check3, $omschrijving, $pad,$alt);
	$stmt->execute();
}else {
	$error = $con->errno. ' '.$con->error;
	echo $error;
}
// HIERBOVEN ELS

 ?>