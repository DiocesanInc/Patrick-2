<?php

/**
 * Partial for the page header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package patrick
 */

$minsTitle = '';
if (isset($args["headerImg"])) {
    $headerImg = $args["headerImg"];
} else {
    if (get_post_type() === 'staff') {
        $headerImg = getDefaultFeaturedImage(true) ? getDefaultFeaturedImage(true) : get_stylesheet_directory_uri() . "/assets/img/patrick_placeholder.png";
    } else if (is_tax('ministry-group')){
        $term = get_field('ministry_group_image', get_queried_object()->taxonomy . '_' . get_queried_object()->term_id);
        $headerImg = $term ? $term['url'] : get_field("default_featured_image", "options");
        $minsTitle = "<h1 class='entry-title'>" . preg_replace("/^([\w ]+)Group:\s+/i", "", get_the_archive_title()) . "</h1>";
    }
    else {
      if (has_post_thumbnail()) {
          $headerImg = get_the_post_thumbnail_url(null, "large");
      } else {
          $headerImg = getDefaultFeaturedImage(true) ? getDefaultFeaturedImage(true) : get_stylesheet_directory_uri() . "/assets/img/patrick_placeholder.png";
      }
    }
}

$headline = $args["headline"] ? "<h1 class='entry-title'>" . $args["headline"] . "</h1>" : "<h1 class='entry-title'>" . get_the_title() . "</h1>";
?>

<div class="entry-header page-header" style="background-image: url(<?php echo $headerImg; ?>)">
    <?php echo $minsTitle ? $minsTitle : $headline; ?>
    <div class="overlay" style="opacity: <?php echo get_field("page_header_overlay", "options"); ?>"></div>
</div><!-- .entry-header -->
