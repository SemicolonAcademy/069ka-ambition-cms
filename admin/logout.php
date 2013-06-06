<?php
	session_start();	
				
	//unset session	
	
	$_SESSION['login'] = 0;
	$_SESSION['username'] = "";
	$_SESSION['user_id'] = 0;
	
	//or
	
	//unset($_SESSION['login']);
	//unset($_SESSION['username']); 
	
	session_destroy();
	
	//redirect to login page
	header ("location: index.php");
				
				
?>
