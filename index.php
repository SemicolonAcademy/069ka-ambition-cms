<?php 
	  
	
	include "includes/common.php";        
    
	//Step - 3 (SQL / Get result)
	$sql = "SELECT * from `settings`";
    $result = mysql_query($sql);	
    $row = mysql_fetch_assoc($result);	
	  
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title><?php echo $row['site_name'];?></title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="author" content="Erwin Aligam - styleshout.com" />
<meta name="description" content="Site Description Here" />
<meta name="keywords" content="keywords, here" />
<meta name="robots" content="index, follow, noarchive" />
<meta name="googlebot" content="noarchive" />

<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />

<link media="screen" rel="stylesheet" href="<?php echo $site_url;?>third_party/colorbox/colorbox.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="<?php echo $site_url;?>third_party/colorbox/jquery.colorbox.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){		
			
			$(".cbox").colorbox({transition:"none", width:"85%", height:"85%"});
			
		});
	</script>	
	
</head>

<body>

<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">			
				
		<h1 id="logo-text"><a href="<?php echo $site_url;?>" title=""><?php echo $row['site_name'];?></a></h1>		
		<p id="slogan"><?php echo $row['site_slogan'];?></p>	
		
		<div  id="nav">
			<ul>
				<li class="first" id="current"><a href="index.html">Home</a></li>
				<li><a href="style.html">Style</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="archives.html">Archives</a></li>								
			</ul>		
		</div>	
		
		<div id="header-image"></div>
						
	<!--header ends-->					
	</div>
	
	<!-- featured starts -->	
	<div id="featured" class="clear">				
				
			<a name="TemplateInfo"></a>

			<?php	
			
			$featured_sql = "SELECT post.*, post_categories.name, users.username from `post` 
			JOIN `post_categories` ON post.category = post_categories.id        
			JOIN `users` ON post.user_id = users.id 
			WHERE post_categories.slug ='featured' order by post.created_at DESC LIMIT 1";
			
			$featured_result = mysql_query($featured_sql);	
			$featured_post = mysql_fetch_assoc($featured_result);	
			
				
			?>
			
			<div class="image-block">
              <img width="330" src="<?php echo UPLOAD_PATH.$featured_post['image'];?>" alt="featured"/>
			</div>			
			
			<div class="text-block">
			
				<h2><a href="index.html"><?php echo $featured_post['title'];?></a></h2>
				
                <p class="post-info">Posted by <a href="index.html"><?php echo $featured_post['username'];?></a></p>
			
                <p>
				<?php echo substr($featured_post['content'],0,300); ?>
				</p>

				<p><a href="index.html" class="more-link">Read More</a></p>
								
			</div>								
	
	<!-- featured ends -->
	</div>	
	
	<!-- content -->
	<div id="content-outer" class="clear"><div id="content-wrap">
	
		<div id="content">
		
			<div id="left">			
			
				
			<?php	
			
			$general_sql = "SELECT post.*, post_categories.name, users.username from `post` 
			JOIN `post_categories` ON post.category = post_categories.id        
			JOIN `users` ON post.user_id = users.id 
			WHERE post_categories.slug ='general' order by post.created_at DESC LIMIT 5";
			
			$general_result = mysql_query($general_sql);	
			
			while ($post = mysql_fetch_assoc($general_result))	{
			
				
			?>
			
				<div class="entry">
				
					<h3><a href="index.html"><?php echo $post['title'];?></a></h3>
					<p>
						<?php echo substr($post['content'],0,300);?>
					</p>
								
					<p><a class="more-link" href="index.html">continue reading</a></p>
				
				</div>
				
			<?php } ?>
				
				
			</div>
		
			<div id="right">
					
				<h3>Search</h3>
			
				<form id="quick-search" action="index.html" method="get" >
					<p>
					<label for="qsearch">Search:</label>
					<input class="tbox" id="qsearch" type="text" name="qsearch" value="type and hit enter..." title="Start typing and hit ENTER" />
					<input class="btn" alt="Search" type="image" name="searchsubmit" title="Search" src="images/search.gif" />
					</p>
				</form>	
				
				<div class="sidemenu">	
					<h3>Sidebar Menu</h3>
					<ul>				
						<li><a href="index.html">Home</a></li>
						<li><a href="index.html#TemplateInfo">TemplateInfo</a></li>
						<li><a href="style.html">Style Demo</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="archives.html">Archives</a></li>
						<li><a href="http://www.dreamtemplate.com" title="Web Templates">Web Templates</a></li>
					</ul>	
				</div>
							
				<div class="sidemenu">
					<h3>Sponsors</h3>
					<ul>
						<li><a href="http://www.dreamtemplate.com" title="Website Templates">DreamTemplate <br />
                            <span>Over 6,000+ Premium Web Templates</span></a>
                        </li>
						<li><a href="http://www.themelayouts.com" title="WordPress Themes">ThemeLayouts <br />
                            <span>Premium WordPress &amp; Joomla Themes</span></a>
                        </li>
						<li><a href="http://www.imhosted.com" title="Website Hosting">ImHosted.com <br />
                            <span>Affordable Web Hosting Provider</span></a>
                        </li>
						<li><a href="http://www.dreamstock.com" title="Stock Photos">DreamStock <br />
                            <span>Download Amazing Stock Photos</span></a>
                        </li>
						<li><a href="http://www.evrsoft.com" title="Website Builder">Evrsoft <br />
                            <span>Website Builder Software &amp; Tools</span></a>
                        </li>
						<li><a href="http://www.webhostingwp.com" title="Web Hosting">Web Hosting <br />
                            <span>Top 10 Hosting Reviews</span></a>
                        </li>
					</ul>
				</div>		
				
				
					
			</div>		
		
		</div>	
			
	<!-- content end -->	
	</div></div>
		
	<!-- footer starts here -->	
	<div id="footer-outer" class="clear"><div id="footer-wrap">
	
		<div class="col-a">
		
			<h3>Image Gallery </h3>					
				
			<p class="thumbs">
			
			<?php       
	
				$sql = "SELECT * FROM `gallery` LIMIT 8";				
				$gallery = mysql_query($sql); 	 
				if ($gallery && mysql_num_rows($gallery)) {	 
				while ($row = mysql_fetch_assoc($gallery)) {
				?>					
				<a class="cbox" href="<?php echo $upload_url.$row['path'];?>"><img height="40" width="40" src="<?php echo $upload_url.$row['path']; ?>"/> </a>
                  				
				<?php } } ?>
			</p>				
				
				
		</div>
		
		<div class="col-a">
		
			<h3>Lorem Ipsum</h3>
			
			<p>
			<strong>Lorem ipsum dolor</strong> <br />
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
			Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
			posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum 
			odio, ac blandit ante orci ut diam.</p>
		
				
		</div>		
	
		<div class="col-b">
		
			<h3>About</h3>			
			
			<p>
			<a href="index.html"><img src="images/gravatar.jpg" width="40" height="40" alt="firefox" class="float-left" /></a>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
			Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
			posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum 
			odio, ac blandit ante orci ut diam.</p>
			
			
			
		</div>		
	
	<!-- footer ends -->		
	</div></div>
	
	<!-- footer-bottom starts -->		
	<div id="footer-bottom">
		<div class="bottom-left">
			<p>
			&copy; 2010 <strong>Your Copyright Info Here</strong>&nbsp; &nbsp; &nbsp;
			<a href="http://www.bluewebtemplates.com/" title="Website Templates">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a>
			</p>
		</div>
	
		<div class="bottom-right">
			<p>		
				<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | 
		   	<a href="http://validator.w3.org/check/referer">XHTML</a>	|			
				<a href="index.html">Home</a> |
				<a href="index.html">Sitemap</a> |
				<a href="index.html">RSS Feed</a>								
			</p>
		</div>
	<!-- footer-bottom ends -->		
	</div>
	
<!-- wrap ends here -->
</div>

</body>
</html>
