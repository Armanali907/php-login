<?php 
	session_start();
		include 'connection.php';
		include 'functions.php';

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$user_name = $_POST['user_name'];
			$password = $_POST['password'];

			if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

				$user_id = random_num(20);
				$query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
				mysqli_query($con, $query);

				header("location: login.php");
				die;
			}
			else{
				echo "Please enter some valid information.";
			}
		}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Sign Up</title>
 </head>
 <body>
 	<div id="box">
 		<form method="post">
 			<div>Sign Up</div>
 			<input type="text" name="user_name"><br><br>
 			<input type="password" name="password"><br><br>
 			<input type="submit" name="" value="Sign up"><br><br>

 			<a href="login.php">Click to Login</a><br><br>  
 			
 		</form>
 	</div>
 </body>
 </html>