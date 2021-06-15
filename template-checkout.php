<?php
/*Template Name: checkout*/

get_header(); ?>
<?php 
    // echo do_shortcode('[woocommerce_checkout]') ;
?>
<?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile; // End of the loop.
    ?>
<?php
get_footer('white');


?>