<?php

/**
 * Partial for the hero section: Mass Times
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package patrick
 */

if (have_rows("new_mass_time_repeater", "options")) : ?>
    <div class="hero-mass-times-modern">

        <div class="hero-mass-title">
            <h3>Mass Times</h3>
        </div>
        <div class="separator hidden-mobile"></div>
        <div class="mass-time-wrappers">
            <?php while (have_rows("new_mass_time_repeater", "options")) : the_row(); ?>
                <?php if (get_sub_field("show_on_homepage")) :
                    $title = get_sub_field("title"); ?>
                    <div class="mass-time-wrapper">

                        <div class="mass-time-day">
                            <?php echo $title; ?>
                        </div>
                        <div class="mass-times-list">
                            <?php
                            $item_number = 1;
                            $total_items = 0;

                            //calculate number of mass time items to display on homepage
                            while (have_rows("times_repeater")) : the_row();
                                if (get_sub_field("show_on_homepage")) :
                                    $total_items++;
                                endif;
                            endwhile;

                            while (have_rows("times_repeater")) : the_row();
                                if (get_sub_field("show_on_homepage")) : ?>

                                    <?php if ($item_number === 2) : ?>
                                        <div class="more" data-dropdown="<?php echo $title; ?>">more</div>
                                        <div class="mass-times-dropdown-container" data-dropdown="<?php echo $title; ?>">
                                        <?php endif; ?>

                                        <div class="mass-time" data-item-number="<?php echo $item_number; ?>">
                                            <?php echo get_sub_field("time");

                                            if (get_sub_field("language")) : ?>
                                                <span class="language">
                                                    (<?php echo get_sub_field("language"); ?>)
                                                </span>
                                            <?php endif; ?>

                                            <?php if ($total_items > 1 && $item_number === $total_items) : ?>
                                        </div>
                                    <?php endif; ?>

                                        </div>

                                <?php
                                    $item_number++;
                                endif;
                            endwhile; ?>
                        </div>


                    </div>
                <?php endif; ?>
            <?php endwhile; ?>

        </div>
        <div class="mass-times-schedule-link">
            <?php $mass = get_field("hero_mass_times_link") ?? '';
            $massUrl = get_field("hero_mass_times_link")["url"] ?? '';
            $massTitle = get_field("hero_mass_times_link")["title"] ?? ''; ?>

            <?php echo acfLink($massUrl, "the-button", $massTitle); ?>
        </div>
    </div>

<?php endif; ?>