<?php
include("include/connection.php");


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Alter Consumer page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-camelcase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">MAPGo</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
					<li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-uppercase" href="2.0Consumer.html">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-uppercase" href="#portfolio">Services</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-uppercase" href="#contact">Contact</a></li>
					<button type="button" class="btn btn-light text-uppercase"><strong>logout</strong></button>
                </ul>
            </div>
        </div>
    </nav>

    <section id="portfolio" class="portfolio bg-primary">
        <div class="container-fluid mt-5">
            <h2 class="text-uppercase text-center text-light">Alter Detials</h2>
            <hr class="star-light mb-5">
            <div style="align-content:center ;width:50% ">
              <form method="post" >
				    <div class="form-group">
					    <label class="control-label text-uppercase text-light" style="font-family:Montserrat"><strong>consumer id</strong> 
                        <span>*</span></label><label class="control-label text-uppercase text-light" style="font-family:Montserrat">
                        
                        <strong>phone number</strong><span>*</span></label><br>
                        <input type="text" name="firstname" class="form-control white_bg" id="tfn" >

                        <label class="control-label text-uppercase text-light text-center" style="font-family:Montserrat"><strong>First Name</strong> <span>*</span></label>
                        <input type="text" name="firstname" class="form-control white_bg" id="tfn" >
                    </div>

                    <div class="form-group">
                        <label class="control-label text-uppercase text-light" style="font-family:Montserrat"><strong>last Name</strong> <span>*</span></label>
                        <input type="text" name="lastname" class="form-control white_bg" id="tsn">
                    </div>

				    <div class="form-group">
                        <label class="control-label text-uppercase text-light" style="font-family:Montserrat"><strong>e-mail</strong> <span>*</span></label>
                        <input type="email" name="email" class="form-control white_bg" id="te">
                    </div>

                    <div class="form-group">
                        <label class="control-label text-uppercase text-light" style="font-family:Montserrat"><strong>phone number</strong> <span>*</span></label>
                        <input type="text" name="contactno" class="form-control white_bg" id="tpn">
                    </div>

				    <label class="control-label text-uppercase text-light" style="font-family:Montserrat"><strong>Address</strong> <span>*</span></label>
                    
                    <input type="text" name="contactno" class="form-control white_bg" id="ta">

                    <div class="form-group">
                        <a class="btn btn-light btn-lg mx-auto rounded-pill portfolio-modal-dismiss text-uppercase "  style="font-family:Montserrat" role="button"><strong>update </strong><span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                        <a class="btn btn-light btn-lg mx-auto rounded-pill portfolio-modal-dismiss text-uppercase "  style="font-family:Montserrat" role="button" id="gps"><strong>gps </strong><span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                    </div>
          </form>
            </div>
        </div>
    </section>
<section id="contact" style="background-image:url('assets/img/map-image.png');background-color: #2C3E50;">
    <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase  text-white section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">We'll be in touch:)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col col-md-6">
                                <div class="form-group"><input class="form-control" type="text" id="name" placeholder="Your Name *" required=""><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" id="email" placeholder="Your Email *" required=""><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="tel" placeholder="Your Phone *" required=""><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" id="message" placeholder="Your Message *" required=""></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col">
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p>221b Bakers Street<br>
                        London,<strong>UK</strong>&nbsp; NW1 6XE</p>
                    </div>
                    <div class="col-md-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase">Around the Web</h4>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                            <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-google-plus fa-fw"></i></a></li>
                            <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-uppercase mb-4">About MAPGo</h4>
                        <p class="lead mb-0"><span>It is as Eazy as it can <br>Ever Be</span></p>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © MapGo Pvt.Ltd. 2022</small></div>
        </div>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a class="d-block js-scroll-trigger text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>
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
            set(ref(db,"latlong2/"),{
                lat:position.coords.latitude,
                long:position.coords.longitude
            }).then(()=>{
                alert("sent")
            });
        }
        
        var gpsbtn = document.getElementById("gps");
        gpsbtn.addEventListener('click',getlatlong);
      </script>

</html>
