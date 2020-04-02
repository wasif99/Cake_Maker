<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/cake_logo2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<!-------Login-------->

<?php
if(isset($_POST["btn_login"]))
{
	$connection = mysqli_connect("localhost","root");
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
		
		
		
		header("Location:Customer_Page.php");
		
	}
	else
	{
		$result = "Invalid Username and Password";
		
	}
	
}


?>


<!-------End Login-------->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="Login.php" method="post">
                	<span class="login100-form-title p-b-55">
						<img src="images/cake_logo3.png" width="210" height="200" />
					</span>

					<span class="login100-form-title p-b-55">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username"  value="<?php if(isset($_COOKIE["user_n"])) echo $_COOKIE["user_n"]?>" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" value="<?php if(isset($_COOKIE["user_pass"])) echo $_COOKIE["user_pass"]?>" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="chk" type="checkbox" name="remember-me" <?php if(isset($_COOKIE["user_n"])) echo "checked"?>>
						<label class="label-checkbox100" for="chk">
							Remember me
						</label>
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						<input type="submit" name="btn_login" class="login100-form-btn" value="Login"/>
					</div>

								
					<div class="text-center w-full p-t-115">
						<a href="index.php">
							Back To Home
						</a>
						<a class="txt1 bo1 hov1" href="SignUp.php">
							Sign up now							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="Assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Assets/vendor/bootstrap/js/popper.js"></script>
	<script src="Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Assets/js/main.js"></script>

</body>
</html>