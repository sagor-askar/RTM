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
	<title>Requirements View | Project Manager</title>
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
		table td {
			border: 0.3px solid black;
		}
		table tr:nth-child(even){
			background-color: #f2f2f2;
			height: 25px;
		}
		table tr {
			border: 0.5px solid black;
			text-align: center;
		}

		body{
			background-color: #b3cce6;
		}

		.add_req {
			margin-left: 20px;
			height: 25px;
			width: 200px;
			text-decoration: none;
			color: black;
			border-radius: 3px;
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
		.btn2 {
			 background-color: #374247;
			 border: none;
			 color: white;
			 padding: 8px 12px;
			 font-size: 15px;
			 cursor: pointer;
			 border-radius: 4px;
		}

		/* Darker background on mouse-over */
		.btn:hover {
  			background-color: RoyalBlue;
		}
		.btn2:hover {
			background-color: Royalblue;
		}

		.h2 {
			text-align: center;
			font-family: "Times New Roman", Times, Serif;
		}

	</style>
</head>
<body>
        <h2 class="h2">Project List</h2>
        
        <form action="view_requirement.php" method="post">
            <div style="float: left;">
                <input type="text" name="valueToSearch" class="btn-search" placeholder="Enter Project Id">
                <!-- <input type="submit" name="search" value="Search"> -->
                <button type="submit" name="search"><i class="fa fa-search"></i></button>
            </div>

            <div style="float: right;">
                <button class="btn"><i class="fa fa-plus" aria-hidden="true"><a style="text-decoration: none; color: white;" href="add_req.php"> Add</a></i></button>
            </div>

            <!-- addition of project to list -->
            <br><br>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Project ID</th>
                    <th>Description</th>
                    <th>Version</th>
                    <th>Action</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['project_id'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['version'];?></td>
                <td>
                   <a style="text-decoration: none; font-size: 14px;" href="update_requirement.php?id=<?php echo $row ['id']; ?>"><b>Update</b></a>
                </td> 
                  
                </tr>
                <?php endwhile;?>
            </table>
            <br>
            <button class="btn2"><i class="fa fa-backward" aria-hidden="true"><a style="text-decoration: none; color: white;" href="../home.php"> Back</a></i></button>
        </form>
        
    </body>
</html>