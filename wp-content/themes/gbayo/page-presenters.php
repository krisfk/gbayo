<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>



<div class="full-width-img-div position-relative mt-3">

    <div class="position-absolute top left w-100 z-1">

        <div class="container">
            <h1 class="page-main-heading mt-5">Presenters</h1>
        </div>

    </div>
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/about-banner-1-scaled.jpg"
        alt="">
</div>


<div class="five-lines-sep"></div>



<div class="mt-5">
    <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/about-img-2-scaled.jpg" alt="">
</div>



<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>

<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<script type="text/javascript">
$(function() {

    $('.camp-slick').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        useTransform: false,
        // responsive: [{
        //     breakpoint: 991,
        //     settings: "unslick"
        // }]
    });

    $('.home-slick-arrow.home-slick-arrow-left').click(function() {
        $('.slick-prev.slick-arrow').click();
    });
    $('.home-slick-arrow.home-slick-arrow-right').click(function() {
        $('.slick-next.slick-arrow').click();

    });

})
</script>

<?php

get_footer();