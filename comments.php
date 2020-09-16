<?php if ( post_password_required() ) {
	return;
} ?>

<div>

	<?php if ( have_comments() ) :?>
	<h2>Comments <span class="badge badge-pill badge-secondary"><?php echo get_comments_number() ;?></span></h2>
	


	<ul >
            <?php wp_list_comments( array(
            		'type'        => 'comment',
                    'style'       => 'ul',
                    'short_ping'  => true,
                    'avatar_size' => 0

                ) );
            ?>
    </ul>

	<?php endif;?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :?> 
		<p> <?php _e( 'Comments are closed.', 'my_theme' ); ?> </p>
	<?php endif;
		comment_form();
	?>
</div>