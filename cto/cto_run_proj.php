<?php
	$conn = mysqli_connect('localhost','root','','finalproj');


	$sql = "SELECT * FROM project";
	$result = mysqli_query($conn, $sql);
?>






<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Project View | Controller</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
    	tr:hover {
    		background-color: #afd1db;
    	}
    </style>
  </head>

  <body>  
<br> <br>
    <div style="min-height: 500px;" class="container" >
      <div class="row">
        <div class="col-md-2"> <br>
          <a class="btn btn-success" href="insert.php">Add New Project</a>
        </div>
        <div class="col-md-12">
          <h2>Project List</h2> <hr>
          <table class="table">

            <thead>
              <th>Id</th>
              <th>Name</th>
              <th>Description</th>
              <th>Deadline</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Assigned Employee</th>
              <th>Status</th>
              <th>Action</th>
              
            </thead>
            <tbody>
              <?php 
              while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>  <!-- this will print the information from the database -->
                <td> <?php echo $row['id']?> </td>
                <td> <?php echo $row['name']?></td>
                <td> <?php echo $row['description']?></td>
                <td> <?php echo $row['deadline']?> </td>
                <td> <?php echo $row['start_date']?> </td>
                <td> <?php echo $row['end_date']?></td>
                <td> <?php echo $row['assigned_emp']?></td>
                <td> <?php echo $row['status']?></td>
                
                <td>
	                <a href="edit.php?id=<?php echo $row ['id']; ?>"><b>Edit |</b></a>
	                <a onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $row ['id']; ?>"><b>Delete</b></a>
	             </td>  
              </tr> 
              <?php  }  ?> 
            </tbody>
          </table>
          

        </div>
        
      </div>

      <a class="btn btn-success" href="../cto.php">Back</a>
      
    </div>
    <br>
    <br>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>