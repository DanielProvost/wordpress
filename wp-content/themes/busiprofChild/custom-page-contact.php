<?php
/*
 * Template Name: custom-page-contact
 */
wp_head(); ?>

<?php    get_template_part('index', 'bannerstrip'); ?>


<?php the_post(); echo the_content(); ?>

<!--    <div style="display: flex;flex-wrap: wrap;justify-content: center;">-->
        <div class="formulaire">
            <?php echo do_shortcode('[contact-form-7 id="164" title="Contact form 1"]'); ?>
        </div>



<!--    </div>-->


<?php
get_footer();
?>