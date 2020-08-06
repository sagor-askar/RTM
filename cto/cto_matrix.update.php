<?php
	$id = $_GET ['id'];

	$p_id = $_POST['p_id'];
	$r_id = $_POST['r_id'];
	$r_description = $_POST['r_description'];
	$version = $_POST['version'];
	$link = $_POST['link'];
	$assigned_emp = $_POST['assigned_emp'];
	$tcase_id = $_POST['tcase_id'];
	$priority = $_POST['priority'];

	$conn = mysqli_connect('localhost','root','','finalproj');

	$sql = "UPDATE matrixtable SET p_id='$p_id', r_id='$r_id', r_description='$r_description', version='$version', link='$link', assigned_emp='$assigned_emp', tcase_id='$tcase_id', priority='$priority' WHERE id=$id ";

	if (mysqli_query($conn, $sql) ) {
		header("location: cto_matrix.php");
	}
	else {
		echo "Not Inserted";
	}

?> 