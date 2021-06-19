<?php
	session_start();
    
	if(isset($_POST['latitude']) && isset($_POST['longitude']) && isset($_POST['address']))
	{
		$_SESSION['user_lat'] = $_POST['latitude'];
		$_SESSION['user_lng'] = $_POST['longitude'];
		$_SESSION['user_address'] = $_POST['address'];
		
		echo json_encode(array('status' => 200, 'message' => 'OK'));
	}
?>

