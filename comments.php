<?php if ( post_password_required() ) {
	return;
} ?>

<div>

	<!--
	<?php if ( have_comments() ) :?>
	<h2 class="comments-title"><?php echo 'Comments ' . get_comments_number() ;?></h2>
	
	<h3><?php echo get_comment_author(1); ?></h3>
	<h5><?php echo get_comment_date('',1); ?></h5>
	<p><?php echo get_comment_text(1); ?></p>
	<?php endif;?> -->

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :?> 
		<p> <?php _e( 'Comments are closed.', 'my_theme' ); ?> </p>
	<?php endif;
		comment_form();
	?>
</div>