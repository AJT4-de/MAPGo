<?php
include(connection.php)
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>loginn</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h2></h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
			</div>
			<input type="text" placeholder="First Name" id="tfn"/>
			<input type="text" placeholder="Second Name" id="tsn"/>
			<input type="text" placeholder="Phone number" id="tpn"/>
			<input type="text" placeholder="Address" id="ta"/>
			<input type="email" placeholder="Email" id="te"/>
			<input type="text" placeholder="Username" id="tusn"/>
			<input type="password" placeholder="Password" id="tpss"/>
			<button>Sign Up</button>
		</form>
	</div><div>
	<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$fn=$_POST['tfn'];
		$sn=$_POST['tsn'];
		$pn=$_POST['tpn'];
		$tad=$_POST['ta'];
		$te=$_POST['te'];
		$us=$_POST['tusn'];
		$pss=$_POST['tpss'];
		if(!empty($user_name) && !empty($password))
		{
			//save to database
			$userid = random_num(20);
			$query = "insert into users (firstname,lastname,phonenumber,address,email,consumerid,password) 
			values ('$fn','$sn','$pn','$tad','$te','$userid, '$us','$pss');

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

	$sql="insert"
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<div class="social-container">
			<input type="text" placeholder="Username" />
			<input type="password" placeholder="Password" />
			<button>Sign In</button>
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
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div></div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
