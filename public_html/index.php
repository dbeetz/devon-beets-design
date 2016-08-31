<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"
				rel="stylesheet"/>
		<!-- Google Fonts-->

		<!-- Favicon -->
		<link type="image/ico" href="images/DBDesignFavicon.jpg" rel="shortcut icon"/>


		<!-- Custom CSS  -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" href="css/sticky-footer.css" type="text/css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery - required for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<title>Devon Beets Design</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<header>
				<!-- Begin Navbar -->
				<nav class="navbar-header navbar-inverse navbar-fixed-top">
					<div class="container">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">DB Design logo</a>


						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="https://www.google.com/">About Me</a></li>
								<li><a href="https://www.google.com/">Resume</a></li>
								<li><a href="https://www.google.com/">Contact</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
			</header>

			<!-- Begin Jumbotron -->
			<section id="introduction">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="jumbotron col-md-6 col-md-offset-5">
								<p class="text-center">Hello! My name is</p>
								<h1 class="text-center">Devon Beets</h1>
								<p class="text-center">and I'm a Web Designer! :)</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Begin About Me -->
			<section id="about-me">
					<h1 class="text-center">Web Developer, Graphic Artist, Gamer</h1>
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-9">
							<h3>Hello there!</h3>
							<p>My name is Devon Beets and I am a web developer and graphics artist! I love both people and
								technology and the power that is made when the two are brought together.</p>
						</div>
						<div class="col-sm-6 col-md-3">
							<img src="images/DevonBeetsSelfieHalfSize.png" alt="Me!" class="img-responsive center-block"/>
						</div>
					</div>
				</div>
			</section>

			<!-- Begin Resume -->
			<section id="resume">
					<h1 class="text-center">Some of my Work</h1>
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<p>Insert Simplified Resume Content Here! :)</p>
						</div>
						<div class="col-sm-6 col-md-6">
							<p>And here!</p>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!-- Begin Contact -->
		<section id="contact">
				<h1 class="text-center">Want to Talk?</h1>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-md-offset-3">
						<form>
							<div class="form-group">
								<label for="Name">Name</label>
								<input type="text" class="form-control" id="name" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="Name">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Subject</label>
								<input type="text" class="form-control" id="subject" placeholder="Subject">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Content</label>
								<textarea class="form-control" rows="4" maxlength="500" id="content"
											 placeholder="What would you like to talk about?"></textarea>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<!-- Begin Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<p class="text-center h6">© Devon Beets 2016 All Rights Reserved</p>
					</div>
				</div>
			</div>
		</footer>
	</body>