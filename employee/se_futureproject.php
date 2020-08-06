<?php

	if(isset($_POST['search']))
	{
	    $valueToSearch = $_POST['valueToSearch'];
	    // search in all table columns
	    // using concat mysql function
	    $query = "SELECT * FROM `futureproject` WHERE CONCAT(`id`, `name`, `description`, `deadline`,`assigned_emp`) LIKE '%".$valueToSearch."%'";
	    $search_result = filterTable($query);
	    
	}
	 else {
	    $query = "SELECT * FROM `futureproject`";
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
	<title>Project Info</title>
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
		table tr {
			border: 0.5px solid black;
		}
		.h2 {
			text-align: center;
			font-family: "Times New Roman", Times, serif;
		}
		.btn {
			 background-color: #374247;
			 border: none;
			 color: white;
			 padding: 8px 12px;
			 font-size: 15px;
			 cursor: pointer;
			 border-radius: 4px;
			 float: right;
			 margin-right: 15px;
		}
	</style>
</head>
<body>

	<h2 style="font-family: Optima, sans-serif; text-align: center;">List of Pending Projects</h2>

	<form action="se_futureproject.php" method="post">
            <div style="float: left;">
                <input type="text" name="valueToSearch" class="btn-search" placeholder="Search Here">
                <!-- <input type="submit" name="search" value="Search"> -->
                <button type="submit" name="search"><i class="fa fa-search"></i></button>
            </div>


            <!-- addition of project to list -->
            <br><br>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Deadline</th>
                    <th>Assigned Employee</th>
                </tr>

      			<!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['deadline'];?></td>
                <td><?php echo $row['assigned_emp'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
	<br>
	<br>

	<button class="add_projectinfo"><a style="text-decoration: none;" href="se_requirement.php">View Requirements</a></button> <br>
	<br>
	<button class="add_projectinfo"><a style="text-decoration: none;" href="../se_home.php">Back</a></button>
</body>
</html>