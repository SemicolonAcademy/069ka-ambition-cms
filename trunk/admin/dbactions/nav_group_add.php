<?php 

		
if (isset($_POST['submit'])) {

	$error = false;
	
	$name = trim($_POST['name']);
	$slug = implode("-",explode(" ", strtolower(trim($name))));
	
	
	if($name == '') {
		$error = true;
		$name_error = "Please provide username";
	}
		
	
	//if ($username != "" && $password !="" && $email !="" ) {	
	if(!$error) {	
		
		$con = mysql_connect("localhost", "root", "");    	
		mysql_select_db("cms");        	
		$sql = "INSERT INTO `navigation_groups` (`id`, `name`, `slug`) VALUES (NULL, '$name','$slug');";
		mysql_query($sql);	
		header ("location: ../navigations.php");
	
	}
	
	
}



?>