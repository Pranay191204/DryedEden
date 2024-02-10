<?php 
include("include/config.php");


if(isset($_FILES['gallery_img']['name']))
{
	$img = $_FILES['gallery_img']['name'];
	if(move_uploaded_file($_FILES['gallery_img']['tmp_name'], 'images/gallery_img/'.$_FILES['gallery_img']['name']))
	{  
		$getfire = "INSERT INTO gallery (img_name,img_created) VALUES ('$img',now())";
					if($getfire=mysqli_query($con,$getfire))
					{
						echo '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Successfully insert images</div>';
						header("location:add_image.php");
					}
					else
					{ echo '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Unable to upload images plz try again</div>';
						
					}

	}
		else
		{ 		echo '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Somthing error in file</div>';
			
		}
}
/*
if (isset($_GET['status'])) {
$getup = "UPDATE gallery set img_status= 1 WHERE id ='".$_GET['status']."'";
if (mysqli_query($con,$getup)) {
	echo "SHOW";
}
}*/

if (isset($_GET['id'])) {
$getup = "UPDATE gellery set img_status= 0 WHERE id ='".$_GET['sta']."'";
if (mysqli_query($con,$getup)) {
	echo "HIDE";
}
}
?>