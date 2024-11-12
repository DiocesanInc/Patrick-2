<?php

/**
 * Partial for the hero section: Single Mass Time
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package patrick
 */

extract($args);

?>

<div class="mass-time-wrapper">
    <div class="mass-time-day">
        <h4><?php echo $day; ?></h4>
    </div>

    <div class="mass-times-list">
        <?php foreach ($times as $time) : ?>
        <h6>
            <?php echo $time["mass_times_time"]; ?>
        </h6>
        <?php endforeach; ?>
    </div>
</div>
