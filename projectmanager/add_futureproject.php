<?php
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "finalproj");

	if(isset($_POST['insert']))
	{
		$name = $_POST['name'];
		$description = $_POST['description'];
		$deadline = $_POST['deadline'];
		$assigned_emp = $_POST['assigned_emp'];

		$query = "INSERT INTO `futureproject`(`name`,`description`, `deadline`, `assigned_emp`) VALUES ('$name','$description','$deadline','$assigned_emp')";
		$query_run = mysqli_query($connection, $query);

		// display msg
		if($query_run)
		{
			// echo '<script type="text/javascript"> alert("Data saved") </script>';
			header('location: futureproject.php');
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
	<title>Add Future Project | Project Manager</title>
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

	<!-- inserting new entity -->
	<div class="container">
		<p style="margin-left: 100px;">Enlist Future Project</p>
		<form action="add_futureproject.php" method="POST">
			<label>Name: </label><br>
			<input type="text" class="txt" name="name" class="txt" placeholder="Project name or code"><br>

			<label>Description: </label><br>
			<input type="text" class="txt" name="description" placeholder="Something about the project"><br>

			<label>Deadline: </label><br>
			<input type="text" class="txt" name="deadline" placeholder="Deadline of the project"><br>

			<label>Assigned Employee: </label><br>
			<input type="text" class="txt" name="assigned_emp" placeholder="Assigned Employee for the project"><br>
			

			<input type="submit" name="insert" value="Submit" style="color: black">
			<button><a style="text-decoration: none; color: black" href="futureproject.php">Back</a></button>
		</form>
	</div>
	<br>

</body>
</html>