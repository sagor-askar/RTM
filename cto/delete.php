<?php
	$id= $_GET ['id'];
	$conn = mysqli_connect('localhost','root','','finalproj');

	$sql = "DELETE FROM `project` WHERE id=$id";
	
	if (mysqli_query($conn, $sql)) {
		header("Location: cto_run_proj.php");
	}
	else {
		echo "Not Deleted";
	}

?>
