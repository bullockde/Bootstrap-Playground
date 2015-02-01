<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Playground</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	
	<link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![//if]-->
  </head>
  <body>
    
<!-- Navbar --> 
		<nav class='navbar navbar-inverse navbar-fixed-top'  id='my-navbar'>
			<div class="container">
				<div class="navbar-header">
					<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navbar-collapse'>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					
					<a href="" class='navbar-brand'>Bootstrap Playground</a>
					
				</div><!-- // navbar-header -->
				
				<div class="collapse navbar-collapse" id='navbar-collapse'>
				
				<a href="" class="btn btn-info navbar-btn navbar-right">Download Now</a>
					<ul class="nav navbar-nav">
						<li><a href="#feedback">Feedback</a></li>
						<li><a href="#gallery">Gallery</a></li>
						<li><a href="#feedback">Features</a></li>
						<li><a href="#feedback">FAQ</a></li>
						<li><a href="#feedback">Contact Us</a></li>
					</ul>
				</div>
			</div><!-- // container -->
		</nav><!-- // Navbar -->
		
		
<!-- Jumbotron -->
		
		<div class="jumbotron">
			<div class="container text-center">
				<h1>Bootstrap Playground</h1>
				<p>My place to learn and grow as a developer.</p>
				
				<div class="btn-group">
					<a href="" class="btn btn-lg btn-warning">Download App</a>
					<a href="" class="btn btn-lg btn-default">Visit Store</a>
					<a href="" class="btn btn-lg btn-warning">Spread the word</a>
				</div>
			</div><!-- // container -->
			
			
		</div><!-- // jumbotron  -->

		
<!-- Feedback -->	
		<div class="container">
			<section>
				<div class="page-header" id="feeback">
					<h2>Feedback <small>Check out the Awesome Feedback</small></h2>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<footer>John Doe</footer>
						</blockquote>
					</div>
					<div class="col-lg-4">
						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<footer>John Doe</footer>
						</blockquote>
					</div>
					<div class="col-lg-4">
						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<footer>John Doe</footer>
						</blockquote>
					</div>
				</div>
			</section>
		</div><!-- // container -->
		
<!-- call to action -->
		<section>
			<div class="well">
				<div class="container text-center">
					<h3>Subscribe for More Free Stuff</h3>
					<p>Enter your name and email</p>
					
					<form action="" class='form-inline'>
						<div class="form-group">
							<label for="subscription">Subscribe</label>
							<input type="text" class='form-control' id='subscription' placeholder='Your name'>
						</div>
						<div class="form-group">
							<label for="email">Email Address</label>
							<input type="text" class='form-control' id='email' placeholder='Enter your Email'>
						</div>
						<button type="button" class="btn btn-default">Subscribe</button>
						<hr>
					</form>
				</div><!-- // container -->
			</div><!-- // well -->
		</section><!-- // call to action -->

<!-- Gallery -->

		<div class="container">
			<section>
				<div class="page-header" id="gallery">
					<h2>Gallery <small>Check out the Awesome Gallery</small></h2>
				</div>
				
				<div class="carousel slide" id="screenshot-carousel" data-ride='carousel'>
					<ol class='carousel-indicators'>
						<li data-target='#screenshot-carousel' data-slide-to='0' class='active'></li>
						<li data-target='#screenshot-carousel' data-slide-to='1' class='active'></li>
						<li data-target='#screenshot-carousel' data-slide-to='2' class='active'></li>
						<li data-target='#screenshot-carousel' data-slide-to='3' class='active'></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="http://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg" alt="Text of image">
						</div>
						<div class="item">
							<img src="http://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg" alt="Text of image">
						</div>
						<div class="item">
							<img src="http://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg" alt="Text of image">
						</div>
						<div class="item">
							<img src="http://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg" alt="Text of image">
						</div>
					</div>
					
				</div>
			</section>
		</div>
		
		<footer>
			<div class="well">
				<div class="container text-center">
					&copy; 2015 - Created by <a href="http://dariusbullock.com">Darius Bullock</a>
				</div>
			</div>
				
		</footer>
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>
</html>
