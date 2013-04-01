<?php 

	session_start();
	if (!$_SESSION['login']) header ("location: ../login.php");


	
	//Step - 1 (Connection)
	$con = mysql_connect("localhost", "root", "");    
    
	//Step - 2 (Database)
	mysql_select_db("test");        
    
	$id= $_GET['id'];
	
	//Step - 3 (SQL / Get result)
	$sql = "SELECT * from `users` where `id` = $id";
    $result = mysql_query($sql);
	$row = mysql_fetch_assoc($result); 
		
	
	if (isset($_POST['submit'])) {

	
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);	
	$email = trim($_POST['email']);			
	
	$password = md5($password);
	
	$sql_update = "UPDATE `users` SET `username` = '$username', `password` = '$password', `email` = '$email' WHERE `id` = $id";
	
	mysql_query($sql_update);	
	header ("location: ../database.php");
	
		
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
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

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
  
  
  
  
  </head>
  
  

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">PHP Course</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">Users</a></li>
              <li><a href="#contact">Photos</a></li>
              <li><a href="#contact">Videos</a></li>
              <li><a href="#contact">Feedback</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>PHP / MySql</h1>
	  <p>Basic CRUD oparations on Database</p>
	  <br/>   
	  	
  
	
<h3>Update User '<?php echo $row['username']; ?>' </h3>
<br/><br/>
	  
	  <form class="form-horizontal" action="" method="POST">

  <div class="control-group <?php if ($username_error) { echo 'error'; } ?> ">
    <label class="control-label" for="first_name">Username</label>
    <div class="controls">
    
	<input type="text" name="username" value="<?php echo $row['username']; ?>">
	  
	<?php if ($username_error) { ?>
      <span class="help-inline"><?php echo $username_error; ?></span>	   	   
	<?php } ?> 	  
	   
    </div>
  </div>
  
  <div class="control-group <?php if ($password_error) { echo 'error'; } ?>">
    <label class="control-label" for="username">Password</label>
    <div class="controls">
      <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>" >
	  
	  <?php if ($password_error) { ?>
       <span class="help-inline"><?php echo $password_error; ?></span>	   	   
	  <?php } ?> 
	  
    </div>
  </div>
  
  <div class="control-group <?php if ($email_error) { echo 'error'; } ?>">
    <label class="control-label" for="last_name">Email</label>
    <div class="controls">
      <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>">
	  <?php if ($email_error) { ?>
       <span class="help-inline"><?php echo $email_error; ?></span>	   	   
	  <?php } ?> 
    </div>
  </div>
  
  
  <div class="control-group">
    <div class="controls">      
      <input name="submit" value="Update User" type="submit" class="btn" />
    </div>
  </div>
</form>


<?php 
//Step - 5 (Close connection)
mysql_close($con);  
?>
	
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
