<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



    <!-- <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css"> -->


    <script type="text/javascript">
    $(function() {
        $('.more-btn').mouseenter(function() {


            // $('.more-btn .five-lines-grid .line').animate({
            //     'width': '0%'
            // }, 1000);

        });

    })
    </script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <div class="menu-layer">

        <a href="javascript:void(0);" class="close-btn"></a>

        <div class="menu-top-div">

            <div class="container"> <img class="gbayo-logo-white"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/gbayo-logo-white.png" alt=""></div>

        </div>
        <div class="lang-div">

            EN | 繁 | 簡

        </div>
        <div>

            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

    </div>


    <a href="javascript:void(0);" class="hamburger-menu-btn">


        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </a>

    <div class="fix-social-elements">
        <ul class="">
            <li class="follow-us">Follow Us</li>
            <li class="dash"> ー </li>
            <li> <a target="_blank" href="javascript:void(0);" class="facebook fix-icon-a  fix-icon-a-1"> </a>
            </li>
            <li> <a target="_blank" href="javascript:void(0);" class="instagram fix-icon-a fix-icon-a-2"> </a>
            </li>
            <li> <a target="_blank" href="javascript:void(0);" class="youtube fix-icon-a fix-icon-a-3"> </a></li>
        </ul>
    </div>

    <a class="fix-back-to-top" href="javascript:void(0);">

        <span class="pe-3">Back to Top</span>
        <span class="back-to-top-arrow"></span>
    </a>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php
		/* translators: Hidden accessibility text. */
		esc_html_e( 'Skip to content', 'twentytwentyone' );
		?>
        </a>

        <?php //get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">