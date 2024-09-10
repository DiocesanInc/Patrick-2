<?php

/**
 * Template Name: Mass Times
 *
 * The template for displaying the mass times Template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package patrick
 */

get_header();
?>

<div class="content-area" id="primary">
    <main class="site-main page-template-mass-times" id="main">
        <?php get_template_part('template-parts/headers/page-header'); ?>

        <?php if (get_field("use_legacy_setup", "options")): ?>
        <?php if (have_rows("mass_times_days", "options")) : ?>
        <div class="mass-times-container grid-container limit-width">
            <?php while (have_rows("mass_times_days", "options")) : the_row(); ?>
            <div class="mass-times-section teaser-box">
                <h1 class="mass-times-title">
                    <?php echo get_sub_field("day"); ?>
                </h1>
                <?php while (have_rows("mass_times_times", "options")) : the_row(); ?>
                <div class="mass-time">
                    <div class="mass-time-day">
                        <?php echo get_sub_field("mass_times_label"); ?>
                    </div>
                    <div class="mass-time-time">
                        <?php echo get_sub_field("mass_times_time"); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endwhile; ?>

        </div>
        <?php endif;
        else:
            if (have_rows("new_mass_time_repeater", "options")): ?>
        <div class="mass-times-container grid-container limit-width">
            <?php while (have_rows("new_mass_time_repeater", "options")): the_row(); ?>
            <div class="mass-times-section teaser-box">
                <h2 class="mass-times-title">

                    <?php echo get_sub_field("title"); ?>
                </h2>

                <?php while (have_rows("times_repeater", "options")): the_row(); ?>
                <div class="mass-time">
                    <div class="mass-time-time">
                        <?php echo get_sub_field("time"); ?>

                        <?php if (get_sub_field("end_time")): ?>
                        - <?php echo get_sub_field("end_time"); ?>
                        <?php endif; ?>

                        <?php if (get_sub_field("language")): ?>
                        <em>
                            (<?php echo get_sub_field("language"); ?>)
                        </em>
                        <?php endif; ?>

                        <?php if (get_sub_field("note")): ?>
                        <div>
                            * <?php echo get_sub_field("note"); ?>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif;
        endif; ?>
        <div class="limit-width">
            <?php the_content(); ?>
        </div>
    </main>
</div>

<?php get_footer();