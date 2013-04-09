<?php 
session_start();
if (!$_SESSION['login']) header ("location: index.php");
include "dbactions/settings_update.php";
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
  
	if (confirm("Are you sure delete this user ?")){
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

      <h1>Settings</h1>	  
	  <br/>  
	  
	<?php 
	  
	
	//Step - 1 (Connection)
	$con = mysql_connect("localhost", "root", "");    
    
	//Step - 2 (Database)
	mysql_select_db("cms");        
    
	//Step - 3 (SQL / Get result)
	$sql = "SELECT * from `settings`";
    $result = mysql_query($sql);	
    $row = mysql_fetch_assoc($result);	
	  
	?>
	  
	  
	  <table class="table table-hover">
              <thead>
                <tr>                  
                  <th>Sitename</th>
                  <th>Slogan</th>                                    
                </tr>
              </thead>
              <tbody>                
			
				
				<tr>                  
                  <td><?php echo $row['site_name'];?></td>
                  <td><?php echo $row['site_slogan'];?></td>                                    
				</tr>					
				
				
                
              </tbody>
            </table>
	  
	<?php 
	
	//Step - 5 (Close connection)
	mysql_close($con);
    
	
	
	?>
  
	
<h3>Update Settings</h3>
	  
	  <form class="form-horizontal" action="" method="POST">

  <div class="control-group <?php if ($username_error) { echo 'error'; } ?> ">
    <label class="control-label" for="first_name">Site Name</label>
    <div class="controls">
    
	<input type="text" name="site_name" value="<?php if (isset($site_name)) {echo $site_name; } else {echo $row['site_name'];} ?>">
	  
	<?php if ($username_error) { ?>
      <span class="help-inline"><?php echo $username_error; ?></span>	   	   
	<?php } ?> 	  
	   
    </div>
  </div>
  
  <div class="control-group <?php if ($password_error) { echo 'error'; } ?>">
    <label class="control-label" for="username">Site Slgan</label>
    <div class="controls">
      <input type="text" id="site_slogan" name="site_slogan" value="<?php if (isset($site_slogan)) {echo $site_slogan;} else {echo $row['site_slogan'];} ?>" >
	  
	  <?php if ($password_error) { ?>
       <span class="help-inline"><?php echo $password_error; ?></span>	   	   
	  <?php } ?> 
	  
    </div>
  </div>
  
  
  <div class="control-group">
    <div class="controls">      
      <input name="submit" value="Update Settings" type="submit" class="btn" />
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
