<?php get_header();   ?>

<div class="container content" >
	<div class="row">

	    <div class="col-sm-4">
	      	
	        <?php get_sidebar('primary'); ?>
	      
	    </div>

	    <div class="col-sm-8">
	      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	       
	        <h2><a href="<?php  esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h2>

	        <h5 style="display: inline-block;">
	        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"> 
	        	<?php echo get_the_author(); ?></a><small>, <?php echo get_the_date(); ?></small>
	        </h5>
	      
	        <span><?php edit_post_link('Edit'); ?></span>

	        <div>
	        	<?php
					if ( has_post_thumbnail() ) {
					    the_post_thumbnail();
					}?>
			</div>

	        <div class="text-justify"><?php the_content();?></div>

	        <?php wp_link_pages(); ?>
			<span><?php the_tags(); ?></span>
		
			      <?php wp_link_pages(); ?>
			<span><?php the_tags(); ?></span>
			<?php $categories = get_the_category();
			if ( ! empty( $categories ) ) {
				echo '<span>Category: </span>';
				foreach( $categories as $category ) {
			    $category_link  = '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . 
			    					esc_html( $category->name ) . '</a>'; 
			
			 echo '<span>' . sprintf( esc_html__( '%s ', 'textdomain' ), $category_link ) . '</span> '; 
			}
		}?>
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