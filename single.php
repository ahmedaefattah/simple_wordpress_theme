<?php get_header(); ?>
  
<div class="container content" >
    <div class="row">
        <div class="col-sm-4">
                <?php get_sidebar('primary'); ?>
        </div>
        <div class="col-md-8">
            <?php while ( have_posts() ) : the_post();?>
                <h1><?php the_title(); ?></h1>
                <h4><small><i>by <?php echo  get_the_author() .', ' . get_the_date(); ?></i></small></h4>
                <div>
                   <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }?> 
                </div>
                <div class=" text-justify">
                    <?php the_content();?>
                </div>
            <?php endwhile;?>
            <hr>
            <div>
                <?php
                 if ( comments_open() || get_comments_number() ) :
                     comments_template();
                 endif;
                 ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>


