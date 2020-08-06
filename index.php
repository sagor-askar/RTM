<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RTM system</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}
		.wrapper {
			width: 1170px;
			margin: auto;
		}
		header {
			background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("image/homeback.jpeg");
			height: 100vh;
			-webkit-background-size: cover;
			background-size: cover;
			background-position: center center;
			position: relative;
		}
		.nav-area {
			float: right;
			list-style: none;
			margin-top: 30px;
		}
		.nav-area li{
			display: inline-block;
		}
		.nav-area li a{
			color: #fff;
			text-decoration: none;
			padding: 5px 20px;
			font-family: poppins;
			font-size: 14px;
			border: 1px solid #fff;
		}
		.nav-area li a:hover {
			background: #fff;
			color: #333;
		}
		.logo img {
			width: 100px;
			float: left;
			margin-top: 35px;
		}
		.welcome-text{
			position: absolute;
			width: 600px;
			height: 300px;
			margin: 20% 20%;
			text-align: center;
		}
		.welcome-text h3{
			margin-left: 150px;
			color: #fff;
			text-transform: uppercase;
			font-size: 30px;
		}
		.welcome-text a{
			border: 1px solid #fff;
			padding: 10px 25px;
			text-decoration: none;
			text-transform: uppercase;
			font-size: 14px;
			margin-top: 20px;
			display: inline-block;
			color: #fff;
			margin-left: 135px;
		}
		.welcome-text a:hover{
			background: #fff;
			color: #333;
		}
		.footer {
			/*position: fixed;*/
			left: 0;
			margin-bottom: 10px;
			width: 100%;
			background-color: gray;
			text-align: center;
			color: white;
		}
		.fa {
		  padding: 20px;
		  font-size: 30px;
		  width: 30px;
		  text-align: center;
		  text-decoration: none;
		  margin: 5px 2px;
		  border-radius: 50%;
		}

		.fa:hover {
		    opacity: 0.7;
		}

		.fa-facebook {
		  background: #3B5998;
		  color: white;
		}

		.fa-twitter {
		  background: #55ACEE;
		  color: white;
		}

		.fa-google {
		  background: #dd4b39;
		  color: white;
		}
		.fa-instagram {
		  background: #125688;
		  color: white;
		}

	</style>
</head>
<body>
	<header>
		<div class="wrapper">
			<div class="logo">
				<img src="image/logo.png" alt="" title="Requirement Tracking & Traceability Matrix">
			</div>
			<ul class="nav-area">
				<li><a href="#">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="login.php">Log In</a></li>
				<li><a href="signup.php">Sign Up</a></li>
			</ul>
		</div>

		<div class="welcome-text">
			<h3>Requirement Tracking & Traceability Matrix</h3>
			<a href="portfolio.php">See our portfolio here</a>
		</div>
	</header>

	<footer class="footer">
		<br>
		<br>
		<p><a style="text-decoration: none;" title="Click here to contact us" href="contact.php">Contact Us</a></p>
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<p>Final Project | All rights researved | 2019-2020</p>
		<p>&copy; Sagor Askar </p>
	</footer>

</body>
</html>