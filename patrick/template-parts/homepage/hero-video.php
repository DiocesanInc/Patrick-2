<?php

/**
 * Partial for the hero section: Video.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package patrick
 */

?>
<?php if (get_field("hero_video")) : ?>
<div class="hero has-video">
    <?php while (have_rows("hero_video")) : the_row(); ?>
    <?php get_template_part("template-parts/homepage/hero", "overlay"); ?>

    <video class="hero-video" loop muted autoplay playsinline poster="<?php echo get_sub_field("poster_image"); ?>">
        <source src="<?php echo get_sub_field("mp4"); ?>" type="video/mp4">
        <source src="<?php echo get_sub_field("ogg"); ?>" type="video/ogg">
        <source src="<?php echo get_sub_field("webm"); ?>" type="video/webm">
    </video>

    <div class="hero-info">
        <h1 class="hero-title has-white-color">
            <?php echo get_field("hero_video_text"); ?>
        </h1>

        <div class="hero-buttons">
            <?php $button = get_field("hero_video_button");
                    echo acfLink($button["url"], "the-button", $button["title"]); ?>
        </div>
    </div>
    <?php endwhile; ?>
    <?php
        $massTimesVersion = get_field("use_legacy_setup", "options") ? "legacy" : "modern";
        get_template_part("template-parts/homepage/hero", "mass-times-$massTimesVersion");
        ?>

</div>
<?php endif;
