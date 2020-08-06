<?php

	if(isset($_POST['search']))
	{
	    $valueToSearch = $_POST['valueToSearch'];
	    // search in all table columns
	    // using concat mysql function
	    // $query = "SELECT * FROM `requirement` WHERE CONCAT(`id`, `project_id`, `description`, `version`) LIKE '%".$valueToSearch."%'";
	    $query = "SELECT * FROM `requirement` WHERE CONCAT(`project_id`) LIKE '%".$valueToSearch."%'";
	    $search_result = filterTable($query);
	    
	}
	 else {
	    $query = "SELECT * FROM `requirement`";
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
	<title>View Requirements from here</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
			color: #274c87;
			font-family: verdana;
			font-size: 15px;
			text-align: left;
		}
		table th {
			background-color: #274c87;
			color: white;
			height: 35px;
			border-radius: 4px;
			text-align: center;
		}
		table tr:nth-child(even){
			background-color: #f2f2f2;
			height: 25px;
		}

		body{
			background-color: #b3cce6;
		}

		.btn {
			 background-color: #374247;
			 border: none;
			 color: white;
			 padding: 8px 12px;
			 font-size: 15px;
			 cursor: pointer;
			 border-radius: 4px;
			 margin-right: 15px;
		}
		.se_header{
			font-family: "Times New Roman", Times, serif;
			font-weight: lighter;
			font-size: 25px;
			text-align: center;
			text-decoration: none;
		}

	</style>
</head>
<body>
	<div class="se_header">
		<p>List of Requirements</p>
	</div>
	
<form action="se_requirement.php" method="post">
            <div style="float: left;">
                <input type="text" name="valueToSearch" class="btn-search" placeholder="Enter Project Id">
                <!-- <input type="submit" name="search" value="Search"> -->
                <button type="submit" name="search"><i class="fa fa-search"></i></button>
            </div>

            <!-- addition of project to list -->
            <br><br>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Project ID</th>
                    <th>Description</th>
                    <th>Version</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['project_id'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['version'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
	<br>
	<br>

	<button class="btn"><i class="fa fa-backward" aria-hidden="ture"><a style="text-decoration: none; color: white;" href="../se_home.php"> Home</i></a></button>


</body>
</html>