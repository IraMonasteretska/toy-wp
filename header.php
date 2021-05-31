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
<body <?php body_class(); ?>>
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
                            <ul>
                                <li><a href="home.html">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Product</a></li>
                                <li><a href="#">Contacts</a></li>
                                <li><a href="#">Buy</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-2 justify-content-end d-flex bagcol">

                        <a href="#">
                            <div class="header__bag">
                                <img src="<?php echo SD_THEME_IMAGE_URI; ?>/icon/bag.svg" alt="cart">
                                <span>1</span>
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
