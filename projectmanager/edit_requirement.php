<?php
	$id = $_GET ['id'];

	$project_id = $_POST['project_id'];
	$description = $_POST['description'];
	$version = $_POST['version'];

	$conn = mysqli_connect('localhost','root','','finalproj');

	$sql = "UPDATE requirement SET project_id='$project_id', description='$description', version='$version' WHERE id=$id ";

	if (mysqli_query($conn, $sql) ) {
		header("location: view_requirement.php");
	}
	else {
		echo "Not Inserted";
	}

?> 