<?php
/*
* This is our first item.
*/
get_header();
?>


<?php get_template_part('templete-parts/Home', 'page'); ?>

<img src="<?php echo get_template_directory_uri() ?>/assest/img/CVR.jpg " style="width: 300px" alt="">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <h1> <?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <?php endwhile; ?> 
    <?php endif; ?>

<?php

get_sidebar();
get_footer();
?>