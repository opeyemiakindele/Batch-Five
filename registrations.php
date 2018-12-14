<?php
include 'db.php';
if (isset($_GET['alert'])){
	
$alerts = $_GET['alert'];
$alertes = "<div class='well well-md'><font color='#d70605'><b>$alerts</b></font></div>";

}
elseif (isset($_GET['success'])){
	
	$alerts = $_GET['success'];
$alertes = "<div class='well well-md'><font color='#d70605'><b>$alerts</b></font></div>";
	
}
else {
$alertes="";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Swift Tv, Kwara Corpers Award, Inspiration Media">
    <meta name="description" content="Kwara Corpers Award">
    <meta name="author" content="SwiftTV">
    <title>Verifications - Kwara Corpers Award </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="themes/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/custom/css/flexslider.css" type="text/css" media="screen">    	
    <link rel="stylesheet" href="assets/custom/css/parallax-slider.css" type="text/css">
    <link rel="stylesheet" href="assets/font-awesome-4.0.3/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="assets/custom/css/userslist.css" type="text/css">

    <!-- Custom styles for this template -->
	
    <link href="assets/custom/css/business-plate.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/custom/ico/favicon.ico">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
	
	
    <!-- topHeaderSection -->	
    <div class="topHeaderSection">		
    <div class="header">			
		<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="assets/custom/img/swifttv.png" alt="swifttv" /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="http://swiftawards.com.ng">Home</a></li>
           <li><a href="registrations.php">Verification</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
	</div>
	</div>

    <!-- bannerSection -->
   
    <!-- bannerSection -->
    
		
		
		<style>
					.form-group {
					margin-bottom:20px;
					margin-top:20px;
					}
					
					.form-group input, .form-group select{
					height:50px;
					border:none;
					border-bottom:1px solid black;
					border-radius:1px;
					box-shadow:none;
					
					}
					
					.form-group input:hover, .form-group input:focus, .form-group select:hover{
					border-bottom:1px solid #d70505;
					box-shadow:none;
					}
					
					.btn-swift{
						background-color:#d70505;
						color:white;
						
					}
					
					</style>
		
    <!-- bodySection -->
		
		
						<div class="container viewphp">
				<div style="height:40px;"></div>	
					<?php 
					if (isset($_REQUEST['alert'])){
						$alert = $_REQUEST['alert'];
						echo "<div class='alert alert-info'>$alert</div>";
					}
					elseif(isset($_REQUEST['error'])){
						echo "<div class='alert alert-danger'>Nomination Failed. Please Try again.</div>";
					}
					
					elseif (isset($_REQUEST['success'])){
						echo "<div class='alert alert-success'>Verification Successful. Confirmation message has been sent to your email.</div>";
					}
					
					?>
				
			<form role="form" action="registerform.php" method="POST">
			
			
					
				<div class="row">
				<div class="col-md-offset-3 col-xs-offset-1 col-sm-offset-1 col-xs-10 col-sm-10 col-md-6">
				<h3 style="color:#d70505"><b>Nominee Verification</b></h3>
				
			
			<div class="form-group">
			<input type="text" data-validation="length" data-validation-length="min6" class="form-control" name="name"
			placeholder="Enter Name" >
			</div>
			
				<div class="form-group">
					<select class="form-control" name="nomcat" data-validation="required">
					
						<option value="">Award Categories</option>
						<option>Face of Kwara Corps Member Female</option>
						<option>Face of Kwara Corps Member Male</option>
						<option>Best CDS President</option>
						<option>Most active CDS Group</option>
						<option>Perfect Gentleman</option>
						<option>Most Influential Female</option>
						<option>Most Influential Male</option>
						<option>Most active CLO</option>
						<option>Miss. Ebony </option>
						<option>Most Fashionable Female</option>
						<option>Most Fashionable Male</option>
						<option>Most Sophisticated Female</option>
						<option>Most Sophisticated Male</option>
						<option>Bank of the year</option>
						<option>Most Popular Female</option>
						<option>Most Popular Male)</option>
						<option>Big, Bold and Beautiful</option>
						<option>Entertainer of the year</option>
						<option>Videographer/Photographer of the year</option>
						<option>Fashion Designer of the year</option>
						<option>Most Creative Corps member</option>
						<option>Most Creative Corps member</option>
						<option>Most Enterprising Corps member</option>
						

						
					</select>
					</div>
					
			<div class="form-group">
			<input type="text" data-validation="length" data-validation-length="11" class="form-control" name="statecode"
			placeholder="KW/16A/" >
			</div>
					
			<div class="form-group">
			<input type="email" data-validation="email" class="form-control" name="email"
			placeholder="Email Address" >
			</div>
					

			<div class="form-group">
			<input type="number" data-validation="length" data-validation-length="13" class="form-control" name="phoneno"
			placeholder="234 XXX XXX XXXX" >
			</div>
			
			 <div class="checkbox"> 
			<label> 
			<input type="checkbox"> Terms and Condition 
			</label> 
			</div> <br>
			<button type="submit" class="btn btn-md btn-default btn-swift">Submit</button>
			
			
			</div>
			</div>
				
					
				</form>
				</div>
				
				
				<div style="height:40px;"></div>
				

				<style>
				.footerTopSection a{
					color:#858585;
				}
				</style>
	
	
    <!-- footerTopSection -->
    <div class="footerTopSection">
		<div class="container">
			<div class="row">
			  <div class="col-md-3 col-sm-6 col-xs-6">
				<h3>About </h3>
				<p>
				We deliver entertainment<br>
				<strong> at its peak</strong>
				</p>
				
				
				
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-6">
				<h3>Latest Updates </h3>
				<p>
					Nomination is on. Click<a href="registration.php"> here</a></p>
				<p>
					
					Visit our IG page @swifttvng.
				</p>
				
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-6">
				<h3>Pages</h3>
				<p>
					
					<a href="registration.php">Register</a><br>
					<a href="#" data-toggle="modal" data-target="#t_and_c_m">Vote</a><br>
					<a href="contact.html">Contact Us</a><br>
				</p>
				
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-6">
				<h3>Find us</h3>
				<p>
					<strong>Swift Entertainment</strong><br>
					No 4, Aseyori street, Kumapayi, Olodo Ibadan,
					Oyo state Nigeria.<br>
					
				</p>
				<a href="http://www.facebook.com/swifttvng/"><i class="fa fa-facebook"></i></a>&nbsp;
					<a href="http://www.youtube.com/swifttvng/"><i class="fa fa-youtube"></i></a>&nbsp;
					<a href="http://www.instagram.com/swifttvng/"><i class="fa fa-instagram"></i></a><br>
					<p>07010000220 | producer@swiftawards.com.ng</p>
					
			  </div>
			</div>
		</div>
	</div>  <!-- footerTopSection -->
       
	
    <!-- footerBottomSection -->	
	<div class="footerBottomSection">
		<div class="container">
			&copy; 2018, All right reserved. 
			<div class="pull-right"> Developed by <a href="http://www.instagram.com/inspirationmedia/" style="color:white;">Inspiration Media</a></div>
		</div>
	</div>
	
<!-- JS Global Compulsory -->			
<script type="text/javascript" src="assets/custom/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="assets/custom/js/modernizr.custom.js"></script>		
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>	
	
	<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/custom/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/custom/js/modernizr.js"></script>
<script type="text/javascript" src="assets/custom/js/jquery.cslider.js"></script> 
<script type="text/javascript" src="assets/custom/js/back-to-top.js"></script>
<script type="text/javascript" src="assets/custom/js/jquery.sticky.js"></script>


<!-- JS Page Level -->           
<script type="text/javascript" src="assets/custom/js/app.js"></script>
<script type="text/javascript" src="assets/custom/js/index.js"></script>

<!-- Form Validator --> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
 
<script>
  $.validate({
    lang: 'en'
  });
</script>


<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
    });
</script>

</body>
</html>
</html>