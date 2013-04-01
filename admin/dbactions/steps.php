<?php 

	//Step - 1 (Connection)
	$con = mysql_connect("localhost", "root", "");    
    
	//Step - 2 (Database)
	mysql_select_db("test");        
    
	//Step - 3 (SQL / Get result)
	
	$sql = "";

	//Step - 4 (Grab / Process / Execute query)
	$sql = "delete from `users` where `id` = $id";	    
	
	mysql_query($sql);	
		
	//Step - 5 (Close connection)
	mysql_close($con);
	
	//redirect to main page
	header ("location: ../database.php");

?>