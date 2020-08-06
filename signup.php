<?php
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "finalproj");

	if(isset($_POST['register']))
	{
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$usertype = $_POST['usertype'];

		$query = "INSERT INTO `register`(`name`,`username`, `email`,`phone`,`password`, `usertype`) VALUES ('$name','$username','$email','$phone','$password','$usertype')";
		$query_run = mysqli_query($connection, $query);
		if($query_run)
		{
			echo '<script type="text/javascript"> alert("Data saved") </script>';
			header('location: http://localhost/sagorphp/finalproject/login.php');
		}
		else
		{
			echo '<script type="text/javascript"> alert("Data not saved") </script>';
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Registration</title>
	<style type="text/css">
		body{
			background-color: #b3cce6;
		}

		.container{
			background-color: whitesmoke;
			box-shadow: 1px 1px 2px 2px grey;
			padding: 40px 6px 18px 35px;
			width: 30%;
			height: 30%;
			margin-left: 34%;
			border-radius: 15px;
		}
		.txt{
			width: 90%;
			height: 2%;
			border: 1px solid #b3d9ff;
			border-radius: 05px;
			padding: 8px 4px 8px 6px;
			margin: 0px 10px 15px 0px;
		}
	</style>
</head>

<body>
	<center><h2>
		User Registration
	</h2></center>

	<div class="container">
		<form action="signup.php" method="POST">
			<label>Name: </label><br>
			<input type="text" class="txt" name="name" class="txt" placeholder="Enter your full name"><br>

			<label>Username: </label><br>
			<input type="text" class="txt" name="username" placeholder="Enter username"><br>

			<label>Email: </label><br>
			<input type="email" class="txt" name="email" placeholder="Enter email"><br>

			<label>Phone No: </label><br>
			<input type="text" class="txt" name="phone" placeholder="Enter your phone number"><br>

			<label>Password: </label><br>
			<input type="password" class="txt" name="password" placeholder="Enter password"><br>

			<label>User Type: </label><br>
			<input type="radio" name="usertype" value="cto">CTO |
			<input type="radio" name="usertype" value="projectmanager">Project Manager |<br>
			<input type="radio" name="usertype" value="teamleader">Team Leader |
			<input type="radio" name="usertype" value="Software Engineer">Software Engineer<br>

			<input type="submit" name="register" value="SUBMIT" style=" background-color: #79a4d2; color: black">
			<p style="font-size: 15px;">
			Already a member?<a title="Click here to login" style="text-decoration: none; font-family: cursive;" href="login.php"> Log In</a>
			</p>
			<button><a style="text-decoration: none;" href="index.php">Back</a></button>
		</form>
	</div>

</body>
</html>