<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="asset/bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
	<div class="sidebar_contact">
	<div class="contact_toogle"></div>

	<h3 class="text-center">Contact us </h3>

<div class="scroll">
	<form  id="ajax1" method="post" action="send1.php" role="form"  onsubmit="return formSubmit();" style="border: 1px solid #e6e6e6;padding: 10px;">
          <div class="row form-group">
          
            <div class="col-12 col-md-12"><input type="text" class="form-control" placeholder="Full Name" name="name" pattern="[A-Za-z]{2,15}" title="Name should only contain lowercase letter & Uppercase letter eg.John" required="name"></div>
        </div>
        


        <div class="row form-group">
           
            <div class="col-12 col-md-12"><input type="text" id="text-input" name="email"  class="form-control" 
              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Email" title="Enter Proper email address.. eg.alice@gmail.com" required="email"></div>
         </div>

             
         <div class="row form-group">
       
            <div class="col-12 col-md-12"><input type="tel" class="form-control" placeholder="Mobile No" name="phone" pattern="[789][0-9]{9}" title="Enter 10 digits mobile no only" required="mobileno"></div>
         </div>
		  <div class="row form-group">
          
            <div class="col-12 col-md-12"><input type="text" class="form-control" placeholder="Message" name="name" pattern="[A-Za-z]{2,15}" title="Name should only contain lowercase letter & Uppercase letter eg.John" required="name"></div>
        </div>
         <div class="from-group text-center" >
         	<button type="button" id="sendfed" class="text-center btn btn-success btn-block">Submit</button>
         </div>
            <div id="help"></div>   
        </form>
</div></div>
</body>
</html>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>$(document).ready(function(){ 
$('.contact_toogle').click(function(){
	$('.sidebar_contact').toggleClass('active');
	$('.contact_toogle').toggleClass('active');
})

$('#sendfed').click(function(){
	$.ajax({
    type: 'POST',
    url:'asset/PHPMailer/sendemail.php',
    data:$('#ajax1').serialize(),
    success:function(response)
    {
     $('#help').html(response);
   
    }
  });
  var form = document.getElementById('ajax').reset();
  return false;
  
})

		    });


</script>