<?php

/**
 * Template part for displaying the contact form on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Patrick
 */

$form_id = get_field("contact_form")["id"];

?>

<?php if ($form_id) : ?>
<div class="contact-form-container">

    <?php if (get_field("contact_form_heading")) : ?>
    <h2 class="contact-form-heading">
        <?php echo get_field("contact_form_heading"); ?>
    </h2>
    <?php endif; ?>

    <?php
        if (function_exists("gravity_form")) :
            gravity_form($form_id, false, false);
        endif;
        ?>

</div>
<?php endif; ?>
