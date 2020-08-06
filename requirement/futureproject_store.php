<?php 

	$project_id = $_POST['project_id'];
	$description = $_POST['description'];
	$version = $_POST['version'];

	$conn = mysqli_connect('localhost', 'root', '', 'finalproj');
	$sql = "INSERT INTO `future_requirement` VALUES (NULL, '$project_id', '$description', '$version')";

	if(mysqli_query($conn, $sql)){
		header("location: future_project.php");
	}
	else{
		echo "Not Inserted!";
	}