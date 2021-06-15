<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package toy
 */

get_header(); ?>

	<div class="container-fluid">
            <div class="error-container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="errorpagecontent">
                            <p class="subtitle">404</p>
                            <p class="title">page is not found</p>
                            <div class="descr">
                                <p>
                                    We are already working to fix this error. You can return to the main page to
                                    continue
                                    working with the site.
                                </p>
                            </div>
                            <a href="<?php echo site_url();?>">go to the main page</a>
                        </div>
                    </div>
                </div>
                <div id="scene" class="errorpage-parallax">
                    <div data-depth="0.2">
                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/parallax/parallax-errorpage1.png" alt="perl">
                    </div>
                    <div data-depth="0.1">
                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/parallax/parallax-errorpage2.png" alt="perl">
                    </div>
                    <div data-depth="-0.1">
                        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/parallax/parallax-errorpage3.png" alt="perl">
                    </div>
                </div>
            </div>
        </div>
<?php get_footer('white');

