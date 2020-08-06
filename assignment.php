<!DOCTYPE html>
<html>
<head>
	<title>Assign Project</title>
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

		.container {
			margin-left: 100px;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="asignment.php" method="POST">
			<input type="text" class="txt" name="name" class="txt">
			<input type="text" class="txt" name="description"><br>
			<input type="email" class="txt" name="deadline" >
			<input type="text" class="txt" name="start_date"><br>
			<input type="password" class="txt" name="end_date">

			<label>Assignment: </label><br>
			Project Manager -<br>	
			<input type="radio" name="assignment" value="P">P<br>
			<input type="radio" name="assignment" value="Q">Q<br>
			<input type="radio" name="assignment" value="R">R<br>
			<input type="radio" name="assignment" value="S">S<br>
			
			Team leader -	<br>
			<input type="radio" name="assignment" value="P">P<br>
			<input type="radio" name="assignment" value="P">Q<br>
			<input type="radio" name="assignment" value="P">R<br>
			<input type="radio" name="assignment" value="P">S<br>

			Software Engineer - <br>
			<input type="radio" name="assignment" value="P">P<br>
			<input type="radio" name="assignment" value="P">Q<br>
			<input type="radio" name="assignment" value="P">R<br>
			<input type="radio" name="assignment" value="P">S<br>


			<input type="submit" name="register" value="SUBMIT" style=" background-color: #79a4d2; color: black">
			<br>
		</form>
	</div>



	<!-- view projects -->
	<table>
		<tr>
			<th>ID</th>
			<th>Name/Code</th>
			<th>Description</th>
			<th>Deadline</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Assigned Employee</th>
		</tr>
		<?php
			$conn = mysqli_connect("localhost", "root", "", "finalproj");

			if($conn -> connect_error)
			{
				die("connection failed:". $conn -> connect_error);
			}

			$sql = "SELECT * FROM project";
			$result = $conn -> query($sql);

			if($result -> num_rows > 0)
			{
				while($row = $result -> fetch_assoc())
				{
					echo "<tr><td>". $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td><td>" . $row["deadline"] . "</td><td>" . $row["start_date"] . "</td><td>" . $row["end_date"] . "</td><td>" . $row["assigned_emp"] . "</td></tr>";
				}
				echo "</table>";
			}
			else 
			{
				echo "No project is runnig...";
			}

		?>
	</table>

</body>
</html>