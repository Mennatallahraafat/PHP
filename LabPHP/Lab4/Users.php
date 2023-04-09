<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
			crossorigin="anonymous" />
		<link rel="stylesheet" href="style.css" />
		<title>Users Database</title>
	</head>
	<body>

		<div class="container mt-3">
			<div class="d-flex justify-content-between">
				<span class="h2">User Details</span>
				<a class="btn btn-success h-75" href="table.php"
					>Add New User</a
				>
			</div>
			<hr />
			<table class="table table-striped table-hover">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Gender</th>
					<th>Mail Status</th>
					
				</tr>

				<?php
		$db_host="localhost";
		$db_user="root";
		$db_pass="";
		$db_name="phplab";
		$con = mysqli_connect($db_host, $db_user, $db_pass);

		mysqli_select_db( $con,$db_name );
				$sql = "SELECT * FROM user";
				$result = mysqli_query( $con,$sql );
				// print_r(mysqli_fetch_assoc($result));
				if(! $result ) {
					die('Could not get data: ' . mysqli_error($con));
				 }
				 if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						$newMailStatus = $row['mail_status'] == 0 ? "no" : "yes";
					   echo "<tr>
					 <td>{$row['user_id']} </td>  
					 <td>{$row['user_name']} </td>  
					 <td>{$row['user_email']} </td> 
					 <td>{$row['gender']} </td> 
					 <td>$newMailStatus </td> 
					 
					   </tr>";
					}
					
				  } else {
					echo "NO results";
				  }
				 mysqli_close($con);
			
 ?>

			</table>
		</div>

 	<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
			crossorigin="anonymous"></script>
	</body>
</html>