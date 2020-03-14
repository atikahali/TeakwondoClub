<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/indivassg/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/indivassg/register.php":
			$CURRENT_PAGE = "Register"; 
			$PAGE_TITLE = "Registeration";
			break;
		case "/indivassg/login.php":
			$CURRENT_PAGE = "Sign In"; 
			$PAGE_TITLE = "Sign In";
			break;
		default:
			$CURRENT_PAGE = "Homepage";
			$PAGE_TITLE = "Taekwondo Club";
	}
?>
<!DOCTYPE html>
<html>
<head>
	
	<title><?php print $PAGE_TITLE;?></title>

	<?php if ($CURRENT_PAGE == "Homepage") { ?>
	<meta name="description" content="" />
	<meta name="keywords" content="" /> 
	<?php } ?>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		#main-content {
		margin-top:20px;
		}
		.footer {
			font-size: 14px;
			text-align: center;
		}
	</style>
	
</head>
<body>

	<div class="jumbotron">
		<h1>Are You Sure Want to Leave Us?</h1>
		<img id="backgroundimage" src="0b5e122401137acd4029a30585e894fb.jpg">
		<style>
			body {
    			background-image: url("13578b1b0959038_nobackground.jpg");
    			background-repeat: no-repeat;
    			background-position: right top;
    			margin-right: 200px;
    			background-attachment: fixed;
			}
		</style>
	</div>
	
	<div class="container">
		<ul class="nav nav-pills">
	 	 <li class="nav-item">
	  	  <a class="nav-link <?php if ($CURRENT_PAGE == "Homepage") {?>active<?php }?>" href="homepage.php">Home</a>
	  	</li>
	 	 <li class="nav-item">
	    	<a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About Us</a>
	 	 </li>
	 	 <li class="nav-item">
	    	<a class="nav-link <?php if ($CURRENT_PAGE == "Register") {?>active<?php }?>" href="register.php">Register</a>
	  	</li>
			<li class="nav-item">
	    	<a class="nav-link <?php if ($CURRENT_PAGE == "Sign In") {?>active<?php }?>" href="login.php">Sign In</a>
	  	</li>
		</ul>
	</div>

<div class="container" id="main-content">
	<h2>Profile Delete</h2>
	<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "clubdb";
	$name = '';
	$dob = '';
	$gender = '';
	$email = '';
	$username = '';
	$password = '';

	if (isset($_GET['username'])) {
  		$username = $_GET['username'];
   		
		// Create connection
  		$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

		// Check connection
		if (!$conn) {
  			die("Connection failed: " .mysqli_connect_error());
		}
							   
		$sql = "SELECT name, dob, gender, email, username, password FROM details WHERE username = '$username'";
		$result = mysqli_query($conn, $sql);
							   
		if (mysqli_num_rows($result) > 0) {
  			// output data of each row
  			$row = mysqli_fetch_assoc($result);
  			$name = $row['name'];
			$dob = $row['dob'];
			$gender = $row['gender'];
			$email = $row['email'];
			$username = $row['username'];
			$password = $row['password'];
  		} else {
			echo "0 results";
  		}
  		mysqli_close($conn);
	}
	?>
	
	<form method="post" action="<?php print $_SERVER['PHP_SELF']?>?username=<?php print $username?>">
		Name:
			<input type="text" name="name" value="<?php print $name?>" disabled="disabled"></br>	
		Date  of Birth:
			<input type="date" name="dob" value="<?php print $dob?>" disabled="disabled"></br>
		Gender:
			<input type="radio" name="gender" value="<?php print $gender?>" disabled="disabled">Male
			<input type="radio" name="gender" value="<?php print $gender?>" disabled="disabled">Female</br>
		Email:
			<input type="text" name="email" value="<?php print $email?>" disabled="disabled"></br>
		Username:
			<input type="text" name="username" value="<?php print $username?>" disabled="disabled"></br>
		Password:
			<input type="password" name="password" value="<?php print $password?>"></br>
		</br>
	
		<input type="hidden" name="username" value="<?php print $username?>">
		<input type="submit" name="DeleteUser" value=" OK"></br>
	</form>

	<?php
	if (isset($_POST['DeleteUser'])){
		$username = $_POST['username'];
		$conn = mysqli_connect("127.0.0.1", "root", "", "clubdb") or die (mysql_error ());
		
		// SQL query
		$sql = "DELETE FROM details WHERE username = '$username'";
		
		// Execute the query (the recordset $rs contains the result)
		if (mysqli_query($conn, $sql)) {
			echo "The record is deleted successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
	?>
	</br><a href="view.php">Back to Profile Page</a>
	</br><a href="logout.php">Logout</a>
	</div>

	<div class="footer">
		Atikah Ali &copy; <?php print date("Y");?>
	</div>

</body>
</html>
