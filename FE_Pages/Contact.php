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
					<a href="Login.php"><input type="submit" class="btn btn-default"  style="margin-top:14px;float:right;" value="Login"/></a>                  <?php
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
			<div class="content">
			<div class="container">
			<h2>Contact</h2>
			<!----start-main-content----->
			<div class="main-content">
					<!---start-contact---->
					<div class="contact">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
						<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h3>Cake Information :</h3>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span><a href="https://www.w3schools.com/" target="_blank">info@mycompany.com</a></span></p>
				   		
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"></span>
						  </div>
					    </form>

				    </div>
  				</div>				
			  </div>
					<!---End-contact---->
			</div>
			<div class="clear"> </div>
			<!----End-main-content----->
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

