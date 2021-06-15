<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package toy
 */

get_header();
?>
	<section class="textpage">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-9">
					<div id="primary" class="content-area">
		
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

		
					</div><!-- #primary -->
				</div>
			</div>
		</div>
	</div>
	<img class="termsperl1" src="<?php echo SD_THEME_IMAGE_URI; ?>/popupperl3.png" alt="img">
	<img class="termsperl2" src="<?php echo SD_THEME_IMAGE_URI; ?>/popupperl3.png" alt="img">
	<img class="termsperl3" src="<?php echo SD_THEME_IMAGE_URI; ?>/popupperl3.png" alt="img">
</section>
<?php get_template_part('template-parts/sections/contact-block'); ?>

<?php
get_sidebar();
get_footer();
