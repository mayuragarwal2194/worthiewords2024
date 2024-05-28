<?php
/*
Template Name: Elementor Blank Canvas
*/

get_header(); ?>

<div class="elementor-blank">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile; // End of the loop.
    ?>
</div>

<?php
get_footer();
