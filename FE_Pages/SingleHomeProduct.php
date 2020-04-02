<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>The Cake</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="js/jquery.easydropdown.js"></script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<link rel="stylesheet" href="css/etalage.css">
		<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery.easydropdown.js"></script>

		<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

	</head>
	<body>
	<!-- container -->
		<!-- top-header -->
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul>
						<li style="background-color:crimson; padding:5px 0px 5px 10px; border:dashed;"><a  <?php 
				 if(isset($_SESSION["un"]))
				 {
				  ?>
					<a href="index.php"><b></b><?php echo $_SESSION["un"] ?></a>                 <?php
				 }
				 ?></li>
						
						<div class="clearfix"> </div>
					</ul>
				</div>
				<div class="top-header-center">
					
				</div>
				<div class="top-header-right">
					<ul>
						
						
                         <li>
                         
                         <?php 
				 if(isset($_SESSION["un"]))
				 {
				  ?>
					<a href="logout.php"><input type="submit" class="btn btn-default"  style="margin-top:14px;float:right;" value="Logout"/></a>                 <?php
				 }
				 ?>
                 <?php 
				 if(!isset($_SESSION["un"]))
				 {
				  ?>
					<a href="Login.php"><input type="submit" class="btn btn-default"  style="margin-top:14px;float:right;" value="Logout"/></a>                 <?php
				 }
				 ?>
                         </li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- /top-header -->
		<!-- main-menu -->
		<div class="main-menu">
			<div class="container">
			<div class="head-nav">
				<span class="menu"> </span>
				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="Products.php">products</a></li>
					<li><a href="AboutUs.php">About</a></li>
                    
					<li><a href="Contact.php">Contact</a></li>
					
                    <div class="clearfix"> </div>
				</ul>
			</div>	
				<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->

				<!-- logo -->
				<div class="logo">
					<a href="index.php"><img src="images/logo2.png" title="Sweetcake" /></a>
				</div>
				<!-- logo -->
			</div>
		</div>
		<!-- /main-menu -->
	<!---start-content----->
	<div class="details">
<div class="container">
<div class="row single">
<div class="col-md-9">
				  <div class="single_left">
				          <?php 	
				   
				include("config.php");
				$c_name = $_GET["btn_id"];		
				$display = "Select * from  view_home where H_Name='".$c_name."'";
				$query = mysqli_query($connection,$display);
				$count = mysqli_num_rows($query);
				if($count > 0)
				{
					while($row = mysqli_fetch_array($query))
					{
			?>	
					<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
								
				<img class="etalage_source_image" src="../Admin_Pages/images/<?php echo $row["H_Image"]?>" 
                class="img-thumbnail" width="500" />
								</a>
							</li>
							
						</ul>
						 <div class="clearfix"></div>		
				  </div>
				  <div class="desc1 span_3_of_2">
          
					<h3><?php echo $row["H_Name"]?></h3>
					<p>Rs.<?php echo $row["H_Price"]?></p>
                    <h3 style="font-weight:bold">Cake Detail</h3>
                    <h4>Category : <?php echo $row["Cat_Name"]?></h4>
                    <h4>Cake Flavour : <?php echo $row["H_Flavour"]?></h4>
                    <h4>Cake Description : <?php echo $row["Description"]?></h4>
                     <form method="get" action="Cart.php">
                     <h4>Enter Quantity:</h4><span><input type="number" value="1" min="1" name="qty" class="form-control" /></span>
                     <input type="hidden" name="id" value="<?php echo $row["H_Id"]?>" /><br>
                     <button type="submit" class="btn btn-warning btn-lg">Buy</button>
                     </form>
					   <?php 
					}
				}
				?>					
					
					
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    
				
	       </div>
		   
				<div class="clearfix"></div>	
	</div>
	</div>
	</div>
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-3">
					<h5>ABOUT US</h5>
                    <p style="font-size:16px;text-align:justify;color:#666;">
                    He term "cake" has a long history. The word itself is of Viking origin, from the Old Norse word "kaka".
                    </p>
                    <br>
                    <p style="font-size:16px;text-align:justify;color:#666;">
                    Phone : +00 123 456 789 
                    </p>
                    <p style="font-size:16px;text-align:justify;color:#666;">
                    E-mail : hello@thecake.com
                    </p>
                      <br>
                    <p style="font-size:16px;text-align:justify;color:#666;">
                    Address : Haidri Ti Services (Pvt) Ltd.SD-1 Block A,
                    North Nazmabad Karachi Pakistan
                    </p>
                    
				</div>
				<div class="col-md-3">
					<h5 style="margin-left:100px;">SERVICES</h5>
                     <p style="font-size:16px;text-align:justify;color:#666;margin-left:100px;">
                   		Shipment
                    </p>
                      <p style="font-size:16px;text-align:justify;color:#666;margin-left:100px;">
                   		Chief Talks
                    </p>
                      <p style="font-size:16px;text-align:justify;color:#666;margin-left:100px;">
                   		Live Support
                    </p>
                      <p style="font-size:16px;text-align:justify;color:#666;margin-left:100px;">
                   		Privacy
                    </p>
				</div>
				<div class="col-md-3">
					<h5 style="margin-left:100px;">LINKS</h5>
                     <p style="font-size:16px;text-align:justify;color:#666;margin-left:100px;">
                   		<a href="index.php">Home</a>
                    </p>
                      <p style="font-size:16px;text-align:justify;color:#666;margin-left:100px;">
                   		<a href="Products.php">Products</a>
                    </p>
                      <p style="font-size:16px;text-align:justify;color:#666;margin-left:100px;">
                   		<a href="AboutUs.php">Aboutus</a>
                    </p>
                      <p style="font-size:16px;text-align:justify;color:#666;margin-left:100px;">
                   		<a href="Contact.php">Contact</a>
                    </p>
				</div>
				<div class="col-md-3 sign">
					<a href="index.php"><img src="images/logo2.png" /></a>
				</div>
					<div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<div class="row">
                <div class="col-md-4">
                
                </div>
                <div class="col-md-4">
                <a href="#"><img src="images/chalkboard.png" /></a>
                <a href="#"><img src="images/Gmail.png" /></a>
                <a href="#"><img src="images/chalkboardsocialmediabuttons.png" />  </a>           
                <a href="#"><img src="images/P.png" /></a>
                </div>
                <div class="col-md-4">
                
                </div>
               
                </div>
			</div>
		</div>
	</div>
	<!-- /footer -->
	</body>
</html>

