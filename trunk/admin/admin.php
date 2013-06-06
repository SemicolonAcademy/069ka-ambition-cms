<?php 
session_start();
if (!$_SESSION['login']) header ("location: index.php");
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
  
	<script src="assets/js/jquery.js"></script>
  	
	<script type="text/javascript">
	
		
		$(document).ready(function(){
		
			$(".delete").click(function(){
				
				var url = $(this).attr("href"); //alert(url);
				var btn = $(this);
				
				//$(this).closest('tr').fadeOut("slow");
				
				$.ajax({
				type: "GET",
				url: url,
				success: function(res) {				
						if (res == "SUCCESS") {
							$(btn).closest('tr').fadeOut('slow');
							
						}else {
							alert("Couldn't delete ! Retry.");
						}
					}
				}); 
			
				
				return false;
				
			});
			
		
		});
		
		
	</script>
 
  
  </head>
  
  

  <body>

	<!--  include navigation here	-->
	<?php include "views/nav.php"; ?>
		
    <div class="container">

      <h1>Users</h1>	  
	  <br/>  
	  
	<?php 
	  
	
	//Step - 1 (Connection)
	$con = mysql_connect("localhost", "root", "");    
    
	//Step - 2 (Database)
	mysql_select_db("cms");        
    
	//Step - 3 (SQL / Get result)
	$sql = "SELECT * from `users`";
    $result = mysql_query($sql);	
	  
	?>
	  
	  
	  <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Email</th>                  
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
                  <td><?php echo $row['username'];?></td>
                  <td><?php echo $row['email'];?></td>                  
                  <td>
					  <a href="">View</a> | 
					  <a href="dbactions/user_edit.php?id=<?php echo $row['id']; ?>">Edit</a> | 
					  <a class="delete" href="dbactions/user_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
				  </td>
				</tr>				
				
				
				<?php }?>
                
              </tbody>
            </table>
	  
	<?php 
	
	//Step - 5 (Close connection)
	mysql_close($con);
    
	
	
	?>
  
	
<h3>Add New Users</h3>
	  
	  <form class="form-horizontal" action="" method="POST">

  <div class="control-group <?php if ($username_error) { echo 'error'; } ?> ">
    <label class="control-label" for="first_name">Username</label>
    <div class="controls">
    
	<input type="text" name="username" value="<?php if (isset($username)) echo $username; ?>">
	  
	<?php if ($username_error) { ?>
      <span class="help-inline"><?php echo $username_error; ?></span>	   	   
	<?php } ?> 	  
	   
    </div>
  </div>
  
  <div class="control-group <?php if ($password_error) { echo 'error'; } ?>">
    <label class="control-label" for="username">Password</label>
    <div class="controls">
      <input type="password" id="password" name="password" value="" >
	  
	  <?php if ($password_error) { ?>
       <span class="help-inline"><?php echo $password_error; ?></span>	   	   
	  <?php } ?> 
	  
    </div>
  </div>
  
  <div class="control-group <?php if ($email_error) { echo 'error'; } ?>">
    <label class="control-label" for="last_name">Email</label>
    <div class="controls">
      <input type="text" id="email" name="email" value="<?php if (isset($email)) echo $email; ?>">
	  <?php if ($email_error) { ?>
       <span class="help-inline"><?php echo $email_error; ?></span>	   	   
	  <?php } ?> 
    </div>
  </div>
  
  
  <div class="control-group">
    <div class="controls">      
      <input name="submit" value="Add User" type="submit" class="btn" />
    </div>
  </div>
</form>

	
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
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
