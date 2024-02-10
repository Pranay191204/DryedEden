<?php include("include/config.php");

if ($_GET['mode']=='delete' && !empty($_GET['id'])) 
{
	$getfire = "DELETE FROM gallery WHERE id =".$_GET['id']."";
	$getfile = mysqli_query( $con,$getfire);
	if ($getfile) 
	{
		echo 'Images deleted.';
		header("location:add_image.php");
	}
	else 
	{
		echo "error".mysqli_error($con);
	}
}