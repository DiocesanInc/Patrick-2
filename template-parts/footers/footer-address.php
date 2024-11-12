<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Patrick
 */

?>

<div class="footer-address">
    <h3 class="site-title"><?php echo get_bloginfo("name"); ?></h3>
    <div class="address">
        <a href="<?php echo get_field("address", "options")["url"]; ?>"
            title="<?php echo get_field("address", "options")["title"]; ?>"
            target="<?php echo get_field("address", "options")["target"]; ?>">
            <?php echo get_field("address", "options")["title"]; ?>
        </a>
    </div>
</div>
