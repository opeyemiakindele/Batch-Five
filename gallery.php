<?php
include 'db.php';

if (isset($_REQUEST['email']) && isset($_REQUEST['statecode']) ){
$email = $_REQUEST['email'];
$statecode = $_REQUEST['statecode'];

$resultes = mysqli_query($conn, "SELECT email, statecode FROM nominee WHERE email='$email' OR statecode='$statecode'");
$num_rows = mysqli_num_rows($resultes);

if ($num_rows === 0) {
	$errorser = "Sorry, You were not nominated for the award";
	header ("location:registrations.php?alert=$errorser");
	}

	$cheveris = mysqli_query($conn, "SELECT filename, filedir FROM imagetab WHERE email='$email' OR statecode='$statecode'");
	$imgnum = mysqli_num_rows($cheveris);
	
	
		if ($imgnum == 2 ) {
		header ("Location: registrations.php?success");
			
		}
	
	if (isset($_REQUEST['one_left'])) {
		$one_alert = "<h4 style='color:#d70505;' >Upload one or more image to complete verification</h4>";
			
		}
	
	
}

else (
header ('Location: registrations.php')
)
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
    <title>Gallery - Kwara Corpers Award </title>

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

    <!-- Custom styles for this template -->
	
    <link href="assets/custom/css/business-plate.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/custom/ico/favicon.ico">
	 <link href="assets/custom/css/dropzone.css" rel="stylesheet">
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
           <li><a href="registration.php">Register</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
	</div>
	</div>

    <!-- bannerSection -->
   
    <!-- bannerSection -->
    
		
		
    <!-- bodySection -->
		
		
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						<h2>File Upload</h2>
						<?php
						if ((isset($_REQUEST['one_left']))) {
						echo $one_alert;
						}
						else {
						echo "<p>Only <b>2</b> images (Not more than 2MB each) is allowed  </p>";	
						}
						?>
						
						<div style="height:70px"></div>   
						
						 <form action="upload.php?email=<?php echo $email ?>& statecode=<?php echo $statecode?>"
						  class="dropzone"
						  id="my-awesome-dropzone"></form>
			
						</div>
						
					</div>
					
					<div class="row" style="margin-top:30px;">
						<div class="col-sm-12 ">
						<a href="recheck.php?email=<?php echo $email?>&statecode=<?php  echo $statecode;?>"><button class="btn btn-lg btn-success">Submit</button></a>
						</div>
						
					</div>
					
					
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


<script type="text/javascript" src="assets/custom/js/dropzone.js"></script>

  <script>
  
  Dropzone.options.myAwesomeDropzone = {
  paramName: "file", // The name that will be used to transfer the file
  maxFiles: 2, // MB
  maxFilesize: 2, // MB
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }
};
  
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