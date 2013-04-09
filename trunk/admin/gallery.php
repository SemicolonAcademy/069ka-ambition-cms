<?php 
session_start();
if (!$_SESSION['login']) header ("location: index.php");
include "includes/common.php";


if(isset($_POST['submit'])) {

/* 
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";
 */

$name = $_POST['name'];
$caption = $_POST['caption'];
$status = $_POST['status'];

$error = "";
	
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
				$now = time();
				$sql = "INSERT INTO `gallery` (`id`, `name`, `path`, `caption`, `status`, `created_at`) VALUES (NULL, \"$name\", \"$destination_file\", \"$caption\",\"$status\", '$now');";
				mysql_query	($sql);			
				//header ("location: gallery.php");



			}else {
				
				$error .= "Couldn't upload file. Retry later";
			}
		
		}else {
				
				$error .= "Only images are allowed";
		
		}	
	
	}else {
				$error .= "Please provide all info.";
	
	}	
	
	
}	
			
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Course</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  
  
  <script type="text/javascript">
  
  function sure(){
  
	if (confirm("Are you sure delete?")){
		return true;
	}else {
		return false;
	}
  }	
  </script>
  

 
  
  </head>
  
  

  <body>

	<!--  include navigation here	-->
	<?php include "views/nav.php"; ?>
		
    <div class="container">

      <h1>Gallery</h1>
	  
	  <br/>  
	  
	<?php 
     
    
	//Step - 3 (SQL / Get result)
	/*
	$sql = "SELECT navigation_groups.*,navigations.* from `navigations` 
			JOIN `navigation_group` 
			ON navigations.group_id = navigation_groups.id        
		
	"; */
	
	$sql = "SELECT * FROM `gallery`";			

	
    $result = mysql_query($sql); 
	 
	if ($result && mysql_num_rows($result)) {
	 
	?>
	  
	  
	  <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Name</th>                  
                  <th>Caption</th>                                    
                  <th>Status</th>                                    
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
				<?php 
				
					//Step - 4 (Grab / Process result of query)
					$i=0;								
					while ($row = mysql_fetch_assoc($result)) {
					$i++;
					
					//echo "<pre>";print_r($row);echo "</pre>";
					
				?>
				
				<tr>
                  <td><?php echo $i; ?></td>              
				  
				  <td><a href="<?php echo $upload_url."/".$row['path'];?>"><img height="100" width="100" src="<?php echo $upload_url.$row['path']; ?>"/> </a></td>
                  <td><?php echo $row['name']; ?></td>                  
                  <td><?php echo $row['caption'];?></td>                                    
                  <td><?php echo ($row['status'])? "Published" : "Draft";?></td>                                    
                  <td>					  
					  <a href="dbactions/user_edit.php?id=<?php echo $row['id']; ?>">Edit</a> | 
					  <a onclick="return sure()" href="dbactions/gallery_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
				  </td>
				</tr>				
				
				
				<?php }?>
                
              </tbody>
            </table>
	  
	<?php 
	
	} else {
	
	 echo "No images found";
	}
	
	//Step - 5 (Close connection)	
    
	
	
	?>
  
	
<h3>Add New Image</h3>


<?php 
if (isset($error)) {
echo "<p style='color:red;'>$error<br/></p>";
}
?>
	  
<form class="form-horizontal"  enctype="multipart/form-data" action="" method="POST">
	  
  <div class="control-group">
    <label class="control-label" for="first_name">Name</label>
    <div class="controls">
    
	<input type="text" name="name" value="">	  
	   
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="first_name">Image</label>
    <div class="controls">
    
	<input type="file" name="image" value="">	  
	   
    </div>
  </div>
  
   <div class="control-group">
    <label class="control-label" for="first_name">Caption</label>
    <div class="controls">
    
	<input type="text" class="span4" name="caption" value="">	  
	   
    </div>
  </div>
  
  <div class="control-group">
  <label class="control-label" for="first_name">Publish</label>
    <div class="controls">
		
		<input type="checkbox" name="status" value="1">
			
		
 </div>
	   
    
  </div>
  
  
   
  <div class="control-group">
    <div class="controls">      
      <input name="submit" value="Upload Image" type="submit" class="btn" />
    </div>
  </div>
</form>

	
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
