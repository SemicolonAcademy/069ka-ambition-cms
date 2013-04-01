<?php

	$id= $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$con = mysql_connect("localhost", "root", "");        
	mysql_select_db("onlineshopping");        
    
	$sql = "INSERT INTO `onlineshopping`.`users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES (NULL, '$firstname', '$lastname', '$email', '$username', '$password');";

	
    $result = mysql_query($sql);	
	mysql_close($con);
	
	header ("location: index.php");
?>
