<?php


if(isset($_POST['submit'])) {

include "includes/common.php";

//get user input from GET / POST method
/*
echo "<pre>";
print_r($_POST);
var_export($_POST);
echo "</pre>";
*/

$action = $_GET['action'];

$name = $_POST['name'];
$caption = $_POST['caption'];
$submit = $data['submit'];

	
	if ($name !="" && $caption != "" && isset($_FILES)) {
	
		$upload_dir = '../uploads';
	
		//tmp_name holds temporary file for uploaded file
		$source_file = $_FILES['image']['tmp_name'];
	
		//the 'name' key of the array holds original filename
		//we can use original file name here as our destination filename. it will be saved inside our upload directory
		$destination_file = time()."_".$_FILES['image']['name'];
		
		
		$ext = substr($_FILES['image']['name'], -3);
		
		
		if (in_array($ext, array("jpg","gif","bmp","png") )){
		
			if (move_uploaded_file($source_file, $upload_dir."/".$destination_file)){
				//file upload done;
			}else {
				$hasError = true;
				$file_error = "Couldn't upload file. Retry later";
			}
		
		}else {
				$hasError = true;
				$file_error = "Only images are allowed";
		
		}	
	
	}
		
	/*
	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'youremail@yoursite.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	} */
	

if($hasError != true){
if ($action=="update") {

$id = $data['userid'];
$password = md5($password);

//server side validation of input data
//build query
 $sql = "update `users` set `username` = \"$username\", `password` = \"$password\", `email` = \"$email\", `first_name`= \"$firstname\", `mid_name` = \"$midname\", `last_name` =\"$lastname\", `phone` = \"$phone\", `address` = \"$address\", `website` = \"$website\", `picture` = \"$destination_file\", `created_at` =$created_at , `user_type`= $usertype where `id` = $id ;";
} else { // insert date	
	
$password = md5($password);
//build query
$sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `mid_name`, `last_name`, `phone`, `address`, `website`, `picture`, `created_at`, `user_type`) VALUES (NULL, \"$username\", \"$password\", \"$email\", \"$firstname\", \"$midname\", \"$lastname\", \"$phone\", \"$address\", \"$website\", \"$destination_file\", $created_at, $usertype);";

}
mysql_query	($sql);	
		
header ("location: users.php");

}			

}
			
?>
