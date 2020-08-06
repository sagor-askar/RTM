<?php

    if(isset($_POST['search']))
    {
        $valueToSearch = $_POST['valueToSearch'];
        // search in all table columns
        // using concat mysql function
        $query = "SELECT * FROM `project` WHERE CONCAT(`id`, `name`, `description`, `deadline`,`start_date`,`end_date`,`assigned_emp`,`status`) LIKE '%".$valueToSearch."%'";
        $search_result = filterTable($query);
        
    }
     else {
        $query = "SELECT * FROM `project`";
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
    <head><title>Project Info | Project Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    	body{
			background-color: #b3cce6;
		}
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
        table tr {
            border: 0.5px solid black;
        }
        table tr:nth-child(even){
            background-color: #f2f2f2;
            height: 25px;
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
            width: 200px;
            text-decoration: none;
            color: black;
            border-radius: 3px;
        }
        .add_info {
            margin-left: 18px;
            height: 30px;
            width: 210px;
            text-decoration: none;
            color: black;
            border-radius: 5px;
            border: 1px solid black;
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
        .btn-search {
            /*border: 0.5px solid #d0d2d9;*/
            /*color: white;*/
            padding: 8px 12px;
            font-size: 15px;
            cursor: pointer;
            margin-left: 10px;
            height: 12px;
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
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>
    <body>
        <h2 class="h2">Project List</h2>
        
        <form action="projectinfo.php" method="post">
            <div style="float: left;">
                <input style="border-radius: 5px;" type="text" name="valueToSearch" class="btn-search" placeholder="Search Here">
                <!-- <input type="submit" name="search" value="Search"> -->
                <button type="submit" name="search"><i class="fa fa-search"></i></button>
            </div>

            <div style="float: right;">
                <button title="Add new item" class="btn"><a style="text-decoration: none; color: white;" href="add_projectinfo.php"> Add item</a></button>
            </div>

            <!-- addition of project to list -->
            <br><br>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Deadline</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Assigned Employee</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['deadline'];?></td>
                    <td><?php echo $row['start_date'];?></td>
                    <td><?php echo $row['end_date'];?></td>
                    <td><?php echo $row['assigned_emp'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <!-- action method -->
                    <td>
                        <a style="text-decoration: none; font-size: 14px;" href="update_projectinfo.php?id=<?php echo $row ['id']; ?>"><b>Update</b></a>
                    </td> 
                  
                    </tr>
                <?php endwhile;?>
            </table>
            <br>
                <button class="btn2"><a style="text-decoration: none; color: white;" href="../home.php"> Back</a></button>
        </form>
        
    </body>
</html>