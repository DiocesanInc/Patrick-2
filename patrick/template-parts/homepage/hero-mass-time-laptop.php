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

<div class="mass-time-wrapper hidden-mobile">
    <div class="mass-time-day">
        <h3><?php echo $day; ?></h3>
    </div>

    <div class="mass-times-list">
        <?php foreach ($times as $time) : ?>
        <h5>
            <?php echo $time["mass_times_time"]; ?>
        </h5>
        <?php endforeach; ?>
    </div>
</div>
