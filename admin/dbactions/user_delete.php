<?php 
	$con = mysql_connect("localhost", "root", "");    
	mysql_select_db("cms");        
	$id = $_GET['id'];	
	
	$sql = "delete from `users` where `id` = $id";	
    if (mysql_query($sql)){
		echo "SUCCESS";
	}else {
		echo "ERROR";
	}
	exit;
	
	//echo "user id ".  $_GET['id'] . " deleted";
	
	//header ("location: ../database.php");

?>