<?php
include 'db.php';
		
		// Get the Visitor state code
		$statecode = $_REQUEST["statecodemk"];
		
		
		// Get the id for the award category in the voters table
		$sqll = "SELECT DISTINCT * FROM `voters` WHERE statecode='$statecode'";
		$resultt = mysqli_query($conn, $sqll);
		$roww = mysqli_fetch_assoc($resultt);
		$idvoters=$roww["awaid"];
		$idnamers=$roww["name"];
		
		//Confirm the End
		if ( $idvoters == 6){
			echo "<div class='col-sm-12'><br><h1 style='font-size:45px; text-align:center;'>Voting Successful</h1>
			<h3 style='text-align:center;'>Thanks, $idnamers</h3>
		<center><a href ='http://www.swiftawards.com.ng/'><button type='button' class='btn btn-success'>Home</button></a>   <a href ='kca_login.php?unset'><button type='button' class='btn btn-brand'>Log Out</button></a></center>
			<br></div>";
			
		}
		
		else{
		
		// Getthe awardcategry i.e the id for the award category in the voters table
		$sqltab = "SELECT DISTINCT * FROM `awardcat` WHERE id='$idvoters'";
		$resultab = mysqli_query($conn, $sqltab);
		$rowtab = mysqli_fetch_assoc($resultab);
		$awatab=$rowtab["awardcategory"];
		
		
		// Fetch the Nominees table using the award category
		$sqlist = "SELECT DISTINCT * FROM `nomreg` WHERE awardcategory='$awatab'";
		$resultlistnum = mysqli_query($conn, $sqlist);
		$resultlist = mysqli_num_rows($resultlistnum);
		
		echo "<div class='col-md-12'><h2 class='title text-default align-left'>$awatab <button type='button' class='addnew btn btn-danger pull-right'>Skip</button></h2></div>
22121		";
		
		while ($row = mysqli_fetch_assoc($resultlistnum)){
		$idsr=$row["Id"];
		$nomnamer=$row["name"];
		$statecoder=$row["statecode"];
		$emailr=$row["email"];
		$imgname=$row["Imgname"];
		$imgdir=$row["Imgdir"];
		$votesr=$row["votes"];
		?>
		
		
		<div class="col-xs-6 col-sm-6 col-md-4" style="margin-top:20px; margin-bottom:30px;">
		 <div class="ratio img-responsive img-circle" style="background-image: url(<?php echo $imgdir;?>);"
		  id="<?php echo $statecoder;?>" accepted="<?php echo $votesr;?>" ></div>
		<div style="margin-top:20px; text-align:center; font-size:16px;" class="col-md-12">
		<p><b><?php echo $nomnamer; ?></b><br> <small class="nomik"><?php echo $statecoder; ?></small>
		</p>
		</div>
		</div>
		
		<?php
		};
		?>
		
			<?php
		};
		?>
		
		
		
		<script type="text/javascript" language="javascript">
    $(document).ready(function() {
		$(".ratio").bind('click', function( event ){
		$(this).css("border", "6px solid #d70505");
		var attr = $(this).attr("id");
		var vttr = $(this).attr("accepted");
		if(attr != '')
		{
			$.post(
			"updatelist.php",
			{ scodenom: attr,  vcodenom: "<?php echo $statecode;?>",  notenom: vttr, votenom: "<?php echo $idvoters;?>" },
			function(data) {
			var responses = $('#response').html(data);
			}
			);
			}
		
		});
		
		$(".addnew").bind('click', function( event ){
			
			$.post(
			"skip.php",
			{ vcodenom: "<?php echo $statecode;?>" },
			function(data) {
			var responses = $('#response').html(data);
			}
			);
			});
			
			
			
			$(".ratio").bind('mouseenter', function( event ){
			$(this).fadeTo(500, 0.5);
			});
		
		$(".ratio").bind('mouseleave', function( event ){
			$(this).fadeTo(500, 1);
			});
		
    });
</script>