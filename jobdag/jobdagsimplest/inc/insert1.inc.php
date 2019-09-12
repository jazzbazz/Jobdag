<?php 
$sql = "INSERT INTO 
		jobdag.studenten2
		(vnaam,name, omschrijving,heartbeat)
		VALUES (?,?,?,?)";
if($stmt = $con->prepare($sql)){
	$stmt->bind_param('ssss',$voornaam, $naam, $omschrijving,$heartbeat);
	$stmt->execute();
	// echo "zou in db moeten aanwezig zijn...";
	// $con->lastInsertId();
	// echo $con->lastInsertId();
}else {
	$error = $con->errno. ' '.$con->error;
	echo $error;
}
// HIERBOVEN ELSE GEEFT ERRORMELDING ALS ER IETS MIS IS (handig !)  
	


?>