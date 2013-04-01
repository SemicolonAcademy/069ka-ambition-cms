<?php 

		
if (isset($_POST['submit'])) {

	$error = false;
	
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$email = trim($_POST['email']);	
	
	if($username == '') {
		$error = true;
		$username_error = "Please provide username";
	}
	
	if($password == '') {
		$error = true; 
		$password_error = "Please provide password";
	}else {
		$password = md5($_POST['password']);
	}
	
	if($email == '') {
		$error = true;
		$email_error = "Please provide email";
	}
	
	
	
	//if ($username != "" && $password !="" && $email !="" ) {	
	if(!$error) {	
		
		$con = mysql_connect("localhost", "root", "");    	
		mysql_select_db("test");        	
		$sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES (NULL, '$username','$password','$email');";
		mysql_query($sql);	
		header ("location: database.php");
	
	}
	
	
}



?>