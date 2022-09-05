<?php 

function check_login($con)
{
	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
		$query = "select * from where user_id = '$id' limit 1";

		$result = mysqli_query($con, $query);
		if ($result && mysqli_num_rows($result) > 1) 
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}		
	}
	 header("locaton: login.php");
	 die;
}
function random_num($length){
	$text = "";
	if($length<5){
		$length = 5;
	}
	$len = rand(4, $length);

	for($i=0; $i<$len; $i++){
		 $text .= rand(0,9);
	}
	return $text;
}


?>
