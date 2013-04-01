<?php 

	//Step - 1 (Connection)
	$con = mysql_connect("localhost", "root", "");    
    
	//Step - 2 (Database)
	mysql_select_db("test");        
    
	//Step - 3 (SQL / Get result)
	
	$id = $_GET['id'];
	
	$sql = "delete from `users` where `id` = $id";	
    mysql_query($sql);	
	
	//echo "user id ".  $_GET['id'] . " deleted";
	
	header ("location: ../database.php");

?>