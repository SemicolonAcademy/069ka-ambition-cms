<?php 
	
	if (!$_SESSION['login']) header ("location: ../index.php");
	
	//Step - 1 (Connection)
	$con = mysql_connect("localhost", "root", "");    
    
	//Step - 2 (Database)
	mysql_select_db("cms");           
	
		
	
	if (isset($_POST['submit'])) {

	
	$site_name = trim($_POST['site_name']);
	$site_slogan = trim($_POST['site_slogan']);	
	
	$sql_update = "UPDATE `settings` SET `site_name` = '$site_name', `site_slogan` = '$site_slogan'";
	
	mysql_query($sql_update);	
	header ("location: settings.php");
	
		
	} 



	
	?> 
