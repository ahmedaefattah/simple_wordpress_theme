
	  <?php get_header();   ?>
	  

	  <div class="container content" >
	    <div class="row">

	      <div class="col-sm-4">
	      	
	        <?php get_sidebar('primary'); ?>
	      
	      </div>

	      <div class="col-sm-8">
	      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	       
	        <h2><a href="<?php  esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h2>
	        <h5 style="display: inline-block;"><?php echo  get_the_author(); ?> <small><?php echo get_the_date(); ?></small></h5>
	        <span><?php edit_post_link('Edit'); ?></span>

	        <div>
	        	<?php
					if ( has_post_thumbnail() ) {
					    the_post_thumbnail();
					}?>
			</div>

	        <div class="text-justify"><?php the_content();?></div>

	        <?php wp_link_pages(); ?>
			
	        <hr>

	        <?php endwhile; ?>

			<?php
			if ( get_next_posts_link() ) {
				next_posts_link();
			}
			?>

			<?php
			if ( get_previous_posts_link() ) {
				previous_posts_link();
			}
			?>
			<?php else: ?>
		 
				<p>No posts found.</p>
		 
			<?php endif; ?>
	      </div>
	    </div>
	  </div>

<?php get_footer();   ?>