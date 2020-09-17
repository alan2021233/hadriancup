<!DOCTYPE HTML>

<html>
	<head>
		<title>Generic Page - Massively by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">


				<!-- Header -->
					<!-- <header id="header">
					</header> -->

				<div id="intro">
					<h1>Signup</h1>
					<ul class="actions">
						<li><a href="#main" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
					</ul>
				</div>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="index.html">Main</a></li>
							<li class="active"><a href="signup.php">Signup</a></li>
							<li><a href="about.php">About us</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
							<section>
								<form method="post" action="includes/signup_back.php">
									<div class="fields">
										<div class="field">
											<label for="name">First Name</label>
											<input type="text" name="first" id="first" />
										</div>
										<div class="field">
											<label for="name">Last Name</label>
											<input type="text" name="last" id="last" />
										</div>
										<div class="field">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="email">School</label>
											<input type="text" name="school" id="school" />
										</div>
										<div class="field">
											<label for="email">Grade Level</label>
											<input type="number" name="glevel" id="glevel" />
										</div>
										<div class="field">
											<label for="email">Business Club Contact email</label>
											<input type="text" name="clubcontact" id="clubcontact" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" name="submit" value="Signup"/></li>
									</ul>
								</form>
							</section>

							<?php
							if (isset($_GET['signup'])) {
							  $signupcheck = $_GET['signup'];
							  //$_GET can retrieve from the url
							  if ($signupcheck == "empty") {
							    echo "<p class='error'>Fill out all fields</p>";
							    exit();
							  }
							  elseif ($signupcheck == "invalid-email") {
							    echo "<p class='error'>Submit a valid email address</p>";
							    exit();
							  }
							  elseif ($signupcheck == "invalid-name") {
							    echo "<p class='error'>Submit a correct first and last name</p>";
							    exit();
							  }
							  elseif ($signupcheck == "alreadyexists") {
							    echo "<p class='error'>An account with this username or email already exists </p>";
							    echo "<a href='login.php'>Please login here!</a>";
							    exit();
							  }
							  elseif ($signupcheck == "error") {
							    echo "<p class='error'>There was a coding error </p>";
							    echo "<a href='login.php'>Please login here!</a>";
							    exit();
							  }
							  elseif ($signupcheck == "success") {
							    echo "<p class='success'>You have signed up!</p><br>";
							    echo "<a href='login.php'>Login here!</a>";
							    exit();

							  }
							}
							?>
					</div>



				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>1234 Somewhere Road #87257<br />
								Nashville, TN 00000-0000</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(000) 000-0000</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@untitled.tld</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
