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
		<h1>Join World Taekwondo Federation Now!</h1>
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
	<h2>Registeration Form</h2>
	<p>Show your support for your club by signing up today.</p>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
	Name:
		<input type="text" name="name" value=""></br>
	Date  of Birth:
		<input type="date" name="dob" value=""></br>
	Gender:
		<input type="radio" name="gender" value="Male"> Male
		<input type="radio" name="gender" value="Female"> Female </br>
	Email:
		<input type="text" name="email" value=""></br>
	Username:
		<input type="text" name="username" value=""></br>
	Password:
		<input type="password" name="password" value=""></br>
	
	</br>
	<input type="submit" name="AddUser" value=" Register "></br>
	</form>

	<?php
	if (isset($_POST['AddUser'])){
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
    
		$conn = mysqli_connect("127.0.0.1", "root", "", "clubdb") or die (mysql_error ());
        
    	// SQL query
		$sql = "INSERT INTO details (name, dob, gender, email, username, password) VALUES ('$name', '$dob', '$gender', '$email', '$username', PASSWORD('$password'))";
        
    	// Execute the query (the recordset $rs contains the result)
    	if (mysqli_query($conn, $sql)) {
			echo "Registeration success!";
		} else {
			echo "Error: " . $sql . "<br>" .mysqli_error($conn);
    	}
    	mysqli_close($conn);
	}
	?>
	</div>

	<div class="footer">
		Atikah Ali &copy; <?php print date("Y");?>
	</div>

</body>
</html>
