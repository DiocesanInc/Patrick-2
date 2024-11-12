<?php

/**
 * Template part for displaying the stats on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Patrick
 */


$parallax = get_field("stats_bg_is_parallax") ? "background-attachment: fixed;" : "";
$bannerType = get_field("banner_content_type") ? "mass-times" : "stats";
?>

<div class="banner-container <?php echo "$bannerType-container"; ?>"
    style="background-image: url(<?php echo get_field("stats_background_image")["url"]; ?>); <?php echo $parallax; ?>">

    <div class="banner-content-wrapper <?php echo $bannerType; ?>">
        <?php if (get_field("banner_heading")) : ?>
        <h2 class="banner-heading text-decoration-is-centered"><?php echo get_field("banner_heading"); ?>
        </h2>
        <?php endif; ?>

        <?php get_template_part("template-parts/homepage/$bannerType"); ?>

    </div>
</div>
