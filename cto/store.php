<?php 
	$name = $_POST['name'];
	$description = $_POST['description'];
	$deadline = $_POST['deadline'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$assigned_emp = $_POST['assigned_emp'];
	$status = $_POST['status'];

	$conn = mysqli_connect('localhost', 'root', '', 'finalproj');
	$sql = "INSERT INTO `project` VALUES (NULL, '$name', '$description', '$deadline', '$start_date', '$end_date', '$assigned_emp', '$status')";

	if(mysqli_query($conn, $sql)){
		header("location: cto_run_proj.php");
	}
	else{
		echo "Not Inserted!";
	}