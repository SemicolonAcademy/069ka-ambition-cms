<?php 
if (!$_SESSION['login']) exit;
?>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="admin.php">PHP Course</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="admin.php">Home</a></li>
              <li><a href="navigations.php">Navigations</a></li>
              <li><a href="posts.php">Posts</a></li>
              <li><a href="settings.php">Settings</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="#contact">Feedback</a></li>
              <li><a href="logout.php">Logout - <?php echo $_SESSION['username']; ?></a></li>              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
