<?php 
	
	include "includes/common.php";  
    
	//Step - 3 (SQL / Get result)
	
	$id = $_GET['id'];
	
	$sql = "delete from `navigation_groups` where `id` = $id";	
    mysql_query($sql);	
	
	//echo "user id ".  $_GET['id'] . " deleted";
	
	header ("location: ../navigations.php");

?>