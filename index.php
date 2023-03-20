 

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CYBER CRIME CELL WEBSITE</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  
</head>
<body>

<header>
	
<nav>
	<div class="logo">
		<img src="images/icons8-cyber-security-50.jpeg" class="website-logo"> 
		<h1 style="font-size: 20px;"> Cyber Security </h1>
	 </div>
	 
	</div>
	<div class="menu">
		<a href="index.php" style="font: size 10px; ">Home</a>
		<a href="report_crime.php">Report<br>crime</a>
		<a href="about.php">About</a>
		<a href="#">contact</a>
	</div>
</nav>
	<main>
		<section>
        </ul>
      </div> 
			<h3>Welcome To CYBERCELL,C&T</h3>
			<h1>Stay <span class="text">Safe</span> and<span class="text"> Secure</span> </h1>
			<marquee><p>"We are here to support you during any problem."</p></marquee>
			 
		</section>
	</main>
	 

</header>
<?php 
 


session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);?>
<div class="footer">
	<a href="https://www.facebook.com/"><img src="images/icons8-facebook-48.png"></a>
	<a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><img src="images/icons8-twitter-48.png"></a>
	<a href="https://www.instagram.com/accounts/login/"><img src="images/icons8-instagram-48.png"></a>
	<a href="logout.php"style="color:white" style="text-align: left">Logout</a>
	

	<br>


</div>
</body>
</html>


	 
	 
	
	
</body>
</html>