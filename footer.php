<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package toy
 */
?>
</main>
<footer class="pink-footer">
    <div id="scene_footer" class="footer-parallax">
        <div data-depth="0.2">
            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/footer-perl1.png" alt="perl">
        </div>
    </div>
    <div class="container-fluid">
        <div class="pink-footer__content">
            <p><?php echo date('Y'); ?>. <?php the_field('all_rights_reserved', 'option'); ?></p>
            <div class="scrol-up">up</div>
        </div>
    </div>
</footer>	


<section class="cookie">
    <div class="container-fluid">
        <div class="cookie__content">
            <button class="cookie__close"></button>
            <p class="title">Cookie talk</p>
            <div class="descr">
                <p>
                    <?php the_field('cookie_text', 'option'); ?>
                </p>
            </div>
            <a href="#" class='cookies__ok'>accept cookies</a>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="rewiew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="rewiew-content">
                <button class="closepopup" data-dismiss="modal" aria-label="Close"></button>
                <p class="title">Submit your rewiew</p>
                <?php echo do_shortcode('[site_reviews_form assigned_posts="174" hide="terms,title"]');?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
