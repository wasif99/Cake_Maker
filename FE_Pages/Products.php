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
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
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
					<a href="Login.php"><input type="submit" class="btn btn-default"  style="margin-top:14px;float:right;" value="Login"/></a>                   <?php
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
	<!-- service -->
<div class="biseller-info">
<div class="container">
<h2>Products</h2>
<h3 class="new-models">new varieties</h3>
<div class="row">

			<ul id="flexiselDemo3">
                 <?php 	
				include("config.php");			
				$display = "Select * from cake_item_table";
				$query = mysqli_query($connection,$display);
				$count = mysqli_num_rows($query);
				if($count > 0)
				{	
					while($row = mysqli_fetch_array($query))
					{
			?>	
				<li>
           
            
					<div class="biseller-column">               
					<img src="../Admin_Pages/images/<?php echo $row["Cake_Image"]?>" class="img-thumbnail">
						
					<div class="biseller-name">
                    
						<h4><?php echo $row["Cake_name"]?></h4>
						<p>Rs.<?php echo $row["Cake_Price"]?></p>
					</div> 
						<a href="SingleProduct.php?btn_id=<?php echo $row["Cake_name"]?>">
                        <input type="submit" value="| Add To Cart" class="btn btn-success"/>	
                        </a>			
					</div>                    
				</li>			
			   <?php 
					}
				}
				?>
	     	</ul>  
			</div>
		</div>	
</div>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: false,
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
				    			visibleItems: 2
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
			
				
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo1").flexisel({
						visibleItems: 4,
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
				    			visibleItems: 2
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
			
			<div class="clearfix"></div>


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

