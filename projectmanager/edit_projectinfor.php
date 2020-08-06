<?php
	$id = $_GET ['id'];

	$name = $_POST['name'];
	$description = $_POST['description'];
	$deadline = $_POST['deadline'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];
	$assigned_emp = $_POST['assigned_emp'];
	$status = $_POST['status'];

	$conn = mysqli_connect('localhost','root','','finalproj');

	$sql = "UPDATE project SET name='$name', description='$description', deadline='$deadline', start_date='$start_date', end_date='$end_date', assigned_emp='$assigned_emp', status='$status' WHERE id=$id ";

	if (mysqli_query($conn, $sql) ) {
		header("location: projectinfo.php");
	}
	else {
		echo "Not Inserted";
	}

?> 