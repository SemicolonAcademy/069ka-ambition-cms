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
	  
	  $fruits = array ("apple","mango","orange","banana");
	  
	  echo "<pre>";
	  print_r($fruits);
	  echo "</pre>";
	  
	  echo "<br/>My favorite fruits : ";
	  	  
	  for ($i=0; $i < count($fruits) ; $i++){
		echo "<br/>" ;
		echo $fruits [$i];
		
	  }
	  
	  echo "<br/><br/><br/> foreach<br/>------------";
	  
	  
	  $fruits = array ("apple","mango","orange","banana");	    
	  foreach ($fruits as $fruit){		
		echo $fruit;
	  }
	  
	  
	  $fruits = array ("orange","apple","banana");
	  
	  $users = array (
	  
					array (
						"username" => "sanju",
						"password" => "ihg987656gggyfhvhg9876456",
						"email" => "sanju@gmail.com",
						"address" =>"baneshwor",
						"phone" => "9841", 
						"status" => 1
					),
					
					array (
						"username" => "rudra",
						"password" => "ihg987656gggyfhvhg9876456",
						"email" => "rudra@gmail.com",
						"address" =>"baneshwor",
						"phone" => "9841", 
						"status" => 1
					),
					
					array (
						"username" => "bimala",
						"password" => "ihg987656gggyfhvhg9876456",
						"email" => "bimala@gmail.com",
						"address" =>"baneshwor",
						"phone" => "9841", 
						"status" => 1
					),
					
				);  
	    
	  echo "<pre>";
	  print_r($users);
	  echo "</pre>";
	  
	    
	  ?>
	  
	  
	  <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($users as $user) {?>
				<tr>
                  <td>1</td>
                  <td><?php echo $user['username'];?></td>
                  <td><?php echo $user['email'];?></td>
                  <td><?php echo $user['address'];?></td>
                  <td><?php echo $user['phone'];?></td>                  
				  <td>
					<?php if ($user['status'] == 1){
								echo "Active";
							}else {
								echo "Inactive";
							}
					?>
				  </td>				  				  
                  <td><a href="">View</a> | <a href="">Edit</a>  | <a href="">Delete</a></td>
				</tr>				
				<?php }?>
                
              </tbody>
            </table>
	  
	
<?php 

//CSV - Comma Separated Values

$sports = "football, cricket,  basketball";

$sports_array = explode ("," , $sports );
echo "<pre>"; print_r($sports_array); echo "</pre>";

echo $string = implode ("," , $sports_array );


$filename = "sample.exe";
$e = substr($filename,-3);

$allowed_ext = array ("jpg","bmp","gif","png");

if (in_array($e, $allowed_ext)) {
	echo "<br/><strong>File allowed to upload</strong>";
}else {
	echo "<br/><strong>Not supported file format</strong>";

}

echo "<br/>Array Push/Pop";

$allowed_ext = array ("jpg","bmp","gif","png");
echo "<pre>"; print_r($allowed_ext); echo "</pre>";

array_push($allowed_ext,"psd");

echo "<pre>"; print_r($allowed_ext); echo "</pre>";

array_push($allowed_ext,"doc");
array_push($allowed_ext,"txt");
array_push($allowed_ext,"bmp");

echo "<pre>"; print_r($allowed_ext); echo "</pre>";

$unique = array_unique ($allowed_ext);
echo "<pre>"; print_r($unique); echo "</pre>";

echo array_pop($unique);
echo "<pre>"; print_r($unique); echo "</pre>";

asort($unique);
echo "<pre>"; print_r($unique); echo "</pre>";

arsort($unique);
echo "<pre>"; print_r($unique); echo "</pre>";


ksort($unique);
echo "<pre>"; print_r($unique); echo "</pre>";


$merged = array_merge($sports_array, $unique);
echo "<pre>"; print_r($merged); echo "</pre>";

$rand_key = array_rand($merged);
echo $merged[$rand_key];

?>	
	  
<br>	  
<br>	  
<br>	  
<br>	  
<br>	  
<br>	  
	  
		
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
