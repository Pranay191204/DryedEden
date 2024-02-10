<?php 
$con = mysqli_connect("localhost","root","");
if(!$con)
{
	echo "Error: Connection Not Done..!!";
}
$db =  mysqli_select_db($con ,"dryadeden");
if(!$db)
{
	echo "Error: ".mysqli_error($con);
	exit;
}

?>