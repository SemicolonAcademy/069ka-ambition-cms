<?php 
session_start();
if (!$_SESSION['login']) header ("location: index.php");
include "includes/common.php";

include "dbactions/user_add.php";

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

      <h1>Navigations</h1>
	  
	  <br/>  
	  
	<?php 
     
    
	//Step - 3 (SQL / Get result)
	/*
	$sql = "SELECT navigation_groups.*,navigations.* from `navigations` 
			JOIN `navigation_group` 
			ON navigations.group_id = navigation_groups.id        
		
	"; */
	
	$sql = "SELECT * FROM `navigations` 
	LEFT JOIN `navigation_groups` 
			ON navigations.group_id = navigation_groups.id ";			

	
    $result = mysql_query($sql); 
	 
	if ($result && mysql_num_rows($result)) {
	 
	?>
	  
	  
	  <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Link</th>
                  <th>Description</th>                  
                  <th>Group</th>                  
                  <th>Click Count</th>                  
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
				  
				  <td><a href="<?php echo $site_url.$row['url'];?>"><?php echo $row['link_text'];?> </a></td>
                  <td><?php echo $row['description']; ?></td>                  
                  <td><?php echo $row['name'];?></td>                  
                  <td><?php echo $row['click_count']; ?></td>                                     
                  <td>					  
					  <a href="dbactions/user_edit.php?id=<?php echo $row['id']; ?>">Edit</a> | 
					  <a onclick="return sure()" href="dbactions/nav_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
				  </td>
				</tr>				
				
				
				<?php }?>
                
              </tbody>
            </table>
	  
	<?php 
	
	} else {
	
	 echo "No navigation links found";
	}
	
	//Step - 5 (Close connection)	
    
	
	
	?>
  
	
<h3>Add New Link</h3>
	  
	  <form class="form-horizontal" action="dbactions/nav_add.php" method="POST">
	  
  <div class="control-group">
    <label class="control-label" for="first_name">Link Text</label>
    <div class="controls">
    
	<input type="text" name="link_text" value="">	  
	   
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="first_name">URL</label>
    <div class="controls">
    
	<input type="text" name="url" value="">	  
	   
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="first_name">Description</label>
    <div class="controls">
    
	<input type="text" name="description" value="">	  
	   
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="first_name">Group</label>
    <div class="controls">
    
	<select name="group_id">	
		<option value="">Select Group</option>
	<?php 
	
	$sql_group = "SELECT * from `navigation_groups`";
    $result_group = mysql_query($sql_group); 	 
	while ($row = mysql_fetch_assoc($result_group)) {	
	?>	
		<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
		
	
	<?php } ?>
	
	</select>
	
	
	   
    </div>
  </div>
 
  
  
  
  <div class="control-group">
    <div class="controls">      
      <input name="submit" value="Add Link" type="submit" class="btn" />
    </div>
  </div>
</form>


<h1>Navigation Groups</h1>
	  
	  <br/>  
	  
	<?php 
	  
	
	//Step - 3 (SQL / Get result)
	$sql_group = "SELECT * from `navigation_groups`";
    $result_group = mysql_query($sql_group); 
	 
	if ($result_group && mysql_num_rows($result_group)) {
	 
	?>
	  
	  
	  <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Slug</th>                                    
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
				<?php 
				
					//Step - 4 (Grab / Process result of query)
					$i=0;								
					while ($row = mysql_fetch_assoc($result_group)) {
					$i++;
					
					//echo "<pre>";print_r($row);echo "</pre>";
					
				?>
				
				<tr>
                  <td><?php echo $i; ?></td>              				  
				  <td><?php echo $row['name']; ?></td>                  
                  <td><?php echo $row['slug']; ?></td>                                    
                  <td>					  
					  <a href="dbactions/user_edit.php?id=<?php echo $row['id']; ?>">Edit</a> | 
					  <a onclick="return sure()" href="dbactions/nav_group_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
				  </td>
				</tr>				
				
				
				<?php }?>
                
              </tbody>
            </table>
	  
	<?php 
	
	} else {
	
	 echo "No navigation groups found";
	}
	
	//Step - 5 (Close connection)
	mysql_close($con);
    
	
	
	?>
	
<h3>Add New Navigation Group</h3>
	  
  <form class="form-horizontal" action="dbactions/nav_group_add.php" method="POST">

  <div class="control-group">
    <label class="control-label" for="first_name">Name</label>
    <div class="controls">
    
	<input type="text" name="name" value="">	  
	   
    </div>
  </div>
  
  
  
  <div class="control-group">
    <div class="controls">      
      <input name="submit" value="Add Link" type="submit" class="btn" />
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
