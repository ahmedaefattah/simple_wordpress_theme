<?php get_header();   ?>

<div class="container content" >

	<div class="row">
	 	<div class="col-sm-4">
	    	 <?php get_sidebar('primary'); ?>
		</div>

	    <div class="col-sm-8">
		  	<h1 class="page-title"><?php _e( 'Oops! That page can’t be found.', 'my_theme' ); ?></h1>
		  	<div class="page-content">

				<?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'my_theme' ); ?>

		    	<?php get_search_form();?>
		 	</div>
	    </div>
	</div>
</div>

<?php get_footer();   ?>