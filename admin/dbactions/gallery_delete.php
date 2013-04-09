<?php 

	include "../includes/common.php";
	
	$id = $_GET['id'];	
	
	if ($id) {

		$sql = "select * from `gallery` where `id`=$id;";
		$r = mysql_query($sql);	
		
		$pic = mysql_fetch_assoc($r);
		$picture_from_db = $pic['path'];		

		if ($picture_from_db!= "") {
			$filename = "../../uploads/" . $picture_from_db ;
			unlink($filename);
		}	

		$delsql = "delete from `gallery` where `id` = $id";	
		mysql_query	($delsql);						
	
	}

	header ("location: ../gallery.php");

?>