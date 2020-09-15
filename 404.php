	  <?php get_header();   ?>
	  <!--
	 <div class="container">
	    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="collapsibleNavbar">
	      <ul class="navbar-nav">
	        <li class="nav-item active "><a class="nav-link " href="index.html">Home</a></li>
	        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
	        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
	        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>     
	      </ul>
	    </div>  
	  </nav>
	 </div> -->



	  <div class="container content" >

	    <div class="row">
	      <div class="col-sm-4">
	        <h2>About Me</h2>
	        <h5>Photo of me:</h5>
	        <div ><img class="img-responsive img-thumbnail" src="<?php echo get_template_directory_uri() . '/assets/images/img_avatar.png '?>"></div>
	        <p>Some text about me..</p>
	        <h3>Some Links</h3>
	        <ul class="nav nav-pills flex-column">
	          <li class="nav-item "><a class="nav-link active" href="index.php">Home</a></li>
	          <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
	          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li> 
	          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
	          
	        </ul>
	        <hr class="d-sm-none">
	      </div>

	      <div class="col-sm-8">
	      	<h1 class="page-title"><?php _e( 'Oops! That page can’t be found.', 'my_theme' ); ?></h1>
	      	<div class="page-content">
  
			 <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'my_theme' ); ?>
  
              <?php get_search_form(); ?>
         </div>
	      </div>
	    </div>
	  </div>

<?php get_footer();   ?>