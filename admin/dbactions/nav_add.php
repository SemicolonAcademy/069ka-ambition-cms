<?php 
	
include "../includes/common.php";
	
if (isset($_POST['submit'])) {

	
	
	$link_text = $_POST['link_text'];
	$url = $_POST['url'];
	$description = $_POST['description'];
	$group_id = $_POST['group_id'];	
	
	
	//if ($username != "" && $password !="" && $email !="" ) {	
	if($link_text !="" && $url != "" && $group_id !="") {	
		
		$now = time();
		
		$con = mysql_connect("localhost", "root", "");    	
		mysql_select_db("cms");        
	
		$sql = "INSERT INTO `navigations` (`id`, `link_text`, `url`, `description`, `group_id`, `created_at`) VALUES (NULL, '$link_text','$url', '$description','$group_id', '$now');";
		mysql_query($sql);	
		
	
	}
	
	
}

header ("location: ../navigations.php");



?>