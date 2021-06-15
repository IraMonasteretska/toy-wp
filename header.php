<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package toy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<?php
    if (is_front_page() || is_page_template( 'contacts.php' ) || is_page_template( 'about-us.php' )) { ?>
        <body <?php body_class(); ?> >
   <?php } else { ?>
        <body <?php body_class('greybg'); ?> >
   <?php }
?>

    <header class="header">
        <div class="header__pinkrow">
            <div class="container-fluid text-center">
                <p>FREE SHIPPING ON ORDERS OVER $99.99</p>
                
            </div>
        </div>
        <div class="header__content">
            <div class="container-fluid">
                <button class="burgermenu-icon"></button>
                <div class="row menurow">
                    <div class="col-md-10">
                        <nav>
                            <?php
                                if( has_nav_menu( 'main_menu' ) ) {
                                    wp_nav_menu(array(
                                        'menu' => 'main_menu',
                                        // 'menu_class' => 'main-menu',
                                        'theme_location' => 'main_menu',
                                        'container' => 'ul',
                                    ));
                                }						
                            ?>
                        </nav>
                    </div>
                    <div class="col-md-2 justify-content-end d-flex bagcol">

                        <a href="<?php echo esc_url(wc_get_cart_url()); ?>">
                            <div class="header__bag">
                                <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/bag.svg" alt="cart">
                                <span class="header__cart-price">
                                   <?php echo  WC()->cart->get_cart_contents_count(); ?>
                                </span>
                            </div>
                        </a>
                    </div>
                    <buttom class="closemenu"></buttom>
                    <img class="menuperl1" src="<?php echo SD_THEME_IMAGE_URI; ?>/perl1.png" alt="img">
                    <img class="menuperl2" src="<?php echo SD_THEME_IMAGE_URI; ?>/perl2.png" alt="img">
                </div>
            </div>
        </div>
       
    </header>
    
	<main class="td-main">
