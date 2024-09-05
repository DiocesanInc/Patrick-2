<?php

/**
 * Template Name: Cluster
 *
 * The template for displaying the Homepage Template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package patrick
 */

get_header();
?>

<div class="content-area" id="primary">
    <main class="site-main page-template-homepage" id="main">
        <?php get_template_part("template-parts/homepage/hero"); ?>


            <?php get_template_part("template-parts/homepage/parishes"); ?>
            <?php get_template_part("template-parts/homepage/mission"); ?>
            <?php get_template_part("template-parts/homepage/featured-content"); ?>
            <?php get_template_part("template-parts/homepage/news"); ?>
            <?php //get_template_part("template-parts/homepage/gallery"); ?>
            <?php //get_template_part("template-parts/homepage/banner"); ?>
            <?php get_template_part("template-parts/homepage/contact"); ?>

    </main>
</div>

<?php get_footer();
