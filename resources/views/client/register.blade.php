 <!DOCTYPE html>
<html lang="en" class=" js no-touch">
<head>
  <title>Ani Motors | HTML5 Responsive Bootstrap Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ URL::asset('client/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/css/slick-team-slider.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/css/style.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<!--HEADER START-->
	<div class="main-navigation navbar-fixed-top">
		<nav class="navbar navbar-default">
			<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.html">Ani Motors</a>
			</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
			    <li class="active"><a href="#banner">Home</a></li>
			    <li><a href="#service">Service</a></li>
			    <li><a href="#portfolio">Portfolio</a></li>
			    <li><a href="#about">Our Team</a></li>
			    <li><a href="#contact">Contact Us</a></li>
			    <li><a class="btn btn-success" href="#contact">Singup</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
	</div>
	<!--HEADER END-->


	<!--CONTACT START-->
	<div id="contact" class="section-padding">
		<div class="container"></div>
		<div class="container">
			<div class="row">
				<div class="page-title text-center">
					<h1>Quick Contact</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Ani Motorsr <br>incididunt ut labore et dolore magna aliqua. </p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                
				<div class="form-sec">
                	<form action="" method="post" role="form" class="contactForm">
                    	<div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
            
                            <button class="button-medium" id="contact-submit" type="submit" name="contact">Submit Now</button>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
	<!--CONTACT END-->

	<!--FOOTER START-->
	<footer class="footer section-padding">
		<div class="container">
			<div class="row">
				<div style="visibility: visible; animation-name: zoomIn;" class="col-sm-12 text-center wow zoomIn">
					<h3>Follow us on</h3>
					<div class="footer_social">
						<ul>
							<li><a class="f_facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="f_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="f_google" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a class="f_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>																
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</footer>
	<!--FOOTER END-->
	<div class="footer-bottom">
		<div class="container">
			<div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
				<div class="footer_copyright">
					<p> © Copyright, All Rights Reserved.</p>					
					<div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Ani Motors
                        -->
                        Designed by <a href="https://bootstrapmade.com/">Bootstrap Themes</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
  	<script src="{{ URL::asset('client/js/jquery.min.js') }}"></script>
  	<script src="{{ URL::asset('client/js/jquery.easing.min.js') }}"></script>
  	<script src="{{ URL::asset('client/js/bootstrap.min.js') }}"></script>
  	<script src="{{ URL::asset('client/js/jquery.mixitup.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ URL::asset('client/js/slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('client/js/custom.js') }}"></script>

</body>
</html>