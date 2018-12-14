<?php
include 'db.php';
if (isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['statecode']) && isset($_REQUEST['phoneno']) && isset($_REQUEST['awacategory'])) {
$names = $_GET['name'];
$emails = $_GET['email'];
$statecodes = $_GET['statecode'];
$phonenos = $_GET['phoneno'];
$awacategoryss = $_GET['awacategory'];
}
else {
header ("location:registration.php");	
}
?>

<?php
				if(isset($_POST['submits'])){
					include 'db.php';
					$target_dir = "assets/custom/img/";
					$target_file = $target_dir . basename($_FILES["imges"]["name"]);
					$imgesname = $_FILES["imges"]["name"];
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					$imageFileTypes = mb_strtolower($imageFileType, 'UTF-8');
					
				$resultes = mysqli_query($conn, "SELECT email, statecode FROM corp WHERE email='$emails' OR statecode='$statecodes'");
				$num_rows = mysqli_num_rows($resultes);
				
				
				$cheveri = mysqli_query($conn, "SELECT email, statecode FROM nomreg WHERE email='$emails' OR statecode='$statecodes'");
				$num_veri = mysqli_num_rows($cheveri);
				
				if ($num_rows > 0) {
	$check = getimagesize($_FILES["imges"]["tmp_name"]);
    if ($num_veri > 0) {
    $errorver = "Your details have been registered already.";
    }
	
	elseif($check == false) {
       $errorver = "File is <font color='red'>not</font> an image - " . $check["mime"] . ".";
    }
	
	elseif (file_exists($target_file)) {
    $errorver = "Sorry, image already exists.";
    }
	
	elseif ($_FILES["imges"]["size"] > 100000000) {
   $errorver = "Sorry, your image is too large.";
	}
			elseif($imageFileTypes != "jpg" && $imageFileTypes != "png" && $imageFileTypes != "jpeg"
			&& $imageFileTypes != "gif" ) {
			$errorver = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}
	else{
		if (move_uploaded_file($_FILES["imges"]["tmp_name"], $target_file)) {
			mysqli_query($conn, "INSERT INTO `nomreg` VALUES('','$names','$emails','$statecodes','$awacategoryss','$phonenos','$imgesname','$target_file')");
			$finalver = 1;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	}
				}
				
				else {
			header ("location:registration.php");
				}
				
				
				}
				
				
				?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Swift Tv, Kwara Corpers Award, Inspiration Media">
    <meta name="description" content="Nominees Verification | Kwara Corpers Award">
    <meta name="author" content="SwiftTV">
    <title>Verify - Kwara Corpers Award </title>

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
           <li><a href="registration.php">Register</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
	</div>
	</div>

    <!-- bannerSection -->
   
    <!-- highlightSection -->
   
    <div class="bannerSection">
		<div class="slider-inner">
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2><i>KWARA</i> <br> <i>Corpers </i> <br> <i>Award 2017</i></h2>
					<p><i>Who is going</i> <br> <i>to be our face</i> <br> <i>of Kwara Corper?</i></p>
					<div class="da-img"><img src="assets/custom/img/awardas.png" alt="" /></div>
				</div>
				
				<div class="da-slide">
					<h2><i>Brought</i> <br> <i>to you </i> <br> <i>by Swift tv</i></h2>
					<p><i>HD visual view</i> <br> <i>in all telecommunications worldwide</i> <br> <i>Modern and High Standard</i></p>
					<div class="da-img"><img src="assets/custom/img/swiftttv.png" alt="" /></div>
				</div>
				
				
				
				<div class="da-slide">
					<h2><i>Visit our Instagram</i> <br> <i>Page @swifttv</i></h2>
					<p><i>Follow and Suscribe</i> <br> <i>on IG and Youtube for more</i></p>
					<div class="da-img">
							
					</div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>		
				</nav>
			</div><!--/da-slider-->
		</div><!--/slider-->
		<!--=== End Slider ===-->


	</div>
   
		
    <!-- bodySection -->
		
		<div class="container">
				<div class="row">
				<div class="col-md-12">
				<h2 class="title">Upload <small>Your Picture</small></h2>
				
				<div  style="height:07px;" class="progress progress-striped active">
				<div class="progress-bar progress-bar-success" role="progressbar"
				aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
				style="width: 100%;">
				<span class="sr-only">100% Complete</span>
				</div>
				</div>
				
				</div>
				</div>
				</div><br>
		
		
		<div class="container">
				<div class="row">
				<div class="col-sm-offset-2 col-sm-9">
				<div id='redirect' class='well well-md'><font color='#d70605'><b>
				<?php if(isset($finalver)){ 
				echo $finalver;
				 }
				 elseif(isset($errorver)){ 
				echo $errorver;
				 }
				 ?>
				 </b></font></div>
			
			<div class="row">
				<div class="col-md-12">
			<img src="assets/custom/img/default-user.png" alt="User Image" class="img-circle img-responsive cener-block" width="200px"
			height="200px">
			</div>
			</div><br>
				
			<form role="form" action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
			<div class="form-group center-block">
			<label for="name">Upload Picture</label>
			<input type="file" name="imges" required>
			</div>


			<button type="submit" name="submits" class="btn btn-brand">Upload</button>
			</form>
				
				
			
				</div>
				</div>
				</div><br>
				
				
				
	
	
    <!-- footerTopSection -->
    <div class="footerTopSection">
		<div class="container">
			<div class="row">
			  <div class="col-md-3">
				<h3>About </h3>
				<p>
				We deliver entertainment<br>
				<strong> at its peak</strong>
				</p>
				
				<h3>Newsletter</h3>
				<p>Register your email to get updates from Swifttv</p>
				<div>
					<form class="form-inline" id="myNom" role="form">
					  <div class="form-group">
						<label class="sr-only" for="exampleInputEmail2">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
					  </div>
					  <button type="submit" class="btn btn-brand">Subscribe</button>
					</form>
				</div>
				
			  </div>
			  <div class="col-md-3">
				<h3>Latest Updates </h3>
				<p>
					Nomination opens<br>
					<strong>this July </strong>. Register<a href="registration.php"> here</a></p>
				<p>
					
					Check our <strong>Instagram</strong><a href="https://www.instagram.com/swifttvng"> page</a> for more.
				</p>
				
			  </div>
			  <div class="col-md-3">
				<h3>Pages</h3>
				<p>
					<span>You might want to check out other pages in the website here</span><br><br>
					
					<a href="registration.php">Register</a><br>
					<a href="#" data-toggle="modal" data-target="#t_and_c_m">Vote</a><br>
					<a href="contact.html">Contact Us</a><br>
				</p>
				<h3>Contact Us</h3>
				<p>
					<img src="assets/custom/img/phone.jpg" width="17px" height="17px"></img> <em>07010000220</em><br />
					Email: producer@swiftawards.com.ng
				</p>
				
			  </div>
			  <div class="col-md-3">
				<h3>Find us</h3>
				<p>
					<strong>Swift Entertainment</strong><br>
					No 4, Aseyori street, Kumapayi, Olodo Ibadan<br>
					Oyo state Nigeria<br>
					
				</p>
				<h3>Stay Connected</h3>
				<p>
					We are available at all social networks
				</p>
					<a href="http://www.facebook.com/swifttvng/"><img src="assets/custom/img/fblogo.png" width="32px" height="32px"></img></a>
					<a href="http://www.youtube.com/swifttvng/"><img src="assets/custom/img/youtube-logo.png" width="25px" height="25px"></img></a>
					<a href="http://www.instagram.com/swifttvng/"><img src="assets/custom/img/ig.jpg" width="30px" height="30px"></img></a><br>
					
			  </div>
			</div>
		</div>
	</div>  <!-- footerTopSection -->
       
	
    <!-- footerBottomSection -->	
	<div class="footerBottomSection">
		<div class="container">
			&copy; 2017, All right reserved. <a href="#">Terms and Condition</a> | Privacy Policy 
			<div class="pull-right"> Designed and developed by <a href="instagram.com/inspirationmedia">Inspirationmedia </a></div>
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



<script type="text/javascript">
    $(document).ready(function() {
      var grove  = $("#redirect").text();
      if (grove  == 1){
       var url = "http://swiftawards.com.ng/regsuccess.php";    
$(location).attr('href',url);
      }
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