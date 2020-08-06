<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "finalproj";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(isset($_POST['Login'])){
		$name = $_POST['name'];
		$password = $_POST['password'];
		$usertype = $_POST['usertype'];

		$query = "SELECT * FROM register WHERE name = '".$name."' and password = '".$password."' and usertype = '".$usertype."' ";
		$result = mysqli_query($conn, $query);

		// login logic
		if(result){
			while($row=mysqli_fetch_array($result)){
				echo '<script type="text/javascript">alert("You are loged in as '.$row['usertype'].' ")</script>';
			}
			
			if( $usertype == "cto" ) {
				header("Location: cto.php");
			}
			elseif ($usertype == "projectmanager") {
				header("Location: home.php");
			}
			elseif ($usertype == "teamleader") {
				header("Location: tl_home.php");
			}
			else {
				header("Location: se_home.php");
			}
		} 
		// new implementation
		else{
			echo "Check your username / password!";
		}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Login</title>
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
		User Login
	</h2></center>

	<div class="container">
		<form action="login.php" method="POST">
			<label>Username: </label><br>
			<input type="text" class="txt" name="username" placeholder="Enter username"><br>

			<label>Password: </label><br>
			<input type="password" class="txt" name="password" placeholder="Enter password"><br>

			<label>User Type: </label><br>
			<input type="radio" name="usertype" value="cto">CTO |
			<input type="radio" name="usertype" value="projectmanager">Project Manager |<br>
			<input type="radio" name="usertype" value="teamleader">Team Leader |
			<input type="radio" name="usertype" value="Software Engineer">Software Engineer<br>

			<input type="submit" name="Login" value="LOGIN" style=" background-color: #79a4d2; color: black">
			<p style="font-size: 15px;">
			Not a member?<a title="Click here to sign up" style="text-decoration: none; font-family: cursive;" href="signup.php"> Sign Up</a>
			</p>
			<button><a style="text-decoration: none;" href="index.php">Back</a></button>
		</form>
	</div>

</body>
</html>