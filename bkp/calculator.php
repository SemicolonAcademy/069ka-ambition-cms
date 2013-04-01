<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
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
          <a class="brand" href="#">Calculator</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">USers</a></li>
              <li><a href="#contact">Photos</a></li>
              <li><a href="#contact">Videos</a></li>
              <li><a href="#contact">Feedback</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>Calculator</h1>
      <p>Simple calculator</p>
	  <br/>
	  <br/>

<form class="form-inline" method="GET" action="calculator.php">
	<input type="text" class="input-small" name="num1" placeholder="1st number">
		<select name="operator" class="input-small">    
				  <option value="+">Add</option>
				  <option value="-">Substract</option>
				  <option value="*">Multiply</option>
				  <option value="/">Divide</option>              
		</select>			
	<input type="text" class="input-small" name ="num2" placeholder="2nd Number">
	<button name="submit" value="submit" type="submit" class="btn">Calculate</button>
</form>

<?php 
	
	if ($_GET['submit'] != ""){	
		
		$num1 = $_GET['num1'];$num2 = $_GET['num2'];
		
		if ($num1 == "" || $num2 == "") {
			echo "Please enter both numbers.";
		}else {		
		
			//echo "<pre>"; print_r($_GET); echo "</pre>";		
			$op = $_GET['operator'];		
			if ($op == "+"){ $result = $num1+$num2;	} 
			else if ($op== "-"){ $result = $num1 - $num2;}
			else if ($op== "*"){ $result = $num1 * $num2;}
			else if ($op== "/"){ $result = $num1 / $num2;} 
			else { $result = 0;	}
			echo "Output of $num1 $op $num2 is : $result ";
		}
	
	}
?>


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
