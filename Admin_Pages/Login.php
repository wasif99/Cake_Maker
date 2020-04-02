<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
<body style="background-image:url(images/1528787729290.jpg); background-repeat:no-repeat; background-size:cover; background-attachment:fixed;">
<!-------Login-------->

<?php	
include("config.php");

if(isset($_POST["btn_login"]))
{

	mysqli_select_db($connection,"cakemaker_db");
	$user_name = $_POST["username"];
	$user_password = $_POST["pass"];
	
	$query = mysqli_query($connection,"select * from user_table where User_Name ='".$user_name."'");
	$row = mysqli_fetch_array($query);
	
	if($row ["User_Name"] == $user_name && $row ["User_Password"] == $user_password)
	{
		$_SESSION["un"] = $row ["User_Name"];
		
		if(isset($_POST["chk"]))
		{
			setcookie("user_n",$user_name,time()+50);
			setcookie("user_pass",$user_password,time()+50);
			
		}
		
		
		
		header("Location:Dashboard.php");
		
	}
	else
	{
		$result = "Invalid Username and Password";
		
	}
	
}


?>


<!-------End Login-------->
	<div class="w3ls-headding">
		<h1><span>t</span>he<span>C</span>ake <span>L</span>ogin <span>F</span>orm</h1>
	</div>
	<div class="agile-main">
		<div class="agile-left">
				<img src="images/left2.jpg" width="200" height="350" />
		</div>
		<div class="agile-right">
			<form action="Login.php" method="post">
				<div class="agile-right-h2">
					<h2> Login here</h2>
				</div>
				<div class="w3l-name">
					<span><i class="fa fa-user" aria-hidden="true"></i></span>
					<input type="text" name="username" placeholder="Username" required value="<?php if(isset($_COOKIE["user_n"])) echo $_COOKIE["user_n"]?>"
/>
				</div>
				<div class="clear"></div>
				
				<div class="clear"></div>
				<div class="w3l-psw">
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
					<input type="password" name="pass" placeholder="password" required value="<?php if(isset($_COOKIE["user_pass"])) echo $_COOKIE["user_pass"]?>"
/>
				</div>
				<div class="clear"></div>
				
				<div class="w3l-agree">
					
                    <input type="checkbox" name="chk" class="checkbox" <?php if(isset($_COOKIE["user_n"])) echo "checked"?>> <label style="color:#FFF;font-family: 'PT Sans', sans-serif;" > Remember Me!</label>



					
				</div>
				<div class="clear"></div>
				
				<div class="w3l-submit">
					<input type="submit" name="btn_login"  value="Login">
				</div>
                <div class="w3l-agree">
					
					<a href="signup.php"><p>Create Your Account</p></a> 
				</div>
			</form>
				
		</div>
		<div class="clear"></div>
	</div>
		
	
</body>
</html>