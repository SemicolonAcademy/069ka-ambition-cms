<?php
	session_start();	
				
	//unset session	
	
	$_SESSION['login'] = 0;
	$_SESSION['username'] = "";
	
	//or
	
	//unset($_SESSION['login']);
	//unset($_SESSION['username']); 
	
	session_destroy();
	
	//redirect to login page
	header ("location: login.php");
				
				
?>
