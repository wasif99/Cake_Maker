<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Transitive register form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/font-awesome.css"><!--font_wesome_icons-->
<link href="//fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"><!--online fonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet"><!--online fonts-->
</head>
<body style="background-image:url(images/1528787729290.jpg); background-repeat:no-repeat; background-size:cover;">

<!-------Sign Up-------->

<?php
if(isset($_POST["btn_sign"]))
{
$connection = mysqli_connect("localhost","root");
mysqli_select_db($connection,"cakemaker_db");

$user_name = $_POST["username"];
$user_pass = $_POST["pass"];
$user_email = $_POST["e_mail"];
$user_phone = $_POST["p_hone"];
$gen = $_POST["r1"];

$query = "insert into user_table (User_Name,User_Password,User_Email,User_Phone,Gender) values('".$user_name."','".$user_pass."','".$user_email."','".$user_phone."','".$gen."')";

$exe = mysqli_query($connection,$query);
if($exe)
{
	$print = "Registration Successfull";
}
else
{
	$print = "Record Not Inserted";;
}

}

?>
<!-------End Sign Up-------->


	<div class="w3ls-headding">
		<h1><span>t</span>he<span>C</span>ake <span>R</span>egisteration <span>F</span>orm</h1>
	</div>
	<div class="agile-main">
		<div class="agile-left">
				<img src="images/wedding.jpg" width="200" height="480" />
		</div>
		<div class="agile-right">
			<form action="signup.php" method="post">
				<div class="agile-right-h2">
					<h2> Registeration here</h2>
				</div>
				<div class="w3l-name">
					<span><i class="fa fa-user" aria-hidden="true"></i></span>
					<input type="text" name="username" placeholder="Enter Your Username" required/>
				</div>
				<div class="clear"></div>
				
				<div class="clear"></div>
				<div class="w3l-psw">
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
					<input type="password" name="pass" placeholder="Enter Your Password" required/>
				</div>
                <div class="w3l-name">
					<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
					<input type="text" name="e_mail" placeholder="Enter Your Email" required/>
				</div>
                <div class="w3l-name">
					<span><i class="fa fa-phone" aria-hidden="true"></i></span>
					<input type="text" name="p_hone" placeholder="Enter Your Phone" required/>
				</div>
				<div class="clear"></div>
				
				<div class="w3l-agree">
					<input type="radio" name="r1" value="Male"><label style="color:#FFF;font-family: 'PT Sans', sans-serif;" > Male</label>
                    <input type="radio" name="r1" value="Female"><label style="color:#FFF;font-family: 'PT Sans', sans-serif;"> Female</label>
					
				</div>
				<div class="clear"></div>
				
				<div class="w3l-submit">
					<input type="submit" name="btn_sign" value="Register Now">
				</div>
                <div class="w3l-agree">
					
					<a href="Login.php"><p>Already an Account</p></a> 
				</div>
                 <div class="w3l-agree">
					
					<p style="margin-top:20px; color:#F0F;"><?php if(isset($_POST["btn_sign"])) echo $print ?></p>
				</div>
                
			</form>
				
		</div>
		<div class="clear"></div>
	</div>
		
	
</body>
</html>