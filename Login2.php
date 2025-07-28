<?php
include("include/connection.php");
include("include/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

	if(isset($_POST['l_uname']) && isset($_POST['l_pswd']) != ""){

		//something was posted
		 $l_uname = $_POST['l_uname'];
		 $l_pswd = $_POST['l_pswd']; 
	
		$query1 = "select deliveryangentid from `deliveragentdetails`
		 where username='$l_uname' and password = '$l_pswd'"; 
		$result = mysqli_query($con,$query1);
		$count = mysqli_num_rows($result);
		if($count == 1)
		{
			header("Location:3.0Delivery.php");
		}
		else{
			echo '<script> alert("pls enter details ...!!); </script>';
		}
	}}
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <!-- <link rel="stylesheet" href="./style.css"> -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<h2></h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form name="sign_form" action="#" method="post" enctype="multipart/data">  
			<h1>Create Account</h1>
			<div class="social-container">
			</div>
			<input type="text" placeholder="First Name" name="tfn" id="tfn" required autocomplete-="off"/>
			<input type="text" placeholder="Second Name" name="tsn" id="tsn" required autocomplete-="off"/>
			<input type="text" placeholder="Phone number" name="tpn" id="tpn" required autocomplete-="off"/>
			<input type="text" placeholder="Address" name="ta" id="ta" required autocomplete-="off"/>
			<input type="email" placeholder="Email" name="te" id="te" required autocomplete-="off"/>
			<input type="text" placeholder="Username" name="tusn" id="tusn" required autocomplete-="off"/>
			<input type="password" placeholder="Password" name="tpss" id="tpss" required autocomplete-="off"/>
			

		</form>
	</div><div>

	<div class="form-container sign-in-container">
		<form name="login_form" action="#" method="post" enctype="multipart/data">
			<h1>Sign in</h1>
			<div class="social-container">
			<input type="text" placeholder="Username" name="l_uname" required autocomplete-="off" />
			<input type="password" placeholder="Password" name="l_pswd" required autocomplete-="off"/>
			<button type="submit" name="signin">Sign In</button>
				</div>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Delivery Agent!</h1>
				<p>Enter your personal details and start journey with us</p>
				
			</div>
		</div>
	</div>
</div></div>
<!-- partial -->
  <!-- <script  src="./script.js"></script> -->
  <script  src="assets/js/login_script.js"></script>
</body>
</html>
