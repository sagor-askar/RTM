<?php 

	$project_id = $_POST['project_id'];
	$description = $_POST['description'];
	$version = $_POST['version'];

	$conn = mysqli_connect('localhost', 'root', '', 'finalproj');
	$sql = "INSERT INTO `requirement` VALUES (NULL, '$project_id', '$description', '$version')";

	if(mysqli_query($conn, $sql)){
		header("location: running_project.php");
	}
	else{
		echo "Not Inserted!";
	}