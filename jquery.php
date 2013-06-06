<html>
  <head>   

	<title>jQuery</title>
	<style type="text/css">
	
	#box{
	
	width:150px;
	height:80px;
	background:#69f;
	color:#fff;
	padding:20px;
	
	}
	</style>
	
	<script src="jquery.js"></script>
	
	<script type="text/javascript">
	
		
		$(document).ready(function(){
		
			$(".delete").click(function(){
				
				var url = $(this).attr("href");
				alert(url);
				
				//.animate(things to change, speed, callback);
				$('#box').animate(	{'margin-top': '300px','margin-left': '300px' },1000 );
				$("#box").fadeOut("slow");
				
				return false;
				
			});
			
			$(".display").click(function(){
				
				//$("#box").fadeIn("slow");
				$("#box").slideToggle("slow");
				//$("#box").animate({ backgroundColor: "#fbc7c7" }, "fast");
						 
				return false;
				
			});
		
		});
		
		
	</script>
	
  </head>

  <body>
  
  <div id="box">
		this is some text 
		<a href="http://facebook.com" class="delete">x</a>
  </div>

  <a href="#" class="display">Display</a>

  </body>
  
</html>
