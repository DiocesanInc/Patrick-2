<?php

/**
 * Patrick functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patrick
 */

require_once get_template_directory() . '/blocks/index.php';

$inc = get_template_directory() . "/inc";

foreach (glob("/$inc/*.php") as $file) {
    include_once $file;
}

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Check if ACF is installed and show an error message if not
 *
 * @return void
 */
function acfIsInstalled()
{
    if (is_admin() && (!function_exists('get_field') || !function_exists('have_rows'))) {
        setErrorNotice("There’s a problem with Advanced Custom Fields. It might not be installed");
        return false;
    }
    return true;
}

/**
 * Set an error message
 *
 * @param string $message
 * @return void
 */
function setErrorNotice($message = "")
{
    echo "<div class='error notice'>
        <p>$message</p>
    </div>";
}

function getDefaultPlaceholderImage()
{
    return get_template_directory_uri() . "/assets/img/patrick_placeholder.png";
}

function add_custom_class_to_buttons($block_content, $block)
{
    // Check if the block is a button block
    if ('core/button' === $block['blockName']) {
        // Add your custom class to the block
        $block_content = str_replace('wp-block-button__link', 'wp-block-button__link the-button', $block_content);
    }

    return $block_content;
}
add_filter('render_block', 'add_custom_class_to_buttons', 10, 2);

require get_template_directory() . "/update-checker/plugin-update-checker.php";

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/DiocesanInc/Patrick-2',
    __FILE__,
    'patrick'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');
