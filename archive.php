<?php get_header(); ?>

<div class="container content" >
	<div class="row">

	    <div class="col-sm-4">	
	        <?php get_sidebar('primary'); ?>
	    </div>

	    <div class="col-sm-8">

	      	<?php if ( have_posts() ) : ?>
      			<div class="page-header">
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' );?>
				</div>
				<?php while ( have_posts() ) :
					the_post(); ?>
				<h2><a href="<?php  esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h2>
	    		<h5 style="display: inline-block;"><?php echo  get_the_author(); ?> <small><?php echo get_the_date(); ?></small></h5>
			    <div>
			       <?php
					if ( has_post_thumbnail() ) {
						 the_post_thumbnail();
					}?>
				</div>
				<div class="text-justify"><?php the_content();?></div>
		 		<?php endwhile;?>
			<?php else: ?>
				<p>No posts found.</p>
			<?php endif; ?>		   	
	    </div>
	</div>
</div>

<?php get_footer(); ?>
