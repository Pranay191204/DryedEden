<?php
include("config.php");





  $name = mysqli_real_escape_string($con,trim($_POST['name']));

  $email = mysqli_real_escape_string($con,trim($_POST['email']));
  $course = $_POST['course'];
  $mobileno = strip_tags($_POST['phone']);


  


    $query="INSERT INTO popupform (first_name,email,course,mobile,c_date) VALUES('$name','$email','$course','$mobileno',now())" ;




              if(!mysqli_query($con,$query)) 
              {
               echo "Error on server";
              }
              else
              {
               echo "Thank You!";
              }

  
 
 
?>