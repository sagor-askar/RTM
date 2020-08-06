<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `future_requirement` WHERE CONCAT(`id`, `project_id`, `description`, `version`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `future_requirement`";
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
    <title>Requirements of Pending Projects | Controller</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 99%;
            border: 0.5px solid gray;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            border: 0.5px solid gray;
        }
        th {
            background-color: black;
            color: white;
            height: 25px;
        }
        tr:nth-child(even){
            background-color: #dddddd;
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
            background-color: : Royalblue;
        }
        .h2 {
            text-align: center;
            font-family: cursive;
        }

    </style>
</head>
<body>

    <h2 class="h2">Requirements List of Pending Projects</h2>
        
        <form action="futureproject_project.php" method="post">
            <div style="float: left;">
                <input type="text" name="valueToSearch" class="btn-search" placeholder="Search Here">
                <!-- <input type="submit" name="search" value="Search"> -->
                <button type="submit" name="search"><i class="fa fa-search"></i></button>
            </div>

            <div style="float: right;">
                <button class="btn"><i class="fa fa-plus" aria-hidden="true"><a style="text-decoration: none; color: white;" href="futureproject_insert.php">Add</a></i></button>
            </div>

            <!-- addition of project to list -->
            <br><br>
            <table>

            <thead>
              <th>Id</th>
              <th>Project ID</th>
              <th>Description</th>
              <th>Version</th>
              <th>Action</th>   
            </thead>

            <tbody>
              <?php 
              while ($row = mysqli_fetch_assoc($search_result)) { ?>
              <tr>  <!-- this will print the information from the database -->
                <td> <?php echo $row['id']?> </td>
                <td> <?php echo $row['project_id']?></td>
                <td> <?php echo $row['description']?></td>
                <td> <?php echo $row['version']?> </td>
                
                <!-- action method -->
                <td>
                    <a href="futureproject_edit.php?id=<?php echo $row ['id']; ?>"><b>Update</b></a>
                </td>  
              </tr> 
              <?php  }  ?> 
            </tbody>
          </table>
            <br>
            <button class="btn2"><i class="fa fa-backward" aria-hidden="true"><a style="text-decoration: none; color: white;" href="../cto.php"> Back</a></i></button>
        </form>
</body>
</html>