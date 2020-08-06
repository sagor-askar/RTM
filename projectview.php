<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "finalproj";
  // connection
  $con = mysqli_connect($servername, $username, $password, $dbname);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Projects Under Employee | CTO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images3/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor3/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts3/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor3/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor3/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor3/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css3/util_table.css">
	<link rel="stylesheet" type="text/css" href="css3/main_table.css">
</head>
<body>


	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">

					<!-- details of running projects -->
					<p style="font-size: 17px;" class="p1">Number of <b>Running Projects</b> : 
			          <?php
			            $sql = "SELECT count(id) AS total FROM `project` ";
			            $result = mysqli_query($con, $sql);
			            $values = mysqli_fetch_assoc($result);
			            $num_rows = $values['total'];
			            echo $num_rows;
			          ?>
			        </p>

					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Total projects</th>
								<th class="column100 column3" data-column="column3">Completed</th>
								<th class="column100 column4" data-column="column4">Ongoing</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">Sagor</td>
								<td>
									<?php
                    					$sql = "SELECT count(id) AS total FROM `project` WHERE assigned_emp='sagor' ";
                    					$result = mysqli_query($con, $sql);
                    					$values = mysqli_fetch_assoc($result);
                    					$num_rows = $values['total'];
                    					echo $num_rows;
                  					?>
								</td>

								<td>
									<?php
										$sql = "SELECT count(id) AS total FROM `project` WHERE assigned_emp='sagor' AND status='completed' ";
										$result = mysqli_query($con, $sql);
										$values = mysqli_fetch_assoc($result);
										$num_rows = $values['total'];
										echo $num_rows;
									?>
								</td>

								<td>
									<?php
										$sql = "SELECT count(id) AS total FROM `project` WHERE assigned_emp='sagor' AND status='Ongoing' ";
										$result = mysqli_query($con, $sql);
										$values = mysqli_fetch_assoc($result);
										$num_rows = $values['total'];
										echo $num_rows;
									?>
								</td>


							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Nadim</td>
								<td>
									<?php
                    					$sql = "SELECT count(id) AS total FROM `project` WHERE assigned_emp='nadim' ";
                    					$result = mysqli_query($con, $sql);
                    					$values = mysqli_fetch_assoc($result);
                    					$num_rows = $values['total'];
                    					echo $num_rows;
                  					?>
								</td>

								<td>
									<?php
										$sql = "SELECT count(id) AS total FROM `project` WHERE assigned_emp='nadim' AND status='completed' ";
										$result = mysqli_query($con, $sql);
										$values = mysqli_fetch_assoc($result);
										$num_rows = $values['total'];
										echo $num_rows;
									?>
								</td>

								<td>
									<?php
										$sql = "SELECT count(id) AS total FROM `project` WHERE assigned_emp='nadim' AND status='Ongoing' ";
										$result = mysqli_query($con, $sql);
										$values = mysqli_fetch_assoc($result);
										$num_rows = $values['total'];
										echo $num_rows;
									?>
								</td>								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Prome</td>
								<td>
									<?php
                    					$sql = "SELECT count(id) AS total FROM `project` WHERE assigned_emp='Prome' ";
                    					$result = mysqli_query($con, $sql);
                    					$values = mysqli_fetch_assoc($result);
                    					$num_rows = $values['total'];
                    					echo $num_rows;
                  					?>
								</td>

								<td>
									<?php
										$sql = "SELECT count(id) AS total FROM `project` WHERE assigned_emp='prome' AND status='completed' ";
										$result = mysqli_query($con, $sql);
										$values = mysqli_fetch_assoc($result);
										$num_rows = $values['total'];
										echo $num_rows;
									?>
								</td>

								<td>
									<?php
										$sql = "SELECT count(id) AS total FROM `project` WHERE assigned_emp='prome' AND status='Ongoing' ";
										$result = mysqli_query($con, $sql);
										$values = mysqli_fetch_assoc($result);
										$num_rows = $values['total'];
										echo $num_rows;
									?>
								</td>								
							</tr>
						</tbody>
					</table>
					<br>
					<br>
					<br>

					<!-- Details of pending projects -->
					<p style="font-size: 17px;" class="p1">Number of <b>Pending Projects</b> : 
	                  <?php
	                    $sql = "SELECT count(id) AS total FROM `futureproject` ";
	                    $result = mysqli_query($con, $sql);
	                    $values = mysqli_fetch_assoc($result);
	                    $num_rows = $values['total'];
	                    echo $num_rows;
	                  ?>
                	</p>
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2">Total projects</th>
								<th class="column100 column3" data-column="column3">Completed</th>
								<th class="column100 column4" data-column="column4">Ongoing</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">Sagor</td>
								<td>
									<?php
                    					$sql = "SELECT count(id) AS total FROM `futureproject` WHERE assigned_emp='sagor' ";
                    					$result = mysqli_query($con, $sql);
                    					$values = mysqli_fetch_assoc($result);
                    					$num_rows = $values['total'];
                    					echo $num_rows;
                  					?>
								</td>

								<td>
									<?php
										$sql = "SELECT count(id) AS total FROM `futureproject` WHERE assigned_emp='sagor' AND status='completed' ";
										$result = mysqli_query($con, $sql);
										$values = mysqli_fetch_assoc($result);
										$num_rows = $values['total'];
										echo $num_rows;
									?>
								</td>

								<td>
									<?php
										$sql = "SELECT count(id) AS total FROM `futureproject` WHERE assigned_emp='sagor' AND status='Ongoing' ";
										$result = mysqli_query($con, $sql);
										$values = mysqli_fetch_assoc($result);
										$num_rows = $values['total'];
										echo $num_rows;
									?>
								</td>


							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Nadim</td>
								<td>
									<?php
                    					$sql = "SELECT count(id) AS total FROM `futureproject` WHERE assigned_emp='nadim' ";
                    					$result = mysqli_query($con, $sql);
                    					$values = mysqli_fetch_assoc($result);
                    					$num_rows = $values['total'];
                    					echo $num_rows;
                  					?>
								</td>

								<td>
									<?php
										$sql = "SELECT count(id) AS total FROM `futureproject` WHERE assigned_emp='nadim' AND status='completed' ";
										$result = mysqli_query($con, $sql);
										$values = mysqli_fetch_assoc($result);
										$num_rows = $values['total'];
										echo $num_rows;
									?>
								</td>

								<td>
									<?php
										$sql = "SELECT count(id) AS total FROM `futureproject` WHERE assigned_emp='nadim' AND status='Ongoing' ";
										$result = mysqli_query($con, $sql);
										$values = mysqli_fetch_assoc($result);
										$num_rows = $values['total'];
										echo $num_rows;
									?>
								</td>								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Prome</td>
								<td>
									<?php
                    					$sql = "SELECT count(id) AS total FROM `futureproject` WHERE assigned_emp='Prome' ";
                    					$result = mysqli_query($con, $sql);
                    					$values = mysqli_fetch_assoc($result);
                    					$num_rows = $values['total'];
                    					echo $num_rows;
                  					?>
								</td>

								<td>
									<?php
										$sql = "SELECT count(id) AS total FROM `futureproject` WHERE assigned_emp='prome' AND status='completed' ";
										$result = mysqli_query($con, $sql);
										$values = mysqli_fetch_assoc($result);
										$num_rows = $values['total'];
										echo $num_rows;
									?>
								</td>

								<td>
									<?php
										$sql = "SELECT count(id) AS total FROM `futureproject` WHERE assigned_emp='prome' AND status='Ongoing' ";
										$result = mysqli_query($con, $sql);
										$values = mysqli_fetch_assoc($result);
										$num_rows = $values['total'];
										echo $num_rows;
									?>
								</td>								
							</tr>
						</tbody>
					</table>
					<br>
					<button type="button" class="btn btn-primary"><a style="color: white;" href="cto.php">Back</a></button>
				</div>
			</div>
		</div>
	</div>

	
	<script src="vendor3/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor3/bootstrap/js/popper.js"></script>
	<script src="vendor3/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor3/select2/select2.min.js"></script>
	<script src="js3/main.js"></script>

</body>
</html>