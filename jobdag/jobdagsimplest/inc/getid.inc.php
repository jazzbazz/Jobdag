<?php 
$query = "SELECT  id FROM jobdag.studenten  WHERE vnaam = ? ";
if ($stmt = $con->prepare($query)) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_SESSION['voornaam']);
	$stmt->execute();
	
	$stmt->store_result();
	$stmt->bind_result($id);
	$_SESSION['id']= $id;

}else {
	$error = $con->errno. ' '.$con->error;
	echo $error;
}

?>