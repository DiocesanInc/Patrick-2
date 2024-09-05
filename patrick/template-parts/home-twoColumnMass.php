<div class="massWrapper">
    <div class="massHalf">
        <div class="massPiece">
            <?php if( have_rows('mass_times_days' , 'options') ): ?>
                <!-- <h6>Mass Times</h6> -->
                <h1>Mass Times</h1>
                <?php while ( have_rows('mass_times_days' , 'options') ) : the_row(); ?>
                    <div>
                        <strong><?php echo get_sub_field('day'); ?></strong>
                        <?php while (have_rows("mass_times_times", "options")) : the_row() ?>
                                <span><?php echo get_sub_field("mass_times_label"); ?>
                                <?php echo get_sub_field("mass_times_time"); ?></span>
                        <?php endwhile; ?>
                     </div>
                <?php endwhile;
            else :
              // no rows found
            endif; ?>
        </div>
    </div>
</div>
<div class="landingButtons">
    <?php if( have_rows('landing_button' , 'options') ): ?>
        <?php while ( have_rows('landing_button' , 'options') ) : the_row(); ?>
            <?php $landingButton = get_sub_field('button'); 
                    $url = $landingButton['url'] ?? ''; 
                    $target = $landingButton['target'] ?? ''; 
                    $title = $landingButton['title'] ?? '';?>
            <a class="button" href="<?php echo $url; ?>" target="<?php echo $target; ?>"><?php echo $title; ?></a>
        <?php endwhile;
    else :
      // no rows found
    endif; ?>
</div>
