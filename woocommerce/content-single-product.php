<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section class="single-product" id="main-info">
    <div class="container-fluid">
        <div class="product__wrapper">
         
            <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product__slider">
                            <?php
                                /**
                                 * Hook: woocommerce_before_single_product_summary.
                                 *
                                 * @hooked woocommerce_show_product_sale_flash - 10
                                 * @hooked woocommerce_show_product_images - 20
                                 */
                                do_action( 'woocommerce_before_single_product_summary' );
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="summary product__summary entry-summary">
                            <?php
                                /**
                                 * Hook: woocommerce_single_product_summary.
                                 *
                                 * @hooked woocommerce_template_single_title - 5
                                 * @hooked woocommerce_template_single_rating - 10
                                 * @hooked woocommerce_template_single_price - 10
                                 * @hooked woocommerce_template_single_excerpt - 20
                                 * @hooked woocommerce_template_single_add_to_cart - 30
                                 * @hooked woocommerce_template_single_meta - 40
                                 * @hooked woocommerce_template_single_sharing - 50
                                 * @hooked WC_Structured_Data::generate_product_data() - 60
                                 */
                                do_action( 'woocommerce_single_product_summary' );
                            ?>
                        </div>
                    </div>
                </div>
             

                

                <?php
                /**
                 * Hook: woocommerce_after_single_product_summary.
                 *
                 * @hooked woocommerce_output_product_data_tabs - 10
                 * @hooked woocommerce_upsell_display - 15
                 * @hooked woocommerce_output_related_products - 20
                 */
                // do_action( 'woocommerce_after_single_product_summary' );
                ?>
            </div>
           
        </div>
    </div>
    
</section>

<section class="product-description" id="product-description">
    <div class="container-fluid">
        <div class="description__wrapper">
            <div class="description__head">
                <div class="description__head-name">
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/menu.svg" alt="">
                    <span>PRODUCT DESCRIPTION</span>
                </div>
                <div class="description__head-desc">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
            <div class="description__title">
                Here may be an idea that was the basis for creating your product or <span>Your main statement.</span> 
            </div>
            <div class="row ">
                <div class="col-lg-6">
                    <div class="description__text">
                        <p>
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p> 
                        <h2>Portable</h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute 
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/description.jpg" alt="">
                </div>
                <div class="col-12 description__text-bottom">
                    <div class="description__text">
                        <p>
                            Nec feugiat in fermentum posuere urna nec. Consequat interdum varius sit amet. 
                            In hac habitasse platea dictumst quisque sagittis purus. Semper risus in hendrerit gravida rutrum. Nec feugiat in fermentum posuere urna nec. Consequat interdum varius sit amet. 
                            In hac habitasse platea dictumst quisque sagittis purus. Semper risus in hendrerit gravida rutrum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="description__images">
                <div class="description-image">
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/description-img.jpg" alt="">
                    <p>Picture description</p>
                </div>
                <div class="description-image">
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/description-img.jpg" alt="">
                    <p>Picture description</p>
                </div>
                <div class="description-image">
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/description-img.jpg" alt="">
                    <p>Picture description</p>
                </div>
            </div>
            
        </div>
        
    </div>
</section>

<section class="video" id="video">
    <div class="container-fluid">
        <div class="description__wrapper">
            <div class="description__head">
                <div class="description__head-name">
                    <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/play.svg" alt="">
                    <span>Video</span>
                </div>
                <div class="description__head-desc">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
            <div class="video-home__slider-df">

                <div class="video-home__slider-for">
                    <div class="video-home__for-item">
                        <div class="video-home__for-video-wpap">
                            <video class="video-home__for-video">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/design-video.mp4" type="video/mp4">
                                </source>
                            </video>
                            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/icon-play-video.svg" class="video-home__for-icon-play" alt="play">
                        </div>
        
                    </div>
                    <div class="video-home__for-item">
                        <div class="video-home__for-video-wpap">
                            <video class="video-home__for-video">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/seo-video.mp4" type="video/mp4">
                                </source>
                            </video>
                            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/icon-play-video.svg" class="video-home__for-icon-play" alt="play">
                        </div>
        
                    </div>
                    <div class="video-home__for-item">
                        <div class="video-home__for-video-wpap">
                            <video class="video-home__for-video">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/digital-video.mp4" type="video/mp4">
                                </source>
                            </video>
                            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/icon-play-video.svg" class="video-home__for-icon-play" alt="play">
                        </div>
        
                    </div>
                    <div class="video-home__for-item">
                        <div class="video-home__for-video-wpap">
                            <video class="video-home__for-video">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/design-video.mp4" type="video/mp4">
                                </source>
                            </video>
                            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/icon-play-video.svg" class="video-home__for-icon-play" alt="play">
                        </div>
        
                    </div>
                    <div class="video-home__for-item">
                        <div class="video-home__for-video-wpap">
                            <video class="video-home__for-video">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/seo-video.mp4" type="video/mp4">
                                </source>
                            </video>
                            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/icon-play-video.svg" class="video-home__for-icon-play" alt="play">
                        </div>
        
                    </div>
                    <div class="video-home__for-item">
                        <div class="video-home__for-video-wpap">
                            <video class="video-home__for-video">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/digital-video.mp4" type="video/mp4">
                                </source>
                            </video>
                            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/icon-play-video.svg" class="video-home__for-icon-play" alt="play">
                        </div>
        
                    </div>
                </div>
                <div class="video-home__slider-nav">
                    <div class="video-home__nav-item">
                        <div class="video-home__nav-video-wpap">
                            <video class="video-home__nav-video">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/design-video.mp4" type="video/mp4">
                                </source>
                            </video>
                            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/icon-play-video.svg" class="video-home__icon-play" alt="play">
                        </div>
        
                    </div>
                    <div class="video-home__nav-item">
                        <div class="video-home__nav-video-wpap">
                            <video class="video-home__nav-video">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/seo-video.mp4" type="video/mp4">
                                </source>
                            </video>
                            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/icon-play-video.svg" class="video-home__icon-play" alt="play">
                        </div>
        
                    </div>
                    <div class="video-home__nav-item">
                        <div class="video-home__nav-video-wpap">
                            <video class="video-home__nav-video">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/digital-video.mp4" type="video/mp4">
                                </source>
                            </video>
                            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/icon-play-video.svg" class="video-home__icon-play" alt="play">
                        </div>
        
                    </div>
                    <div class="video-home__nav-item">
                        <div class="video-home__nav-video-wpap">
                            <video class="video-home__nav-video">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/design-video.mp4" type="video/mp4">
                                </source>
                            </video>
                            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/icon-play-video.svg" class="video-home__icon-play" alt="play">
                        </div>
        
                    </div>
                    <div class="video-home__nav-item">
                        <div class="video-home__nav-video-wpap">
                            <video class="video-home__nav-video">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/seo-video.mp4" type="video/mp4">
                                </source>
                            </video>
                            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/icon-play-video.svg" class="video-home__icon-play" alt="play">
                        </div>
        
                    </div>
                    <div class="video-home__nav-item">
                        <div class="video-home__nav-video-wpap">
                            <video class="video-home__nav-video">
                                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/digital-video.mp4" type="video/mp4">
                                </source>
                            </video>
                            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/icon-play-video.svg" class="video-home__icon-play" alt="play">
                        </div>
        
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</section>

<section class="reviews reviews_product" id="reviews">
    <div class="container-fluid">
        <div class="reviews__wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="description__head">
                            <div class="description__head-name">
                                <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/comm_w.svg" alt="">
                                <span>Customer Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="offset-xl-1q col-lg-5">
                        <div class="reviews__left">
                            

                            <div class="reviews__title">What customers say about our product</div>
                            <div class="reviews__subtitle">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                            <!-- <div class="reviews__btn">
                                <a href="#" class="btn_border">Write a review</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="reviews__right">
                            <div class="reviews__slider-arrows">
                                <div class="reviews__slider-prev">Prev</div>
                                <div class="reviews__slider-next">Next</div>
                            </div>
                            <div class="reviews__slider">
                                <div class="reviews-item">
                                    <div class="reviews-item__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                    <div class="reviews-item__star">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                    </div>
                                    <div class="reviews-item__name">july</div>
                                    <div class="reviews-item__date">bought 2 months ago</div>
                                </div>
                                <div class="reviews-item">
                                    <div class="reviews-item__text">Facilisis magna etiam tempor orci eu lobortis elementum nibh!</div>
                                    <div class="reviews-item__star">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                    </div>
                                    <div class="reviews-item__name">Mark t.</div>
                                    <div class="reviews-item__date">bought 1 months ago</div>
                                </div>
                                <div class="reviews-item">
                                    <div class="reviews-item__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                    <div class="reviews-item__star">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                    </div>
                                    <div class="reviews-item__name">july</div>
                                    <div class="reviews-item__date">bought 2 months ago</div>
                                </div>
                                <div class="reviews-item">
                                    <div class="reviews-item__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                    <div class="reviews-item__star">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                                    </div>
                                    <div class="reviews-item__name">july</div>
                                    <div class="reviews-item__date">bought 2 months ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
        
    </div>
</section>


<section class="contactsection_main">
    <div class="container-fluid">
        <div class="contactsection__boxes">
            <div class="contactsection__box">
                <p class="title tel">Our phone number</p>
                <a href="tel:80400600400">80 (400) 600 400</a>
            </div>
            <div class="contactsection__box">
                <p class="title mail">Our email</p>
                <a href="mail:kids_toy@email.com">kids_toy@email.com</a>
            </div>
            <div class="contactsection__box">
                <p class="title offaddr">Our office address</p>
                <p>245 Park Avenue, FL39 / New York City, NY 10167</p>
            </div>
        </div>
    </div>
</section>

<?php do_action( 'woocommerce_after_single_product' ); ?>
