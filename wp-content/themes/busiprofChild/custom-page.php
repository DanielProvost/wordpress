<?php
/*
 * Template Name: custom-page
 */
wp_head(); ?>

<?php    get_template_part('index', 'bannerstrip'); ?>

<?php //the_title('<h1 class="entry-title">', '</h1>' );
//
//?>
<!---->

        <?php the_post(); echo the_content(); ?>




<?php echo do_shortcode('[visual_portfolio id="132" class=""]'); ?>

<?php
get_footer();
?>