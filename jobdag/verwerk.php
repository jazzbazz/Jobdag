<?php 
session_start();
$_SESSION['control']= 3;

// waardes ophalen en gemakkelijkere namen geven
if(isset($_POST['submit'])){
$vnaam = $_POST['voornaam'];
$naam = $_POST['naam'];
$antw1= $_POST['antw1']; 
$antw2= $_POST['antw2'];
$antw3 = $_POST['antw3'];
$antw4 = $_POST['antw4'];

// GETTING OPTIONVALUES
$check1 =$_POST['firstskill'];
$check2 =$_POST['secondskill'];
$check3 =$_POST['thirdskill'];
// GETTING CHECKBOXVALUES
// if(!empty($_POST['checkbox'])) {
// // Counting number of checked checkboxes.
//   $checked_count = count($_POST['checkbox']);
//   if($checked_count< 3) {
//     echo "kies drie skills you ongeletterden dwaas";
//   } else {
//     $checks = $_POST['checkbox'];
//     $check1 = $checks[0];
//     $check2 = $checks[1];
//     $check3 = $checks[2];
  
//   }
//   }
  $omschrijving = $_POST['omschrijving'];

require_once('inc/verbind.inc.php');
  


//TODO SANITIZE STRINGS !
echo "You are :" .$vnaam."<br>"; 
echo "Your familyname Iz : ". $naam."<br>";
 echo "Eerste antwoord : ".$antw1."<br>";
 echo "Tweede antwoord : ".$antw2."<br>";

echo "Derde antwoord :".$antw3."<br>";
 echo "Vierde antwoord :".$antw4."<br>";
 echo "check1 = ".$check1."<br>";
 echo "check2 = ".$check2."<br>";
 echo "check3 = ".$check3."<br>";

} 



?>