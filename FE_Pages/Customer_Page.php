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
		
			<!----start-main-content----->
			<div class="main-content">
					<?php
					if(isset($_POST["btn_insert"]))
					{
						$cart = $_SESSION["addcart"];
						foreach($cart as $c)
						{
							$id = $c["id"];
							$qt = $c["qty"];
							$d = date('y/m/d');
					$name = $_POST["name"];
					$phone = $_POST["phone_num"];
					$address = $_POST["address"];
					$addtype = $_POST["add_type"];
					$coun_city = $_POST["city"];
					$t_amount = $_POST["total_amount"];
					$query = mysqli_query($connection,"insert into order_pro (Full_Name,Phone_Num,Address,Address_type,City,Pro_ID,Quantity,Total_Amount,Date) values('".$name."','".$phone."','".$address."','".$addtype."','".$coun_city."','".$id."','".$qt."','".$t_amount."','".$d."')");
					if($query)
					{
						$result = "Order Successfully";
					}
					else
					{
							$result = mysqli_error($connection);
						
					}
					}
					}
					?>
                    
                    
					
					<div class="row">			
								<div class="col-md-4"> 
                                
                                </div>
				<div class="col-md-4">
				  <div class="contact-form"><br>
				  	<h3>Billing Form</h3>
					    <form method="post" action="Customer_Page.php">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="name" type="text" class="form-control"></span>
						    </div>
						    <div>
						    	<span><label>Phone Number</label></span>
						    	<span><input name="phone_num" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Address</label></span>
						    	<span><input name="address" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Address Type</label></span>
						    	<span><select class="textbox form-control" name="add_type">
                                <option>Select</option>
                                <option>Office</option>
                                <option>Home</option>
                                
                                
                                </select></span>
						    </div>
                            <div>
						    	<span><label>Country/City</label></span>
						    	<span><input name="city" type="text" class="textbox"></span>
						    </div>
                            <div>
						    	<span><label>Total Amount</label></span>
	<span><input  type="text" class="textbox" value="<?php  echo @$_SESSION["amount"] ?>" disabled/></span>
    <input name="total_amount" type="hidden" class="textbox" value="<?php  echo @$_SESSION["amount"] ?>" />
						    </div>
						   <div>
						   		<span><input type="submit" value="Place Order" name="btn_insert"></span>
						  </div>
                          <div>
						    	<span><label style="color:#090;"><?php  if(isset($_POST["btn_insert"])) echo $result ?></label></span>
						    
						    </div>
					    </form>

				  
  				</div>	
                </div>
               <div class="col-md-4"></div>			
			 </div>
					<!---End-contact---->
			
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

