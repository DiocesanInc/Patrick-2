<?php

/**
 * Template part for displaying staff biography
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Patrick
 */

?>
<?php
$staffImage = has_post_thumbnail() ? get_the_post_thumbnail_url() : getField("default_featured_image", "options", true, get_template_directory_uri() . "/assets/img/patrick_placeholder.png");
?>

<?php if(has_post_thumbnail()):?><img class="single-thumbnail" src="<?php echo $staffImage; ?>;" /><?php else: endif;?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="the-content">
        <?php the_content(); ?>
    </div>
</article>
