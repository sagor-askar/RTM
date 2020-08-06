<?php 
	$name = $_POST['name'];
	$description = $_POST['description'];
	$deadline = $_POST['deadline'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$assigned_emp = $_POST['assigned_emp'];
	$status = $_POST['status'];

	$conn = mysqli_connect('localhost', 'root', '', 'finalproj');
	$sql = "INSERT INTO `futureproject` VALUES (NULL, '$name', '$description', '$deadline', '$assigned_emp', '$status')";

	if(mysqli_query($conn, $sql)){
		header("location: cto_futureproj.php");
	}
	else{
		echo "Not Inserted!";
	}