<?php 
	$p_id = $_POST['p_id'];
	$r_id = $_POST['r_id'];
	$r_description = $_POST['r_description'];
	$version = $_POST['version'];
	$link = $_POST['link'];
	$assigned_emp = $_POST['assigned_emp'];
	$tcase_id = $_POST['tcase_id'];
	$priority = $_POST['priority'];

	$conn = mysqli_connect('localhost', 'root', '', 'finalproj');
	$sql = "INSERT INTO `matrixtable` VALUES (NULL, '$p_id', '$r_id', '$r-description', '$version', '$link', '$assigned_emp', '$tcase_id', '$priority')";

	if(mysqli_query($conn, $sql)){
		header("location: cto_matrix.php");
	}
	else{
		echo "Not Inserted!";
	}