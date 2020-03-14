<?php
//set database connection configuration
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "clubdb";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname) or die("Connection failed: " . mysqli_connect_error());
if ($conn) {
    $sql = "SELECT name, dob, gender, email, username, password FROM `details`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>name</th><th>dob</th><th>gender</th><th>email</th><th>username</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["name"] . "</td>";
            echo "<td>". $row["dob"] . "</td>";
            echo "<td>".  $row["gender"] . "</td></tr>";
			echo "<td>".  $row["email"] . "</td></tr>";
			echo "<td>".  $row["username"] . "</td></tr>";
        }
        echo "</table>";
        
    }
}