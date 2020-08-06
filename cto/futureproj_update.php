<?php
	$id = $_GET ['id'];

	$name = $_POST['name'];
	$description = $_POST['description'];
	$deadline = $_POST['deadline'];
	$assigned_emp = $_POST['assigned_emp'];
	$status = $_POST['status'];

	$conn = mysqli_connect('localhost','root','','finalproj');

	$sql = "UPDATE `futureproject` SET name='$name', description='$description', deadline='$deadline', assigned_emp='$assigned_emp', status='$status' WHERE id=$id ";

	if (mysqli_query($conn, $sql) ) {
		header("location: cto_futureproj.php");
	}
	else {
		echo "Not Inserted";
	}

?> 