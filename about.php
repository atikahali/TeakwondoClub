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
		<h1>World Taekwondo Federation</h1>
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
	<h2>About Us</h2>
	<p>
		Vision: Taekwondo For All. </br></br>

		Mission: Develop and grow Taekwondo throughout the world, from a grass roots level all the way through to an elite level, to provide all with the opportunity to play, watch and enjoy the sport regardless of age, gender, religion, ethnicity or ability. </br></br>

		Values: Inclusiveness, Leadership, Respect, Tolerance, Excellence, and Integrity. </br></br>

		Objectives: WT is responsible for the development, growth, and administration of Taekwondo around the world. WT has identified three strategic priorities for the 2017-2021 cycle:</br></br>

		<li>Add value to the Olympic Movement: WT recognizes our obligation to contribute to the growth and the success of the Olympic Movement. We do this by aligning our policies and practices with those of the IOC and by continuously improving key indicators including social media and governance. At the same time, WT seeks to champion Olympic Values of education, inclusiveness, friendship, solidarity and fair play, and to contribute to building a peaceful and better world though sports, including close cooperation with our related organization, the Taekwondo Humanitarian Foundation, for development through sport.</li> </br></br>

		<li>Development of Events: WT works closely with organizing committees to ensure cost-efficient, sustainable events that leave a lasting legacy for the local Taekwondo and sporting communities. At the same time, we seek to ensure a coordinated and well-balanced event calendar that allows for participation at all levels and across all regions of the world. These high quality events should promote our sport and athletes to new audiences.</li> </br></br>

		<li>Development of Member Associations: WT recognizes that development of our member associations is critical to having both stronger events and greater grass roots growth. Our ambition is to strengthen our support and training for of our key stakeholders, sharing best practices (organization, administration, event management, good governance, gender equality , Olympic values, sustainable development, etc) and the availability of tools to facilitate quality development To this end we use tools such as our Global Membership Systems, MNA Survey, and Development Program to monitor and support the development of our members at the administrative, competition official, coach, entourage, and athlete levels including post-athletic career.</li></br></br>

		<b>Established :</b> May 28, 1973</br></br>
		<b>No. of Member National Associations :</b> 209</br></br>
		<b>Location :</b> 5th Fl., Kolon Bldg., 15 Hyoja-ro, Jongno-gu, Seoul, Korea, 03044</br></br>
		<b>President :</b> Dr. Chungwon Choue</br></br>
		<b>Secretary General : </b>Mr. Hoss Rafaty</br></br>
		<b>Affiliation to SportAccord (GAISF) :</b> October 8, 1975</br></br>
		<b>IOC Recognition :</b> July 17, 1980 (83rd IOC Session in Moscow)</br></br>
		<b>Affiliation to ASOIF :</b> February 15, 1995</br></br>
		<b>Olympic Games Demonstration Sport :</b> 1988 Seoul Olympic Games & 1992 Barcelona Olympic Games</br></br>
		<b>Official Olympic Sport :</b> Sydney 2000 Olympic Games, September 4, 1994 (103rd IOC Session in Paris)</br></br>
		<b>Confirmation of Taekwondo as an Official Sport :</b> for Athens 2004 Olympic Games, December 11-13, 2000 (IOC EB Meeting in Lausanne)</br></br>

		Expansion of Taekwondo quota at Athens 2004 Olympic Games to 124 in eight weight categories, respective four weight classes for men and women, Sep. 18-20, 2001 (IOC EB Meeting in Lausanne)</br></br>


		Feb. 5-7, 2006: IOC Executive Board decided at its meeting in Turin, Italy to expand the number of taekwondo entry in Beijing 2008 Olympic Games from 124 to 128 (two males and two females were added in consideration of the new establishment of Oceania Taekwondo Union).</br></br>


		IOC Executive Board decided the number of sports programs of the 2008 Beijing Olympic Games to be 27, including Taekwondo. The 114th IOC Session held in Mexico City, Mexico on November 29, 2002 also confirmed inclusion of Taekwondo in the Beijing 2008 Olympic Games.</br></br>


		IOC reviewed the Olympic program for 2012 London, Taekwondo was voted to retain in the Olympic Program of the London 2012 Olympic Games at its 117th Session in Singapore on July 8, 2005.</br></br>


		IOC selected 26 core sports for 2016 Rio Olympic Games, including taekwondo at its 121st Session in Copenhagen on Oct. 2-9, 2009.</br></br>


		IOC confirmed taekwondo as one of the 25 core sports for 2020 Tokyo Olympic Games at its 125th Session in Buenos Aires on Sept. 7-10, 2013</br></br>


		International Paralympic Committee (IPC) Governing Board granted 'IPC-recognized IF' status to the WT on Oct. 16, 2013.</br></br>


		IPC final decision on the sports programs of the 2020 Tokyo Paralympics, including taekwondo, was made at the 69th IPC Governing Board meeting held in Abu Dhabi, UAE on January 30-Feburary 1, 2015.</br></br>

		Nov. 14-15, 2015: IPC General Assembly in Mexico City, Mexico granted a full membership to the WT (Nov. 15: ratification of new members) on Nov. 15, 2015.
	</p>
</div>

	<div class="footer">
		Atikah Ali &copy; <?php print date("Y");?>
	</div>

</body>
</html>