
<?php if ( is_active_sidebar('primary') ) : ?>

        <?php dynamic_sidebar('primary'); ?>

<?php else : ?>

	    <h2>About Me</h2>
	    <h5>Photo of me:</h5>
	    <div ><img class="img-responsive img-thumbnail" src="<?php echo get_template_directory_uri() . '/assets/images/img_avatar.png '?>"></div>
	    <p>Some text about me..</p>

	    <h3>Some Links</h3>
	    <ul class="nav nav-pills flex-column">
	        <li class="nav-item"><a class="nav-link active" href="index">Home</a></li>
	        <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
	        <li class="nav-item"><a class="nav-link" href="about">About</a></li> 
	        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>  
	    </ul>
	       
<?php endif; ?>





