<?php
include("include/config.php");
  $name       = $_POST['full_name'];
  $email      = $_POST['email'];
  $message    = $_POST['message'];
  $mobileno   = $_POST['mob_no'];
 /* $message1 = mysqli_real_escape_string($con,trim($_POST['message1']));*/
  

    $query="INSERT INTO contact (full_name,email,mob_no,message,enquiry_date) 
            VALUES('$name','$email','$mobileno','$message',now())" ;
          /*print_r($query);*/
              if(!mysqli_query($con,$query)) 
              {
               echo "Error on server"; 
              }
              else
              {
               header("location:index.php");
              }

  
 
 
?>