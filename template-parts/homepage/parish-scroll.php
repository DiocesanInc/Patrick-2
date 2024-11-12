<?php

/**
 * Partial template for a single featured button
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package celine
 */
?>
<div class="parish-cluster parishFlex">
   <h1 class="parish-scroll-title"><?php echo get_field('parish_scroll_title');?></h1>
   <div class="parishScroll"
       data-btns="<?php echo count(get_field('parish_scroll')); ?>">
       <div class="testimonials-carousel carousel">
           <?php while (have_rows('parish_scroll')) : the_row();?>
             <div class="testimonial carousel-item">
               <?php $link = get_sub_field('parish');
                      $linkUrl = $link['url'] ?? '';
                      $linkTarget = $link['target'] ?? '';
                      $linkTitle = $link['title'] ?? '';?>
                 <a href="<?= $linkUrl;?>" target="<?= $linkTarget;?>"><h4 class="testimonial-title"><?= $linkTitle;?></h4></a>
             </div>
           <?php endwhile; ?>
       </div>
   </div>
 </div>