<?php
	$id = $_GET ['id'];

	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$usertype = $_POST['usertype'];

	$conn = mysqli_connect('localhost','root','','finalproj');

	$sql = "UPDATE register SET name='$name', username='$username', email='$email', phone='$phone', usertype='$usertype' WHERE id=$id ";

	if (mysqli_query($conn, $sql) ) {
		header("location: system_users.php");
	}
	else {
		echo "Not Inserted";
	}

?> 