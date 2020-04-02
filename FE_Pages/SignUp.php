<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/cake_logo3.png"/>
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

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="SignUp.php" method="post">
					<span class="login100-form-title p-b-55">
						<img src="images/cake_logo3.png" width="210" height="200" />
					</span>
                    <span class="login100-form-title p-b-55">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-user"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="e_mail" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="p_hone" placeholder="Phone">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-phone"></span>
						</span>
					</div>
					<div class="contact100-form-checkbox m-l-4">
						<input type="radio" name="r1" value="Male"> Male
                        <input type="radio" name="r1" value="Female"> Female
						
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						<input type="submit" name="btn_sign" value="Sign Up" class="login100-form-btn"/>
					</div>

					<div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1" style="color:crimson; font-weight:bold;">
					<?php if(isset($_POST["btn_sign"])) echo $print ?>
						</span>
					</div>
                    <div class="text-center w-full p-t-115">
						<a class="txt1 bo1 hov1" href="Login.php">
							Already an Account						
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