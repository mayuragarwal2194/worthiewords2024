<?php
/*
Template Name: Full Width
Template Post Type: post, page
*/

get_header(); ?>

<div class="full-width-content">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile; // End of the loop.
    ?>
</div>

<?php
get_footer();