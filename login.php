<?php

session_start();
		include 'connection.php';
		include 'functions.php';

		//$user_data = check_login($con); 
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 </head>
 <body>
 	<div id="box">
 		<form method="post">
 			<div>Login</div>
 			<input type="text" name="user_name"><br><br>
 			<input type="password" name="password"><br><br>
 			<input type="submit" name="" value="Login"><br><br>

 			<a href="signup.php">Click to Sign Up</a><br><br>  
 			
 		</form>
 	</div>
 </body>
 </html>