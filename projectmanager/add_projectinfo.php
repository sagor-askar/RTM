<?php
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "finalproj");

	if(isset($_POST['insert']))
	{
		$name = $_POST['name'];
		$description = $_POST['description'];
		$deadline = $_POST['deadline'];
		$star_tdate = $_POST['start_date'];
		$end_date = $_POST['end_date'];
		$assigned_emp = $_POST['assigned_emp'];
		$status = $_POST["status"];

		$query = "INSERT INTO `project`(`name`,`description`, `deadline`,`star_tdate`,`end_date`, `assigned_emp`,`status`) VALUES ('$name','$description','$deadline','$start_date','$end_date',$assigned_emp','$status')";
		$query_run = mysqli_query($connection, $query);

		// display msg
		if($query_run)
		{
			header('location: projectinfo.php');
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
	<title>Add Project Info | Project Manager</title>
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
	<!-- inserting new entity -->
	<div class="container">
		<p style="margin-left: 100px;">Enlist Project Info here</p>
		<form action="add_projectinfo.php" method="POST">
			<label>Name: </label><br>
			<input type="text" class="txt" name="name" class="txt" placeholder="Enter project name or code to identify"><br>

			<label>Description: </label><br>
			<input type="text" class="txt" name="description" placeholder="Enter something about the project"><br>

			<label>Deadline: </label><br>
			<input type="text" class="txt" name="deadline" placeholder="Enter deadline of the project"><br>

			<label>start Date: </label>
			<input type="text" name="star_tdate" class="txt" placeholder="Enter start date for the project">

			<label>End Date: </label>
			<input type="text" name="end_date" class="txt" placeholder="Enter end date for the project">

			<label>Assigned Employee: </label><br>
			<input type="text" class="txt" name="assigned_emp" placeholder="Enter Assigned Employeefor the project"><br>

			<label>Status: </label><br>
			<input type="text" class="txt" name="status" placeholder="Completed or Ongoing?"><br>

			<input type="submit" name="insert" value="Submit" style="color: black">
			<button><a style="text-decoration: none; color: black" href="projectinfo.php">Back</a></button>
		</form>
	</div>
	<br>
</body>
</html>