<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Patrick
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
        <?php the_post_thumbnail();
        the_title("<h3 class='post-title'>", "</h3>");


        if (has_excerpt(get_the_ID())) :
            the_excerpt();
        else :
            echo wp_trim_words(get_the_content(), 25);
        endif; ?>
        <div class="read-more-wrapper">

            <a href="<?php the_permalink(get_the_ID()); ?>" class="more" title="<?php the_title(); ?>">read more ></a>
        </div>
        <?php wp_link_pages(); ?>

    </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->