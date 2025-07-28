<?php
include("include/connection.php");
include("include/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

	if(isset($_POST['l_uname']) && isset($_POST['l_pswd']) != ""){

		//something was posted
		 $l_uname = $_POST['l_uname'];
		 $l_pswd = $_POST['l_pswd']; 
	
		$query1 = "select consumerid from `consumerdetails` where username='$l_uname' and password = '$l_pswd'"; 

		$result = mysqli_query($con,$query1); 

		//$value = mysqli_fetch_array($result); 

		$count = mysqli_num_rows($result);

		if($count == 1){
			//header("Location:index.php/cid='".$value[0]."'");
			header("Location:2.0consumer.php");
		}
		else{
			echo '<script> alert("pls enter details ...!!); </script>';
		}

	}else{ 

	//something was posted
	 $fn=$_POST['tfn'];
	 $sn=$_POST['tsn'];
	 $pn=$_POST['tpn'];
	 $tad=$_POST['ta'];
	 $te=$_POST['te'];
	 $us=$_POST['tusn'];
	 $pss=$_POST['tpss']; 

	//save to database
		$userid = random_num(20);
	/*$query = "insert into users (firstname,lastname,phonenumber,address,email,consumerid,password) 
	values ('$fn','$sn','$pn','$tad','$te','$userid, '$userid','$pss')";*/

		$query = "INSERT INTO `consumerdetails`(`firstname`, `lastname`, `phonenumber`, `email`, `address`, `consumerid`, `username`, `password`) 
	VALUES ('$fn','$sn','$pn','$te','$tad','$userid','$us','$pss')"; 

	mysqli_query($con, $query);

	header("Location: login.php");

	}

	//echo '<script> alert("details entered successfully...!!); </script>';

}


?>


<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <!-- <link rel="stylesheet" href="./style.css"> -->
  <script href="https://cdnjs.cloudflare.com/ajax/libs/firebase/9.6.7/firebase-database.min.js"></script>
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
			<button>Sign Up</button>

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
				<h1>Hello, Consumer!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp" >Sign Up</button>
			</div>
		</div>
	</div>
</div></div>
<!-- partial -->
  <!-- <script  src="./script.js"></script> -->
  <script  src="assets/js/login_script.js"></script>
  <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyB5B-7WM0EX2YM_kQDQXNaixejpYEevlMY",
          authDomain: "mapgo-f01f5.firebaseapp.com",
          projectId: "mapgo-f01f5",
          storageBucket: "mapgo-f01f5.appspot.com",
          messagingSenderId: "496899577881",
          appId: "1:496899577881:web:0d96ca2c58c2aa36357288",
          measurementId: "G-4DP1CC70NS"
        };
        import { getDatabase,ref,set,child,update,remove } from "https://cdnjs.cloudflare.com/ajax/libs/firebase/9.6.7/firebase-database.min.js";

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        
        
        const db = getDatabase();
        
        
        function getlatlong(){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            
            var latlong = "Latitude: " + position.coords.latitude + 
                "<br>Longitude: " + position.coords.longitude
            set(ref(db,"latlong/"),{
                lat:position.coords.latitude,
                long:position.coords.longitude
            }).then(()=>{
                alert("sent")
            });
        }
        
        var gpsbtn = document.getElementById("gps");
        gpsbtn.addEventListener('click',getlatlong);
      </script>
</body>
</html>
