<?php get_header(); ?>

	  <div class="container content" >
	    <div class="row">

	      <div class="col-sm-4">
	      	
	        <?php get_sidebar('primary'); ?>
	      
	      </div>

	      <div class="col-sm-8">
	     			<?php if ( have_posts() ) : ?>
					<div class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</div>
				<?php endif; ?>
	       	
	    

	        <div>
	        	<?php
					if ( has_post_thumbnail() ) {
					    the_post_thumbnail();
					}?>
			</div>
				     	<?php if ( have_posts() ) :?>
	        <div class="text-justify">
	   
			<?php
			
			while ( have_posts() ) :
				the_post();

				 <div class="text-justify"><?php the_content();?></div>

	        </div>

	        

	        <?php endwhile;?>

			
			<?php else: ?>
		 
				<p>No posts found.</p>
		 
			<?php endif; ?>
	      </div>
	    </div>
	  </div>



<?php get_footer(); ?>



