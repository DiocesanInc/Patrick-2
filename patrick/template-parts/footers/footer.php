<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Patrick
 */

?>

<div class="footer-wrapper limit-width">
    <div class="contact-wrapper">
        <?php get_template_part("template-parts/footers/footer", "address"); ?>
        <?php get_template_part("template-parts/footers/footer", "contact"); ?>
    </div>
    <?php get_template_part("template-parts/footers/footer", "social-media"); ?>
    <?php get_template_part("template-parts/footers/footer", "quicklinks"); ?>
</div>