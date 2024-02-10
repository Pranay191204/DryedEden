<?php include("include/config.php");?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>DRYAD EDEN RESORT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Fresh Food a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->

<link rel="stylesheet" href="css/easy-responsive-tabs.css"><!-- easy responsive tabs css -->

<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all"><!-- date-picker css-->

<!-- gallery -->
	<link href="css/lsb.css" rel="stylesheet" type="text/css">
<!-- //gallery -->

<!-- banner text effect css files -->
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
<!-- banner text effect css files -->

<!-- logo text effect css files -->
	<link rel="stylesheet" type="text/css" href="css/demo1.css" />
	<link rel="stylesheet" type="text/css" href="css/linkstyles.css" />
<!-- //logo text effect css files -->
	
<!-- default css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- default css files -->
	
<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<!--//web font-->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
<style>
.img{
height:50px;
width:50px;}
a
{
	color: #102454 !important;
}
/*.w3layouts_news_grid_pos{
	height: 350px;
	width: 350px;
}*/
</style>
</head>

<!-- Body -->
<body> 
<audio autoplay>
  <source src="audio/song.mp3" type="audio/mpeg">
</audio> 
<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header">	
				<div class="bs-example">
				    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
				        <!-- Brand and toggle get grouped for better mobile display -->
				        <div class="container">
				            <div class="navbar-header" >
				                <button type="button" class="navbar-toggle float-xs-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" ">
				                    <span class="sr-only">Toggle navigation</span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                </button>
				                <a class="navbar-brand" href="#"><img src="images/logodryad.png" style="height: 50px; width: 50px;padding-bottom: 5px;"></a>
				            </div>
				            <!-- Collect the nav links, forms, and other content for toggling -->
				            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				                <ul class="nav navbar-nav">
				                    <li><a href="#">HOME</a></li>
				                    <li><a href="#about">ABOUT</a></li>
				                    <li class="dropdown">
				                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">PACKAGES <b class="caret"></b></a>
				                        <ul class="dropdown-menu">
				                            <li><a href="card.html">STAY & FOOD</a></li>
				                            <li class="divider"></li>
				                            <li><a href="card1.html">STAY & RAFTING</a></li>
				                        </ul>
				                    </li>
				                    <li><a href="#gallery">GALLERY</a></li>
				                    <li><a href="#contact">CONTACT</a></li>
									 <li><a href="adminmaster/index.php">LOGIN</a></li>
				                </ul>  
				            </div><!-- /.navbar-collapse -->
				        </div>
				    </nav>
				</div>
			</div>
			
			<section class="block">
				<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Open Modal</button> -->
			    <div id="myCarousel" class="carousel slide" >
			        <div class="carousel-inner">
			            <div class="active item" >
			                <img src="images/imggal16.jpeg" alt="Slide1" />
			            </div>
			            <div class="item">
			                <img src="images/slide1.jpg" alt="Slide2" />
			            </div>
			            <div class="item">
			                <img src="images/slide2.jpeg" alt="Slide3" />
			            </div>
			        </div>
			        <a class="carousel-control left" href="#myCarousel" data-slide="prev"> < </a>
			        <a class="carousel-control right" href="#myCarousel" data-slide="next"> > </a>
			    </div>
			</section>
			<script type="text/css">
			$(document).ready(function()
			{
			$("#myCarousel").carousel({
			interval: 2000}) });
			</script>
		</div>
	</div>
<!-- //banner -->
	
<!-- popup for sign up form -->
        <div id="myModal" class="modal fade">
			<div class="modal-dialog">
			    <div class="modal-content">
			        <!-- <div class="modal-header" style="padding: 0px;"></div> -->
			            <div class="modal-body" style="position: relative;padding: 0px;">
			            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			              <img src="images/dryadedencreative2.png" style="margin:0; width: 100%;">
			            </div>
			     </div>
			</div>
		</div>    
<!-- //popup for sign up form -->

<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">DRYAD EDEN</h4>
						<h4>RESORT</h4>
					</div> 
					<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/slide1.jpg" alt="" />
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //modal -->
	
<!-- tabs -->	<!-- about -->
<div class="demo" id="about">    
	<div class="container"> 
		<div class="w3ls-heading">
			<h3>About us</h3>
		</div>
		<div class="horizontalTab" id="horizontalTab">
			<ul class="resp-tabs-list list-group">
				<li class="list-group-item text-center active"></li>
				<li class="list-group-item text-center"></li>
				<li class="list-group-item text-center"></li>
				<li class="list-group-item text-center"></li>
			</ul>
				<div class="resp-tabs-container">
					<!-- section -->
							<div class="bhoechie-tab-content active">
										<h3 class="title">About</h3>
								<div class="services-grids">
									<div class="ser-img">
								<h3>There is nothing quite like a gateway to nature from the hustle of the city.
                                </h3>
										<p>Thankfully, there’s DRYAD EDEN. We have a network of resorts and campsites at handpicked locations that are at best, a stone’s throw away from the city you reside in.</p>
										<p> Mumbai? We have resorts near Mumbai that will take you into a completely different world where birds chirp and the fireflies light up the sky. </p>
										<a href="#myModal" data-toggle="modal"> SnapShot </a>
									</div>
									<div class="ser-img1">
										<img src="images/about.png" alt="" />
									</div>
									<div class="ser-info">
										<p>Our resorts are perfect for small families, school campers, summer camps, corporate picnics and conferences with each resort offering a distinct flavor that is unique to it. </p>
										<p>Have an unforgettable experience with us and realize your true potential for a higher performance - both in your personal and professional lives.</p>
										<p>The destination known for White Water Rafting and a holiday spot for the nature lovers. We're located at Kolad, Raigad, Maharashtra State near the famous Kundalika river rafting.</p>
									</div>
									
									<div class="clearfix"></div>
								</div>
							</div>
							<!--  section -->
							<div class="bhoechie-tab-content" id="food">
										<h3 class="title ab">Our Menu</h3>
								<div class="services-grids">
									<div class="col-md-6 menugrid">
											<img src="images/breakfastimage.jpg" alt="" />
									</div>
									<div class="col-md-6 menugrid1 innergrid">
											<h3>Breakfast</h3>
											<ul class="list ins1">
												<li>&nbsp;&nbsp;&nbsp;&nbsp;Kanda Poha <p></p><span></span></li>
												<li>&nbsp;&nbsp;&nbsp;&nbsp;Shira <p></p><span></span></li>
												<li>&nbsp;&nbsp;&nbsp;&nbsp;Bread-Omlete <p></p><span></span></li>
												<li>&nbsp;&nbsp;&nbsp;&nbsp;Egg Bhurji <p></p><span></span></li>
												<li>&nbsp;&nbsp;&nbsp;&nbsp;Bread Jam <p></p><span></span></li>
												<li>&nbsp;&nbsp;&nbsp;&nbsp;Bread Butter<p></p><span></span></li>
											</ul>
									</div>
									<div class="clearfix"></div>
										<div class="col-md-6 innergrid">
											<h3>Lunch & Dinner</h3>
											<ul class="list ins1">
												<li>&nbsp;&nbsp;&nbsp;&nbsp;Chicken curry  <p></p><span></span></li>
												<li>&nbsp;&nbsp;&nbsp;&nbsp;Butter Chapati <p></p><span></span></li>
												<li>&nbsp;&nbsp;&nbsp;&nbsp;Steamed Rice<p></p><span></span></li>
												<li>&nbsp;&nbsp;&nbsp;&nbsp;Two Veg Sabzi <p>&nbsp;&nbsp;&nbsp;&nbsp;According to the availability of vegetables</p><span></span></li>
												<li>&nbsp;&nbsp;&nbsp;&nbsp;Gulabjamun <p></p><span></span></li>
											</ul>
										</div>
										<div class="col-md-6 menugrid">
											<img src="images/lunchdinner.jpeg" alt="" />
									</div>
										
								<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>		
							<!--  search -->
							<div class="bhoechie-tab-content">
										<h3 class="title ab1">Why Visit Us?</h3>
								<div class="services-grids">
									<div class="about-2">
										<h3>If It Scares You,It Is Probably Worth Giving It A Try!!</h3>
										<img src="images/naturriver.jpg" alt="" />
									</div>
									<div class="about-info2">
										<div class="top-grid">
											<div class="col-md-6 grid">
												<i class="fa fa-ship" aria-hidden="true"></i>
												<h3>River Rafting</h3>
												<p>1) Weekday Package costs around Rs 2300/- per person including food and stay.</p>
												<p>2) Weekend Package costs around Rs 2500/- per person including food and stay.</p>
												
											</div>
											<div class="col-md-6 grid">
												<i class="fa fa-tree" aria-hidden="true"></i>
												<h3>Nature's Door</h3>
												<p></p>
												
											</div>
											<div class="clearfix"></div>
										</div>
									
									</div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
										<h3 class="title ab2">why choose us</h3>
										<br>
								<!--<div class="services-grids">
								<div class="col-md-3 last-grid1">
											<h3>High quality restaurant</h3>
										</div>
									<div class="about-2 lastgrid">
										<h3>OUR MISSION</h3>
										<h3></h3>
										<p>Our mission is to provide the best facilities of pre-defined standard and unique way to get you escape from the dodge and tumble of city life.</p>
										<p>We look forward to provide you with the complete package of resort stay , food and </p>
									</div>
									<div class="about-info2">
									
										<div class="col-md-6 last-grid">
											<img src="images/b11.jpg" alt="" />
										</div>
										
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>-->
								<div class="row">
								<div class="col-md-3 last-grid1">
									<h3>High quality restaurant</h3>
								</div>
								<div class="col-md-6 about-2 lastgrid">
										<h3>OUR MISSION</h3>
										<h3></h3>
										<p>Our mission is to provide the best facilities of pre-defined standard and unique way to get you escape from the dodge and tumble of city life.</p>
										<p>We look forward to provide you with the complete package of resort stay , food and </p>
										</div>
										<div class="col-md-3 last-grid1">
									<img src="images/visitus.jpg" alt="" style="width:247px;height:212px;"/>
								</div>
								</div>
							</div>
				</div>
		</div>
	</div>
</div>

<!-- tabs  js-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>

<!-- //tabs-js  -->

<!-- //tabs -->    <!-- //about -->

	

	
	
<!-- services -->
<div class="services" id="services">
		<div class="container">
			<div class="ser-top wthree-3 wow fadeInDown w3-service-head">
				<h3>Our Services </h3>
			</div>
			<div class="w3-service-grids set-6">
				<div class="col-md-4  services-w3-grid1 ser-left icon1 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-cutlery hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<a href="#food"><h4>Breakfast</h4></a>
					<p></p>
				</div>
				<div class="col-md-4  services-w3-grid1 ser-left icon2 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-spoon hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Lunch</h4>
					<p></p>
				</div>
				<div class="col-md-4 services-w3-grid1 ser-left icon3 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-glass hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Dinner</h4>
					<p></p>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-3 services-w3-grid2 ser-left icon4 hi-icon-wrap hi-icon-effect-6">
						</div>
				<div class="col-md-2 services-w3-grid2 ser-left icon5 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-bed hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Home Stay</h4>
					<p></p>
				</div>
				
				<div class="col-md-6 services-w3-grid2 ser-left icon6 hi-icon-wrap hi-icon-effect-6"  data-wow-duration=".8s" data-wow-delay=".2s">
					<i class="fa fa-ship hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>River Rafting</h4>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>	
		</div>
</div>
<!-- /services -->

<!-- our chefs -->

<!-- //our chefs -->

	
<!-- gallery -->
	<div class="gallery" id="gallery">
			<div class="agileits_w3layouts_head">
			<h3> Gallery</h3>
			</div>
			<?php                       
      $query_prod = sprintf("SELECT * FROM gallery");
        if (!$result_prod = mysqli_query($con,$query_prod)) 
          {
            echo "Error: ".mysqli_error($con);
            exit;
          }
     ?>
     <?php 
          $i = 1;
          while($row_prod = mysqli_fetch_assoc($result_prod))
          {
           if($i==1)
            {?>
            <div class="row">
            
            <?php } ?>
			<div class="w3layouts_gallery_grids">	
				<div class="col-md-3 w3layouts_gallery_grid">
					<a href="adminmaster/images/gallery_img/<?php echo $row_prod['img_name'];?>" class="lsb-preview" data-lsb-group="header">
						<div class="w3layouts_news_grid">
							<img class="img-responsive" src="adminmaster/images/gallery_img/<?php echo $row_prod['img_name'];?>" alt="Card image cap" style="height: 250px;width: 400px;">
							 <div class="w3layouts_news_grid_pos">
								<div class="wthree_text"><h3></h3></div>
							</div>						
						</div>
					</a>
				</div>
			</div>
				<?php  $i++;
            if($i==5) 
            {                ?>
                </div>

              <?php $i=1; 
            }
                 
        }?>
				<div class="clearfix"> </div>
			</div>
			  
</div>
<!-- //gallery -->
<!-- gallery js -->
	<script src="js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
<!-- //gallery js -->

<!-- customer -->
	<div class="customer jarallax" id="customer">
		<div class="agileinfo-dot">
		<div class="container">
			<h3>Testimonials</h3>
			<div class="customer-grids">
				<ul id="flexiselDemo1">			
					<li>
						<div class="customer-grid">
							<p> Lovely Atmosphere, wonderful and helping staff.</p>
							<h4>Ishan Trivedi <span>Recent visitor</span></h4>
						</div>
						<div class="client-img">
							<img src="images/t5.jpg" alt="" />
						</div>
					</li>
					<li>
						<div class="customer-grid">
							<p>Well maintained cottages... had a wonderful experience staying here.</p>
							<h4>Rohan Koria<span>Special customer</span></h4>
						</div>
						<div class="client-img">
							<img src="images/t6.jpg" alt="" />
						</div>
					</li>
					<li>
						<div class="customer-grid">
							<p>River Rafting experience was fabulous,loved the atmosphere.</p>
							<h4>Pranay Joshi <span>Recent visitor</span></h4>
						</div>
						<div class="client-img">
							<img src="images/t4.jpg" alt="" />
						</div>
					</li>
				</ul>
				<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
		</div>
	</div>
</div>
<!-- //customer -->
	
<!-- contact form -->
<div class="contact-w3ls" id="contact">
		<div class="container">
			<h3>contact form</h3>
			<?php 
		
			if(isset($_GET['insert'])){
			$First_Name = mysqli_real_escape_string($con,$_GET['First_Name']);
		
			$email= mysqli_real_escape_string($con,$_GET['Email']);
			
			$mobileno=mysqli_real_escape_string($con,$_GET['mobNumber']);
			
			$message= mysqli_real_escape_string($con,$_GET['Message']);
			
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                 $error_email="<p style='color:red'>Invalid email address.</p>";
              
                } 
            if(!preg_match("/^[a-zA-Z/'/-\040]+$/",$First_Name)) {$error_name="<p style='color:red'>Invalid name</p>";
               
            }
             if(!preg_match("/^[789]\d{9}$/",$mobileno)) {
             $error_mobile="<p style='color:red'>Invalid mobile no.</p>";
          
            } 
			
			echo $First_Name;
			echo '<br>';
			echo $email;
			echo '<br>';
			echo $mobileno;
			echo '<br>';echo $message;
			if(empty($error_email)&& empty($First_Name) && empty($error_mobile)){
				
				
			}else{
				
			}
			
			
			}
			?>
			
			
			
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
					<div class="col-md-5 col-sm-5 contact-left agileits-w3layouts">
					
						<div class="form-control"> 
							<label class="header">Full Name <span>:</span></label>
							<input type="text" name="First_Name" placeholder="Name" required="">
							<?php if(!empty($error_name)){echo $error_name;}?>
						</div>
						
						<div class="form-control"> 
							<label class="header">Email <span>:</span></label>
							<input type="email"  class="email" name="Email" placeholder="Email" required="">
								<?php if(!empty($error_email)){echo $error_email;}?>
						</div>
						
						<div class="form-control">
							<label class="header">Mobile Number <span>:</span></label>
							<input type="text" name="mobNumber" placeholder="Mobile Number" required="">
							<?php if(!empty($error_mobile)){echo $error_mobile;}?>
						</div>	
						<!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
					</div> 
					<div class="col-md-7 col-sm-7 contact-right agileits-w3layouts">
						<div class="form-control">
							<label class="header">Message <span>:</span></label>
							<textarea name="Message" placeholder="Message" required=""></textarea>
							<?php if(!empty($error_email)){echo $error_email;}?>
						</div>	
					<div class="clearfix"> </div> 
					</div>
					<input type="submit" name="insert"  value="Send">
				</form>
		</div>  
	</div>  
<!-- //contact form -->

<!-- map -->
<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242097.78194417138!2d73.04405194950012!3d18.53890103345549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be817f977cd4047%3A0x6fd1af2ca4fe0672!2sDRYAD+EDEN!5e0!3m2!1sen!2sin!4v1544512933131"></iframe>
		<div class="agile_map_grid">
			<div class="agile_map_grid1">
				<h3>Contact Info</h3>
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i><span>address :</span>DRYAD EDEN,Yeral-Kamat Road,Sutarwadi Kolad(MAHARASHTRA)</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><span>email :</span> <a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i><span>call us :</span>08104776827</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //map -->
<!-- footer -->
<div class="footer">
		<!-- <div class="col-md-12 footer-left">
			<h3>DRYAD EDEN</h3>
			<p>Our resorts are perfect for small families, school campers, summer camps, corporate picnics and conferences with each resort offering a distinct flavor that is unique to it.</p>
			<p> We're located at Kolad, Raigad, Maharashtra State near the famous Kundalika river rafting...</p>
		</div> -->
		
		</div>
		<div class="clearfix"></div>
</div>
<!-- //footer -->

<!-- copyright -->
<div class="copyright-agile">
	<p>&copy; 2018 DRYAD EDEN. All rights reserved | Design by MTIS<p>
</div>
<!-- //copyright -->

<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- Date-Picker-JavaScript -->
				<script src="js/jquery-ui.js"></script>
				<script>
					$(function() {
						$( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
					});
					$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

				</script>
<!-- //Date-Picker-JavaScript -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
  function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<!-- banner text effect js file -->
		<script src="js/modernizr.custom.72111.js"></script>
<!-- banner text effect js file -->



</body>
<!-- //Body -->
</html>