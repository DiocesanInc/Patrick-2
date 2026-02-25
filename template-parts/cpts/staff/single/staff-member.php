<?php

/**
 * Template part for displaying staff member archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Patrick
 */


$staffImage = has_post_thumbnail() ? get_the_post_thumbnail_url() : getField("default_featured_image", "options", true, get_template_directory_uri() . "/assets/img/patrick_placeholder.png");

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content staff-member">
        <a href=" <?php the_permalink(); ?>">

            <img class="staff-member-image" src="<?php echo $staffImage; ?>;" />
        </a>
        <div class="staff-member-info">
            <div class="staff-member-title-wrapper">
                <?php the_title("<div class='staff-member-title'>", "</div>"); ?>

                <div class="staff-member-position">
                    <?php echo get_field("position"); ?>
                </div>
            </div>

            <div class="staff-member-contact-wrapper">
                <?php if (get_field("phone")) : ?>
                <a href="tel:<?php echo get_field("phone"); ?>" class="staff-member-phone">
                    Phone: <?php echo get_field("phone"); ?>
                </a>
                <?php endif; ?>

                <?php if (!get_field("has_link") && get_field("email")) : ?>
                <a href="mailto:<?php echo get_field("email"); ?>" class="staff-member-email">
                    Email
                </a>
                <?php elseif (get_field("has_link") && get_field("link")) : ?>
                <a title="<?php the_title(); ?>" href="<?php echo get_field("link")["url"]; ?>">
                    <i class="fa-solid fa-link"></i>
                </a>
                <?php endif; ?>

            </div>

        </div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
