<?php

/**
 * Partial for the hero section: Image(s).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package patrick
 */

$slideClasses = get_field("parallax_scrolling") ? "hero-slide parallax" : "hero-slide";

?>
<?php if (have_rows("slider")) : ?>
    <div class="hero">
        <div class="hero-slider">
            <?php while (have_rows("slider")) : the_row();
                $bgImg = get_sub_field("image");
                $sliderRowsCount = count(get_field("slider"));
            ?>

                <div class="preload-this <?php echo $slideClasses; ?>"
                    style="background-image: url(<?php echo $bgImg["url"] ?>)">

                    <?php
                    $size = "thumbnail";
                    $previewImg = wp_get_attachment_image_src($bgImg["ID"], "bgImgPreview"); ?>
                    <?php if ($sliderRowsCount > 1): ?>
                        <img src="<?php echo $previewImg[0] ?>" class="preview-image" alt="hero-preview" />
                    <?php endif; ?>


                    <?php get_template_part("template-parts/homepage/hero", "overlay"); ?>
                    <?php get_template_part("template-parts/homepage/hero", "info"); ?>

                </div>
            <?php endwhile; ?>
        </div>
        <?php
        $massTimesVersion = get_field("use_new_setup", "options") ? "legacy" : "modern";
        get_template_part("template-parts/homepage/hero", "mass-times-$massTimesVersion"); ?>
    </div>
<?php endif;
