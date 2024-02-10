<?php
include("include/config.php");   	
	
   
    $name = $_POST['usname'];
    $password = $_POST['pass'];
	
   $query = sprintf("SELECT * FROM admin WHERE username = '%s' and password = '%s'",$name,$password);
    $result = mysqli_query($con, $query);
    // print_r($result);exit();

    $row = mysqli_fetch_array($result);
    // print_r($row['id']);exit();

    if ($result->num_rows > 0) 
    {
        session_start();
        $_SESSION['user_id']  = $row['id'];
        $_SESSION['username'] = $row['username'];
        
        header("location:home.php");
    } 
    else 
    {
        echo "Incorrect User Name or Password!!! Please enter valid User Name and Password";


        header("location:index.php?flag=not_exist");
    }
?>