<?php
	$id= $_GET ['id'];
	$conn = mysqli_connect('localhost','root','','finalproj');

	$sql = "DELETE FROM `futureproject` WHERE id=$id";
	
	if (mysqli_query($conn, $sql)) {
		header("Location: cto_futureproj.php");
	}
	else {
		echo "Not Deleted";
	}

?>
