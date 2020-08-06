<?php

	if(isset($_POST['search']))
	{
	    $valueToSearch = $_POST['valueToSearch'];
	    // search in all table columns
	    // using concat mysql function
	    $query = "SELECT * FROM `matrixtable` WHERE CONCAT(`r_id`, `assigned_emp`, `tcase_id`, `priority`) LIKE '%".$valueToSearch."%'";
	    $search_result = filterTable($query);
	    
	}
	 else {
	    $query = "SELECT * FROM `matrixtable`";
	    $search_result = filterTable($query);
	}

	// function to connect and execute the query
	function filterTable($query)
	{
	    $connect = mysqli_connect("localhost", "root", "", "finalproj");
	    $filter_Result = mysqli_query($connect, $query);
	    return $filter_Result;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Matrix View | Project Manager</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body {
			background-color: #d8e4eb;
		}
		table {
			border-collapse: collapse;
			width: 100%;
			color: #274c87;
			font-family: verdana;
			font-size: 15px;
			text-align: center;
		}
		table th {
			background-color: #274c87;
			color: white;
			height: 35px;
			border-radius: 4px;
			text-align: center;
		}
		table tr {
			border: 0.5px solid black;
		}
		table tr:nth-child(even){
			background-color: #f2f2f2;
			height: 33px;
		}
		#button-req {
			height: 40px;
			width: 20%;
			background-color: #006699;
			color: white;
			font-family: verdana;
			border-radius: 5px;
		}
		#button-back {
			height: 34px;
			width: 10%;
			background-color: #006699;
			font-family: verdana;
			border-radius: 5px;
		}

		.add_projectinfo {
			margin-left: 20px;
			height: 25px;
			width: 100px;
			text-decoration: none;
			color: black;
			border-radius: 3px;
		}
		.header {
			text-align: center;
			font-family: verdana;
		}
	</style>
</head>
<body>

	<h2 class="header"><a title="click here to refresh the page" style="text-decoration: none;" href="matrix.php">Traceability Matrix</a></h2>

	<!-- new task -->
	<form action="matrix.php" method="POST">
	    <div style="float: left;">
	    	<input title="Search here by using R-ID/P-ID/Assigned Emp/Test Case ID" type="text" name="valueToSearch" class="btn-search" placeholder="Search Here...">
	    	<button type="submit" name="search"><i class="fa fa-search"></i></button>
	    </div>

	    <button style="float: right;"><a style="text-decoration: none;" href="add_matrix.php">Add Item</a></button>

    <br>
    <br>
		<table>
			<tr>
				<th>ID</th>
				<th>P-ID</th>
				<th>R-ID</th>
				<th>Description</th>
				<th>Version</th>
				<th>Link</th>
				<th>Assigned Employee</th>
				<th>Test Case ID</th>
				<th>Priority</th>
				<th>Action</th>
			</tr>
			 <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                	<td><?php echo $row['id'];?></td>
                	<td><?php echo $row['p_id'];?></td>
                	<td><?php echo $row['r_id'];?></td>
                	<td><?php echo $row['r_description'];?></td>
                	<td><?php echo $row['version'];?></td>
                	<td><a href="#"><?php echo $row['link'];?></a></td>
                	<td><?php echo $row['assigned_emp'];?></td>
                	<td><?php echo $row['tcase_id'];?></td>
                	<td><?php echo $row['priority'];?></td>
					
	                <!-- action method -->
	                <td>
	                    <a href="cto_matrix.edit.php?id=<?php echo $row ['id']; ?>"><b>Update</b></a>
	                </td>  
                </tr>
              <?php endwhile;?>
		</table>
	</form>
	<br>
	<br> 
	<br>

	<button class="add_projectinfo"><a style="text-decoration: none;" href="../cto.php">Home</a></button>
	


</body>
</html>