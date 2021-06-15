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
	

<footer class="white-footer">
    <div class="container-fluid">
        <div class="white-footer__content">
            <p><?php echo date('Y'); ?>. <?php the_field('all_rights_reserved', 'option'); ?></p>
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
                    We use cookies to enhance your browsing experience, analyze site traffic and serve tailored
                    advertisements. By continung to our use of cookies.
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
