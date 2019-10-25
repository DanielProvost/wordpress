<?php
/*
 * Template Name: custom-page-contact
 */
wp_head(); ?>

<?php    get_template_part('index', 'bannerstrip'); ?>

<?php //the_title('<h1 class="entry-title">', '</h1>' );
//
//?>
    <!---->

<?php the_post(); echo the_content(); ?>



<div class="formulaire">
    <?php echo do_shortcode('[contact-form-7 id="164" title="Contact form 1"]'); ?>
</div>


<?php
get_footer();
?>