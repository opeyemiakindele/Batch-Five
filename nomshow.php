<?php

include 'db.php';
					$sqlist = "SELECT DISTINCT * FROM `nomreg`";
		$resultlistnum = mysqli_query($conn, $sqlist);
		$resultlist = mysqli_num_rows($resultlistnum);
		
		while ($row = mysqli_fetch_assoc($resultlistnum)){
		$idsr=$row["Id"];
		$nomnamer=$row["name"];
		$statecoder=$row["statecode"];
		$awatab=$row["Awardcategory"];
		$emailr=$row["email"];
		$imgname=$row["Imgname"];
		$imgdir=$row["Imgdir"];
		$votesr=$row["votes"];	
		?>			
						
						
				<div class="col-xs-6 col-sm-6 col-md-4" style="margin-top:20px; margin-bottom:40px;">
		 <div class="ratio img-responsive img-circle" style="background-image: url(<?php echo $imgdir;?>);" alt="SwiftTV"></div>
		<div style="margin-top:20px; text-align:center; font-size:16px;" class="col-md-12">
		<p><b><?php echo $nomnamer; ?></b><br> <small class="nomik"><?php echo $awatab; ?></small></p>
		</div>
		</div>
							<?php
		};
		?>	
		
		<script type="text/javascript" language="javascript">
    $(document).ready(function() {
		
			$(".ratio").bind('mouseenter', function( event ){
			$(this).fadeTo(500, 0.5);
			});
		
		$(".ratio").bind('mouseleave', function( event ){
			$(this).fadeTo(450, 1);
			});
		
    });
</script>