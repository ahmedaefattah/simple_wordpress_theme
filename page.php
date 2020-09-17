<?php get_header(); ?>

<div class="container content" >
	 <div class="row">

	    <div class="col-sm-4">
	      <?php get_sidebar('primary'); ?>  
	    </div>

	    <div class="col-sm-8">
	     	<?php
			while ( have_posts() ) :
				the_post();

				the_content();
			endwhile; ?>
	    </div>
	 </div>
</div>

<?php get_footer(); ?>