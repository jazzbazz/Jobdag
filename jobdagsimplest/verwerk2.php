<?php 
session_start();

if(!isset($_POST['submit2'])){
	die("hoe bent u hier geraakt ?");
}

// create shortname variables / sanitize data

$waarom = filter_var(trim($_POST['waarom']), FILTER_SANITIZE_STRING);
$wat = filter_var(trim($_POST['wat']), FILTER_SANITIZE_STRING);
$waarde = filter_var(trim($_POST['waarde']), FILTER_SANITIZE_STRING);
$skill1 = $_POST['skill1'];
$skill2 = $_POST['skill2'];
$skill3 = $_POST['skill3'];

// create session variables
$_SESSION['waarom'] = $waarom;
$_SESSION['wat']= $wat;
$_SESSION['waarde']= $waarde;
$_SESSION['skill1']= $skill1;
$_SESSION['skill2']= $skill2;
$_SESSION['skill3']= $skill3;


// echo $voornaam."<br>".$naam."<br>".$omschrijving."<br>".$heartbeat;
// require_once('inc/verbind.inc.php');
// require_once('inc/insert1.inc.php');
// require_once('inc/getid.inc.php');
header('Location: students3.php');
exit;

?>