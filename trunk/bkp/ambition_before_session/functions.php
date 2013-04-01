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
          <a class="brand" href="#">PV Gallery</a>
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

      <h1>Welcome to PV Gallery</h1>
      <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>

	  <?php 
	  
	  function add($a,$b){
		return $a + $b;
	  }
	  
	  echo "Sum is ".add(2,10);
	  //echo "Sum is ".add($_GET['a'],$_GET['b']);
	  
	  
	 
	  	  
	  //string functions
	  echo strlen("bhupal")."<br/>";
	  
	  echo "<pre>";
	  //print_r( count_chars ("hello world"));
	  echo "</pre>";
	  
	  echo strtoupper('hello world')."<br/>";
	  echo strtolower('Hello World')."<br/>";
	  echo ucfirst("ambition college")."<br/>";
	  echo ucwords("ambition college")."<br/>";
	  
	  $str = "Hi it's 9 o'Clock";
	  echo addslashes ($str)."<br/>";
	  echo stripslashes (addslashes ($str))."<br/>";
	  
	  echo $data = 5/3;
	  echo "<br/>";
	  echo number_format($data,2);
	  
	  
	  $str  = "filename.jpeg";
	  echo "<br/>";
	  echo substr($str, -3, 3);
	  echo "<br/>";
	  
	  echo substr($str, 0, 4);
	  
	  echo "<br/>";
	  echo $dot_position = strpos($str,".");
	  
	  echo "<br/>";
	  echo substr( $str, $dot_position+1);

	  echo "<br/>";
	  echo sha1("password");
	  
	  echo "<br/>";
	  echo md5("password");
	  
	  echo "<br/>";
	  echo sin(deg2rad(30));
	  echo "<br/>";
	  echo cos(30);
	  
	  $value = 5.8;
	  echo "<br/>";
	  echo ceil($value);
	  echo "<br/>";
	  echo floor($value);
	  
	  echo "<br/>";
	  echo rand();
	  echo "<br/>";
	  echo rand(1,10);
	  
	  echo "<br/>";
	  echo abs(-10);
	  echo abs(+10);
	  echo sqrt(25);
	  echo pow(5,2);
	  
	  
	  
	  
	  
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
