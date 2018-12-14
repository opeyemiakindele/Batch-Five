<?php
		 include 'db.php';
		 session_start();
		 if(!isset($_REQUEST["hash"])){
			
			header ("location:kca_login.php");
			
		 }
		 
		 else{
			 
			if(isset($_REQUEST['email']) && isset($_REQUEST['hash'])){
			$idbv = $_REQUEST["hash"];
			
			$after = substr($idbv,7);
			$before = substr($idbv, 0,7);
			$adds = (($after - 47)/(58403));
			if(strlen($adds)==1){
				$ats = "000";
				$idx = "{$before}{$ats}{$adds}";
			}
			elseif(strlen($adds)==2){
				$ats = "00";
				$idx = "{$before}{$ats}{$adds}";
			}
			elseif(strlen($adds)==3){
				$ats = "0";
				$idx = "{$before}{$ats}{$adds}";
			}
			else{
			$idx = "{$before}{$adds}";
			}
			
			 $sqls = "SELECT DISTINCT * FROM `voters` WHERE statecode='$idx'";
		$resultsw = mysqli_query($conn, $sqls);
		$rowaw = mysqli_num_rows($resultsw);
		
		
		if ($rowaw > 0){
			$rowaw = mysqli_fetch_assoc($resultsw);
		$idses = $rowaw['id'];
		$awaids = $rowaw['awaid'];
		}
		
		else {
			header ("location:kca_login.php");
		}
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
    <meta name="description" content="Vote | Kwara Corpers Award">
    <meta name="author" content="SwiftTV">
    <title>Kwara Corpers Award </title>

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
	<link rel="stylesheet" href="assets/custom/css/customstyles.css" type="text/css">
	<link rel="stylesheet" href="assets/custom/css/bottlegrid.css" type="text/css">
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
            <li class="active"><a href="http://swiftawards.com.ng/">Home</a></li>
            <li><a href="vote.php">Vote</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
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
					<p><img src="assets/custom/img/Mock1.png" width="180px" alt="Swift Tv" /></p>
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
				
			<h2 class="title text-danger align-right">How to Vote</h2>

				<p class="align-left">
				To vote for your Nominee for an Award Category. The system will 
				provide a list of the Nominee qualified for the <b>each</b> Award Category. Select your favorite nominee by <b>clicking</b>
				on the nominee photo. Note: You can vote <b>just</b> once.
						</p>
			
				
		</div>
		</div>
		</div>
		<br />
				
						<div class="container">
						<div id="fetcher" class="row">
						
						</div><!--/.row -->
						</div><!--/.container -->
						
						 <div class="ratioers"></div>
						 <div class="notification"></div>
	
	<div class="container">
				<div class="row">
				<div class="col-md-12">
				
			<h2 class="title text-danger align-left"><b>Voting Process</b></h2>

						<p class="align-left">
						This edition of Awards Ceremony will cover 2016 <b>BATCH B</b> of Serving CORPS  MEMBERS in the state.
						Nomination process will ends on July 2017 and voting starts on September and the entries 

						will be shortlisted for Voting process after nomination has been accepted by 
						the nominee. The non-voting category will be judged by an independent panel of  experts for each category. 

						Winners will not be announced until the night of the award ceremony in order to bring out the surprise element on the night.

						Kwara State Corpers Awards 2017 will be prestigious with a real focus on outstanding 
						Corps Members and firms/individuals that have played a successful role to the success 
						of the NYSC scheme.
						</p>
			
				
		</div>
		</div>
		</div>
		<br />
	
	
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
					<form class="form-inline" role="form">
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
					Voting opens<br>
					<strong>this September </strong><a href="vote.php"> here</a></p>
				<p>
					
					Check our <strong>Instagram</strong><a href="https://www.instagram.com/swifttvng"> page</a> for more.
				</p>
				
			  </div>
			  <div class="col-md-3">
				<h3>Pages</h3>
				<p>
					<span>You might want to check out other pages in the website here</span><br><br>
					<a href="#" data-toggle="modal" data-target="#t_and_c_m">Vote</a><br>
					<a href="#">Contact Us</a><br>
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
			<div class="pull-right"> Designed and developed by <a href="instagram.com/inspirationmedia" style="color:white;"><b>Inspirationmedia</b> </a></div>
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



<script type="text/javascript" language="javascript">
   $(document).ready(function()
    {
        $.ajaxSetup(
        {
            cache: false,
            beforeSend: function() {
                $('#fetcher').fadeOut('slow');
                $('#loading').fadeIn('slow');
            },
            complete: function() {
                $('#loading').fadeOut('slow');
                
            },
            success: function() {
                $('#loading').fadeOut('slow');
                $('#fetcher').fadeIn('slow');
            }
        });
        var $container = $("#fetcher");
        $container.load("updates.php?statecodemk=<?php echo $idx;?>");
       
		$('#fetcher').bind('click', function( event ){
	   var refreshId = setTimeout(function()
        {
            $container.load("updates.php?statecodemk=<?php echo $idx;?>");
        }, 700);
		
    }); 
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