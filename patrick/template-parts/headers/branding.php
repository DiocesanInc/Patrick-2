<?php

/**
 * Partial for the site branding.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package patrick
 */
?>

<div class="site-branding">
    <a href="<?php echo home_url(); ?>" class="header-logo-link" title="<?php bloginfo(); ?>" rel="home">
        <img src="<?php echo get_field("header_logo", "options"); ?>" alt="<?php bloginfo(); ?>" class="header-logo header-logo-default" />
        <img src="<?php echo get_field("header_logo_sticky", "options"); ?>" alt="<?php bloginfo(); ?>" class="header-logo header-logo-sticky" />
    </a>
</div>
