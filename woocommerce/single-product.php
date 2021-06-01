<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
    
        
	?>
    <section class="product-menu">
        <div class="container-fluid">
            <div class="product-menu__list">
                <a href="#main-info" class="product-menu-item scroll-section active">
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/info.svg" alt="">
                    <span>main info</span>
                </a>
                <a href="#product-description" class="product-menu-item scroll-section">
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/menu.svg" alt="">
                    <span>PRODUCT DESCRIPTION</span>
                </a>
                <a href="#video" class="product-menu-item scroll-section">
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/play.svg" alt="">
                    <span>Video</span>
                </a>
                <a href="#reviews" class="product-menu-item scroll-section">
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/comm.svg" alt="">
                    <span>Customer Reviews</span>
                </a>
                <div class="product-menu__share">
                    <a href="#">
                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/share.svg" alt="">
                    </a>
                </div>
            </div>
            
        </div>
    </section> 
    <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>

        <?php wc_get_template_part( 'content', 'single-product' ); ?>

    <?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
