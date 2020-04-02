<?php
session_start();
include("config.php");
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
                    
						<li style="background-color:crimson; padding:5px 0px 5px 10px; border:dashed;">
                        <?php 
				 if(isset($_SESSION["un"]))
				 {
				  ?>
					<a href="index.php"><b></b><?php echo $_SESSION["un"] ?></a>                 <?php
				 }
				 ?>
                 </li>
                        
                        
						
						<div class="clearfix"> </div>
					</ul>
				</div>
				<div class="top-header-center">
					
				</div>
				
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
					<a href="Login.php"><input type="submit" class="btn btn-default"  style="margin-top:14px;float:right;" value="Login"/></a>                 <?php
				 }
				 ?>
                        
                        </li>
					</ul>
				
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
		<!-- banner -->
		<div class="container">
				<div class="img-slider">
						<!----start-slider-script---->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
					    // You can also use "$(window).load(function() {"
					    $(function () {
					      // Slideshow 4
					      $("#slider4").responsiveSlides({
					        auto: true,
					        pager: true,
					        nav: true,
					        speed: 500,
					        namespace: "callbacks",
					        before: function () {
					          $('.events').append("<li>before event fired.</li>");
					        },
					        after: function () {
					          $('.events').append("<li>after event fired.</li>");
					        }
					      });
					
					    });
					  </script>
					<!----//End-slider-script---->
					<!-- Slideshow 4 -->
					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
                          <?php
						  
						  $query = mysqli_query($connection,"select * from  slider_table");
						  $count = mysqli_num_rows($query);
						  if($count > 0)
						  {
							while($row = mysqli_fetch_array($query))
							{
								
								
							
						  ?>
					        <li>
					          <img  src="../Admin_Pages/images/<?php  echo $row["S_Images"]?>" class="img-responsive" alt="">
                             
					          <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>
                                    <div>
                                    <?php  echo $row["Description"]?>
                                    </div>
                                    </h1>					          					          	 	
					          	 </div>
					          	  <div class="slider-caption-right">				          	  	
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           <!-- share-on -->
					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Share On</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="https://www.facebook.com/" target="_blank"><span class="facebook"> </span></a>
					          			<a href="https://twitter.com/" target="_blank"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					        </li>					        
					       <?php
						   	}  
							 }
						  
						   ?>
					      </ul>
					    </div>
					    <div class="clearfix"> </div>
					</div>
		<!-- /banner -->
		</div>
		<!-- top-grids -->
		<div class="top-grids">
			<div class="container">
                  <?php 	
				include("config.php");			
				$display = "Select * from home_pro_table";
				$query = mysqli_query($connection,$display);
				$count = mysqli_num_rows($query);
				if($count > 0)
				{	
					while($row = mysqli_fetch_array($query))
					{
			?>	
				<div class="col-md-4 top-grid">
            
					<div class="top-grid-head">
						<h3><?php echo $row["H_Name"]?></h3>
					</div>
					<div class="top-grid-info">
						<img src="../Admin_Pages/images/Home_Image/<?php echo $row["H_Image"]?>" class="img-responsive" title="name"/>
						<p><?php echo $row["Description"]?></p>
						<span>Rs.<?php echo $row["H_Price"]?></span>
						<div class="clearfix"> </div>
						<a href="SingleHomeProduct.php?btn_id=<?php echo $row["H_Name"]?>">
                        <input type="submit" value="Buy Now" class="btn btn-success" style="margin-left:120px;"/>	
                        </a>
					</div>
                   
				</div>
				 <?php 
					}
				}
				?>
				
                
                
			</div>
            
			<!-- top-grids-bg -->
			<div class="top-grids-bg">
				<span> </span>
			</div>
			<!-- top-grids-bg -->
		</div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1 style="color:#FFF;font-family:Verdana, Geneva, sans-serif;">History</h1>
                </div>
                
                </div>
            <div class="row">
                <div class="col-md-12">
                <p style="color:#FFF;font-family:Comic Sans MS; font-size:18px; text-align:justify;">
        The term "cake" has a long history. The word itself is of Viking origin, from the Old Norse word "kaka".

The ancient Greeks called cake πλακοῦς (plakous), which was derived from the word for "flat", πλακόεις (plakoeis). It was baked using flour mixed with eggs, milk, nuts and honey. They also had a cake called "satura", which was a flat heavy cake. During the Roman period, the name for cake became "placenta" which was derived from the Greek term. A placenta was baked on a pastry base or inside a pastry case.
The Greeks invented beer as a leavener, frying fritters in olive oil, and cheesecakes using goat's milk.In ancient Rome, basic bread dough was sometimes enriched with butter, eggs, and honey, which produced a sweet and cake-like baked good.[5] Latin poet Ovid refers his and his brother's birthday party and cake in his first book of exile, Tristia.[6]
Early cakes in England were also essentially bread: the most obvious differences between a "cake" and "bread" were the round, flat shape of the cakes, and the cooking method, which turned cakes over once while cooking, while bread was left upright throughout the baking process.
        
        </p>
                </div></div>
            </div>
		<!-- top-grids -->
		<!-- bottom-grids -->
		
        
		<!-- bottom-grids -->
	<!-- /container -->
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

