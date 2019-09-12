<?php
session_start();
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $longlink = $_FILES['image']['name'];
      $file_extA=explode('.',$longlink);
      $file_ext=strtolower(end($file_extA));
      $extensions= array("gif","jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG, JPG, GIF or PNG file.";
      }
      //LIMIT IN PHP.INI = 32M
      if($file_size > 32097152) {
         $errors[]='File size must be less 32 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         // echo "Success";
      }else{
         print_r($errors);
      }
   }

// echo "<main class='container'>";
      
      
			 
         // if(!isset($_POST['submit'])){
         //    echo "<br> choose image";
         // }else {
         //    echo "<ul>
         //    <li>Sent file: ". $_FILES['image']['name'];
         //    echo "  
         //    <li>File size: ".$_FILES['image']['size'];  
         //    echo "
         //    <li>File type: ".$_FILES['image']['type'] ;
         // echo"</ul>";
         $root="images/";
         $path = $root.$file_name;
         $_SESSION['path']=$path;
         $short = explode(".",$file_name);
         $alt= $short[0];
         $_SESSION['alt']=$alt;
         // echo "<br> Dit is het pad -> ".$path."<br>";
         

         header('Location: students4.php');
exit;
         ?>
         
		
      
   