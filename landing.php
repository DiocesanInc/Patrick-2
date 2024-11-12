<?php
/**
 * Template Name: Landing
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sacredheartjoliet
 */

get_header();
?>


	<div id="primary" class="content-area" >
		<main id="main" class="site-main">

        <div class="landingLogo">
            <img src="<?php echo get_field('header_logo' , 'options'); ?>">
        </div>

        <div class="landingMass homeMass">
            <?php get_template_part( 'template-parts/home', 'twoColumnMass' ); ?>
        </div>

				<?php echo the_content();?>
				<!-- <p>Thrift Store hours Tuesday drop offs only 9-12 / Thu, Fri Sat open 9am -1:30pm for shopping and drop offs
				Registration for new parishioners. We need 10 spots for parents to add up to 10 children please.</p>

				<p>Events: Women's Guild, first Tuesday of each month
				Knights of Columbus Round Table, meets third Tuesday of each month
				Bereavement Group, meets  second Tuesday of each month
				Craft Fair & Flea Market October 21, 8am - 1pm! </p> -->

        <div class="landingAddress">
            <?php get_template_part( 'template-parts/footers/footer', 'address' ); ?>
        </div>

				<div class="landingPhones">
						<?php if( have_rows('phone_numbers' , 'options') ):
							while ( have_rows('phone_numbers' , 'options') ) : the_row(); ?>
									<div class="landingPhone"><?php echo get_sub_field('title'); ?>: <a href="tel:<?php echo get_sub_field('phone_number'); ?>"><?php echo get_sub_field('phone_number'); ?></a></div>
							<?php endwhile;
						else :

						endif; ?>
				</div>
				<div class="landingSocial">
						<?php get_template_part( 'template-parts/footers/footerContent/footer', 'social' ); ?>
				</div>
        <div class="landingTriangle"></div>
        <h2 class="landingTriangleTitle">NEW WEBSITE COMING SOON</h2>


		</main><!-- #main -->
	</div><!-- #primary -->
 <?php
 get_footer();
