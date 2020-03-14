<!DOCTYPE html>
<html>
<body>
<div class="container" id="main-content">
	<h2>Your Profile</h2>
	<?php
	//set database connection configuration
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "clubdb";
	// Create connection
	$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname)
		or die("Connection failed: " . mysqli_connect_error());
	if ($conn)
	{
		$sql = "SELECT name, dob, gender, email, username, password FROM details";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
		echo "<table border = '1'>";
		echo "<tr><th>Name</th><th>Date of Birth</th><th>Gender</th><th>Email</th><th>Username</th></tr>";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>" . $row["name"]. "</td>";
			echo "<td>" . $row["dob"] . "</td>";
			echo "<td>" . $row["gender"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
			echo "<td>" . $row["username"] . "</td>";
			echo "<td><a href = 'edit.php?username=" . $row["username"]."'>Edit</a></td>";
			echo "<td><a href = 'delete.php?username=" . $row["username"]."'>Delete</a></td>";
			echo "</tr>";
		}
			echo "</table>";
		} else {
			echo "no data found";}
	}
	?>
	</br><a href="logout.php">Logout</a>
	</div>
</html>
