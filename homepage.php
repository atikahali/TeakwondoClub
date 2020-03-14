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
		<h1>Hello there!</h1>
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
	  	  <a class="nav-link <?php if ($CURRENT_PAGE == "Homepage") {?>active<?php }?>" href="index.php">Home</a>
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
	<h2>Welcome to World Taekwondo Federation!</h2>
	<p>
		World Taekwondo (WT) is the International Federation (IF) governing the sport of Taekwondo and is a member of the Association of Summer Olympic International Federations (ASOIF) and International Paralympic Committee (IPC). WT leads the most inclusive and accessible combat sport, which combines the values of an ancient Asian heritage with the values of a global elite sport. Taekwondo evolves on a solid base, mixing the traditional and the modern. The values recognized by practitioners and partners are the strength of our sport. They are distilled from those found in our society: the search for pleasure, surpassing oneself, perseverance, moral and physical strength, and respect for others.

	</p>
	<p>
		World Taekwondo Federation  has a vision to create lifelong members of the taekwondo community by realising the true potential of each and every player, and maximising their enjoyment of the game. 
	</p>
	<p>
		Come and join our taekwondo family now!
	</p>
</div>

	<div class="footer">
		Atikah Ali &copy; <?php print date("Y");?>
	</div>

</body>
</html>