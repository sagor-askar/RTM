<!-- store data to the table -->
<?php
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "finalproj");

	if(isset($_POST['insert']))
	{
		$project_id = $_POST['project_id'];
		$description = $_POST['description'];
		$version = $_POST['version'];

		$query = "INSERT INTO `requirement`(`project_id`,`description`, `version`) VALUES ('$project_id','$description','$version')";
		$query_run = mysqli_query($connection, $query);

		// display msg
		if($query_run)
		{
			echo '<script type="text/javascript"> alert("Data saved") </script>';
			header('location: view_requirement.php');
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
	<title>Add requirements | Project Manager</title>
	<style type="text/css">
		
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
	<div class="container">
	<p style="margin-left: 100px;">Add Requirements Here</p>
	<form action="add_req.php" method="POST">
		<label>Project ID: </label><br>
		<input type="text" class="txt" name="project_id" class="txt" placeholder="Project ID"><br>
		<label>Description: </label><br>
		<input type="text" class="txt" name="description" placeholder="About project / Requirement"><br>

		<label>Version: </label><br>
		<input type="text" class="txt" name="version" placeholder="Version of the project"><br>

		<input type="submit" name="insert" value="Submit" style="color: black">
		<button><a style="text-decoration: none; color: black" href="view_requirement.php">Back</a></button>
	</form>
	</div>
</body>
</html>