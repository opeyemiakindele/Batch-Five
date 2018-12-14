<?php
include 'db.php';
		
			if(isset($_REQUEST["alert"])){
			$error = $_REQUEST["alert"];
			$err = "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Your account has already been registered <br /> <a href='kca_login.php'>Login</a> </div>";
			}
			
			
			else{
				$err = "";
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
	<link rel="stylesheet" href="assets/custom/css/userslist.css" type="text/css">

    <!-- Custom styles for this template -->
	
    <link href="assets/custom/css/business-plate.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/custom/ico/favicon.ico">
  </head>
<!-- NAVBAR
================================================== -->
  <body style="background-color:#264397;">
	
	
  
		
    <!-- bodySection -->
		

		
				<div class="container">
				<div class="row" style="margin-top:80px;;">
				<div class="col-md-offset-3 col-md-5">
				<h1 style="color:#efefef;"><b>Sign Up</b></h1>
				<div class="row">
				
			</div><br>
				
			
			<?php echo $err; ?>
			<form role="form" action="kca_emr.php" method="POST">
			<div class="form-group">
			
			<input type="text" class="form-control" name="name" id="name"
			placeholder="Enter Name" style="height:53px;" required>
			<small id="namecon"></small>
			</div>
			
			
			<div class="form-group">
			
			<input type="text" class="form-control" name="statecode" id="statecode"
			placeholder="State Code" style="height:53px;" required>
			
			</div>
			
			<div class="form-group">
			
			<input type="email" class="form-control" name="email"
			placeholder="Email Address" style="height:53px;" required>
			</div>
			
			<button type="submit" id="submit" name="submit" class="btn btn-lg btn-success">Sign Up</button>
			<a href="kca_login.php"><small style="color:white; margin-left:15px;">Login</small></a>
			</form>
				
				
			
				</div>
				</div>
				</div><br>
				
				
			<div id="hello"></div>	
				
	
	
    <!-- footerTopSection -->
     <!-- footerTopSection -->
       
	
    <!-- footerBottomSection -->	

	
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
		alert("Fill these details before proceeding to the voting page");
		$('input#name').bind('keyup', function( event ){
		
		var txts = $(this).val().length;
		if ( txts<10 ){
		$("#name").css({"border":"2px solid #b90318"});
		} 
		
		else if ( txts>40 ){
		$("#name").css({"border":"2px solid #b90318"});
		}
		
		
		else{
			$("#name").css({"border":"2px solid green"});
			}
     });
	 
	                               
	 $('input#statecode').bind('keyup', function( event ){
		var txta = $(this).val()
		var txtb = txta.substring(7, 11);
		var txt = txta.length;
	 if ( (txt!=11) || ($.isNumeric(txtb)==false) || (txtb>5001)){
		$("#statecode").css({"border":"2px solid #b90318"});
		$("button#submit").fadeTo(350, 0.65);
		$("form").attr({action: "#"});
		}
		else{
			$("#statecode").css({"border":"2px solid green"});
			$("button#submit").fadeTo(350, 1);
		$("form").attr({action: "kca_emr.php"});
		}
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
</html>