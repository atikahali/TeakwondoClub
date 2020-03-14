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
		<h1>Sign In to World Taekwondo Federation</h1>
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
	<h2>Sign In</h2>
	<?php 
	if (isset($_POST["login"])) {
		$servername = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "clubdb";
		// Create connection
		$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname) or die("Connection failed: " . mysqli_connect_error());;
 
		echo "<p>Welcome</p>";
		$username = $_POST["username"];
		$password = $_POST["password"];
    
		if ($conn) {
			$sql = "SELECT name, dob, gender, email, username, password
					FROM `details`
					WHERE username = '$username' AND password = password('$password')";
			
			$result = mysqli_query($conn, $sql);
        	$row = mysqli_fetch_assoc($result);
			
        	//if ($username == 'admin" && $pwd == 'abc') {
        	if (mysqli_num_rows($result) == 1) {
				echo "Login success";
				$_SESSION['username'] = $row["username"];
				setcookie('username', $row["username"]);
				echo '<p>Hello ' . $_SESSION['username'] . '</p>';
            	include "view.php";
			} else {
				echo "login failed";
				include "loginform.php";
			} 
    	}
 	} else {
      	echo "Please enter your Username and Password";
			include "loginform.php";
 	}
	?>
	</div>
	
	<div class="footer">
		Atikah Ali &copy; <?php print date("Y");?>
	</div>

</body>
</html>