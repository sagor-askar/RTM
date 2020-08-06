
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
   
<br> <br>
    <div style="min-height: 500px;" class="container" >
      <div class="row">
        <div class="col-md-2">  <br>
          <a class="btn btn-success" href="running_project.php">Requirements List</a>
        </div>
        <div class="col-md-10">
          <br>
          <h2 style="font-family: cursive;">Add New Item</h2>
          <hr>


          <form action="store.php" method="POST">


            <div class="form-group">
              <label for="Name">Project ID:</label>
              <input type="text" class="form-control" name="project_id" placeholder="Project ID">
            </div>

            <div class="form-group">
              <label for="Name">Description:</label>
              <input type="text" class="form-control" name="description" placeholder="Description">
            </div>

            <div class="form-group">
              <label for="Name">Version:</label>
              <input type="text" class="form-control" name="version" placeholder="Version of the related system">
            </div>

            <button name="insert" type="submit" class="btn btn-success">Submit</button>

          </form>


         </div>
      </div>
      
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