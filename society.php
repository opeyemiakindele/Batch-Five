<?php
include 'db.php';
if (isset($_GET['alert'])){
	
$alerts = $_GET['alert'];
$alertes = "<div class='well well-lg'><font color='#d70605'>*<b>$alerts</b></font></div>";

}
elseif (isset($_GET['success'])){
	
	$alerts = $_GET['success'];
$alertes = "<div class='well well-lg'><font color='green'><b>$alerts</b></font></div>";
	
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
    <meta name="description" content="">
    <meta name="author" content="">
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
            <li class="active"><a href="http://swiftawards.com.ng ">Home</a></li>
            <li><a href="nominate.php">Nominate</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
	</div>
	</div>

    <!-- bannerSection -->
   
    <!-- highlightSection -->
   
		
    <!-- bodySection -->
		<div class="serviceBlock">
		<div class="container">
				<div class="row">
					<div class=" col-md-offset-1 col-md-8">
					<h2 class="text-danger"><b>Nominate (Society)</b></h2>
					</div>
					</div>
					</div>
					<hr>
					
					
					
					
					
					
					
					<div class="container">
				<div class="row">
					<div class=" col-md-offset-2 col-md-8">
					
					
					<?php echo $alertes;?>
					

										
				<form class="form-horizontal" role="form" action="socieprocess.php" method="POST">
									
						<div class="row">
					<div class="col-md-12">
					<h3><b>Nominee Information</b></h3>
					</div>
					</div>			
									
					<div class="form-group">
					<label for="nomineename" class="col-sm-2 control-label">Nominee Name</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="nomname" id="nomineename"
					placeholder="Enter Nominee Name" style="height:41px;" required>
					</div>
					</div>
					
					<div class="form-group">
					<label for="nomineename" class="col-sm-2 control-label">Award Categories</label>
					<div class="col-sm-10">
					<select class="form-control" name="awacategory">
					
						
						<option>Most Accommodating LGI (Ilorin)	(Voting Category)</option>
						<option>Favorite Youth Hang out Spot (Voting Category)</option>
						<option>Best customer service bank of the year (Voting Category)</option>
						<option>Bank of the year (Non- Voting Category)</option>
						<option>Best Mall/Supermarket (Non- Voting Category)</option>

						
						
						
						
						
					
					</select>
					</div>
					</div>
					
					
					<div class="form-group">
					<label for="nomineename" class="col-sm-2 control-label">Details</label>
					<div class="col-sm-10">
					<textarea class="form-control" rows="3" name="details" placeholder="E.g Address and Phone No"></textarea>
					</div>
					</div>
					
					<div class="row">
					<div class="col-md-12">
					<h3><b>Nominator Information</b></h3>
					</div>
					</div>
					
					<div class="form-group">
					<label for="lastname" class="col-sm-2 control-label">Nominators Name</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" name="username"id="lastname"
					placeholder="*6 characters minimum" style="height:41px;" required>
					</div>
					</div>
					
					<div class="form-group">
					<label class="col-sm-2 control-label">State Code</label>
					<div class="col-sm-10">
					<input class="form-control" name="statecode" type="text"
					value="KW/16B/" style="height:41px;" required>
					</div>
					</div>
					
					
					<div class="form-group">
					<label for="lastname" class="col-sm-2 control-label">Phone No</label>
					<div class="col-sm-10">
					<input type="number" class="form-control" name="phoneno" id="lastname" size="13"
					placeholder="234 XXX XXX XXXX" style="height:41px;" required>
					</div>
					</div>
					
					<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
					<input type="email" class="form-control" name="email" id="email"
					placeholder="yourname@xxxx.com" style="height:41px;" required>
					</div>
					</div>
					
					<input type="hidden" name="date" value="<?php print date("j  F Y");?>" />
					
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
					<label>
					<input type="checkbox"> <p class="text-danger">I agree with the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a></p>
					</label>
					</div>
					</div>
					</div>
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-danger">Nominate</button>
					</div>
					</div>
					</form>
					
					
					</div>
				</div>

					
					<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>This edition of Awards Ceremony will cover 2017 <b>BATCH B</b> of Serving CORPS  MEMBERS in the state <b>only</b>.<br> Nomination process will start on July 2017 and the entries 

						will be shortlisted for Voting process after nomination has been accepted by 
						the nominee. The non-voting category will be judged by an independent panel of  experts for each category. 

						Winners are not announced until the night of the award ceremony in order to bring out the surprise element on the night.

						Kwara State Corpers Awards 2017 will be prestigious with a real focus on outstanding 
						Corps Members and firms/individuals that have played a successful role to the success 
						of the NYSC scheme.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

       
		
		<div class="container">
		<div class="row">
		<br>
		<br>
		</div>
		</div>
		
		<div class="container">
		<div class="row">
			<div class="col-md-4"> 
				<h3 class="title">About the award</h3>
				<p>
					Kwara Corpers Awards will present awards in the 
					following categories:
									</p>
				<ul>
						<li>Most Accommodating LGI (Ilorin)	(Voting Category)</li>
						<li>Favorite Youth Hang out Spot (Voting Category)</li>
						<li>Best customer service bank of the year (Voting Category)</li>
						<li>Bank of the year (Non- Voting Category)</li>	
						<li>Best Mall/Supermarket (Non- Voting Category)</li>
				</ul>
				
			</div>
			<div class="col-md-8">
			<div class="projectList">
				<h3 class="title">Our Mission</h3>
				<div class="media">
				  
				  <div class="media-body">
					<h4 class="media-heading"><a href="#">Mission One</a></h4>
					<p>
						To show appreciation and gratitude for each person’s good work.<br>
						It makes people to be aware that good work will be rewarded showing examples 
						to incoming corps members.
						</p>
					
				  </div>
				</div>
				
				<div class="media">
				  
				  <div class="media-body">
					<h4 class="media-heading"><a href="#">Mission Two</a></h4>
					<p>It is an avenue to create the chance for celebration and reflection of success and 
					unity. <br>Recognition will make people to do more. 
					</p>
					
				  </div>
				</div>
				<div class="media">
				  
				  <div class="media-body">
					<h4 class="media-heading"><a href="#">Mission Three</a></h4>
					<p>
						It makes people to be aware that good work will be rewarded showing examples 
						to incoming corps members.
						</p>
					
				  </div>
				</div>	
				<hr>
				
				<div class="media">
				 
				  <div class="media-body">
					<h4 class="media-heading"><a href="#">What is the process?</a></h4>
					<p>
												This edition of Awards Ceremony will cover 2017 <b>BATCH B</b> of Serving CORPS  MEMBERS in the state. Nomination process will start on July 2017 and the entries 

						will be shortlisted for Voting process after nomination has been accepted by 
						the nominee. The non-voting category will be judged by an independent panel of  experts for each category. 

						Winners will not announced until the night of the award ceremony in order to bring out the surprise element on the night.

						Kwara State Corpers Awards 2017 will be prestigious with a real focus on outstanding 
						Corps Members and firms/individuals that have played a successful role to the success 
						of the NYSC scheme.
</p>
					
				  </div>
				</div>		
				

			</div>
			</div>
		</div>
		</div>
	</div>
	</div>
				
		
	
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
					Nomination opens<br>
					<strong>this July </strong>. Nominate<a href="nominate.php"> here</a>
				<p>
					
					Check our <strong>Instagram</strong><a href="https://www.instagram.com/swifttvng"> page</a> for more.
				</p>
				
			  </div>
			  <div class="col-md-3">
				<h3>Pages</h3>
				<p>
					<span>You might want to check out other pages in the website here</span><br><br>
					
					<a href="nominate.php">Nominate</a><br>
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
	</div>
	
			
					<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Not available</h4>
			</div>
			<div class="modal-body">
				<p>Contact the Admin for more info </p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

       
	
	
	
    <!-- footerBottomSection -->	
	<div class="footerBottomSection">
		<div class="container">
			&copy; 2017, All right reserved. <a href="#">Terms and Condition</a> | Privacy Policy</a> 
			<div class="pull-right"> Designed and Developed by <a href="https://www.instagram.com/inspirationmedia">Inspirationmedia </a></div>
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
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
    });
</script>


	</body>
</html>