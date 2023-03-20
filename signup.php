<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<font color='white'>Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	body{
			
			background-size: cover;
			   background-image:url("images/3820574.jpg");
			}
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: blue;
		border: none;
	}

	#box{

		background-color: transparent;
		margin: auto;
		width: 300px;
		height: 300px;
		padding: 100px;
		
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 30px;margin: 10px;color: white;">New User</div>

			<input id="text" type="text"placeholder="Username" name="user_name"><br><br>
			<input id="text" type="password" placeholder="Password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php" style="color:white">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>