<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Patrick
 */

get_header();
?>

<main id="primary" class="site-main archive content-area">

    <?php   $term = get_queried_object();
            $headline = get_the_category()[0]->cat_name;
            $catSlug = get_the_category()[0]->category_nicename;
            $archivePath = "template-parts/content";
            
            if (have_posts()) :

                get_template_part("/template-parts/headers/page-header", null, array("headerImg" => get_field("default_featured_image", "options"), "headline" => $headline)); ?>

    <div class="grid-container limit-width">
        <?php

                    $sticky = get_option('sticky_posts');

                    if ($sticky) :
                        $stickyArray = $sticky[0];
                        $query = new WP_Query(
                            array(
                                'post__in' => get_option('sticky_posts'), 
                                'category_name' => $catSlug, 
                                "order_by" => "date menu_order", 
                                "order" => "DESC"
                            )
                        );

                        /* Start the Loop */
                        while ($query->have_posts()) : $query->the_post();

                            /*
                    * Include the Post-Type-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                    */
                            get_template_part($archivePath, "archive");

                        endwhile;
                    endif;

                    $query = new WP_Query(
                        array(
                            'post__not_in' => get_option('sticky_posts'), 
                            'category_name' => $catSlug, 
                            "order_by" => "date menu_order", 
                            "order" => "DESC"
                        )
                    );

                    /* Start the Loop */
                    while ($query->have_posts()) : $query->the_post();

                        /*
                    * Include the Post-Type-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                    */
                        get_template_part($archivePath, "archive");

                    endwhile; ?>
    </div>



    <?php //the_posts_navigation();

            else :

                get_template_part('template-parts/content', 'none');

            endif;

    ?>


</main><!-- #main -->

<?php
get_footer();
