	<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>OnlineShopping</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<style>
      
		</style>
		<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
     
		</style>
	</head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
	
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		  
		  <?php
		  include "login_signup_nav.php";
		  ?>
		  
          	         
        </div>
		
      </div>
    </div>

    <div class="container">
		
		<?php
		include "form_search.php";
		?>

      <!--<h1>Online Shopping</h1>-->
	 	<?php
		include "logo_online.php";
		?>
      
      <p>Shop here anything.</p>
      
      <?php
//	  include "nav_top.php"
	  include "nav.php"
	  ?>  



 
<!-- Social Networking Icons -->

	<?php
		include "social_network.php";
	?>

<!--
<div id="social_network">
	<div rel="tooltip" title="Facebook" class="facebook_network">
		<img src="D:\PHP Practise\base\assets\img\fa.png" class="img-polaroid">
	</div>
    <div rel="tooltip" title="Twitter" class="twitter_network">
    	<img src="D:\PHP Practise\base\assets\img\tw.png" class="img-polaroid">
    </div>
    <div rel="tooltip" title="Google Plus" class="gplus_network">
    	<img src="D:\PHP Practise\base\assets\img\gt.png" class="img-polaroid">
    </div>
</div> -->
<!-- Social Networking Icons End -->

<?php
include "left_nav.php";
?>






    	  
  </div> <!-- /container -->
     
  </div>
</div>






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
