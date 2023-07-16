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





<div class="full-width-img-div position-relative">

    <div class="position-absolute top left w-100 z-1">

        <div class="container">
            <img class="gbayo-big-txt" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/gbayo-big-txt.png"
                alt="">
        </div>

    </div>
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/main-banner-scaled.jpg"
        alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container mt-lg-5 mt-md-4 mt-sm-4 mt-4 content-fsize">

    <div>
        Established and directed by The Hong Kong Academy for Performing Arts (HKAPA) with the support of the Swire
        Group as
        Founding Patron, the Greater Bay Area Youth Orchestra (GBAYO) aspires to be one of the finest youth orchestras
        in
        the world. It aims to provide a platform for the highest standard of classical orchestral performance in the
        Greater Bay Area (GBA) by offering professional training and coaching by world-class musicians to talented young
        musicians across the region.
    </div>
    <div class="text-end mt-3">

        <a href="javascript:void(0);" class="more-btn">

            <span>more</span>
            <div class="five-lines-grid">
                <div class="text-center d-block line-wrapper">
                    <div class="line line-1"></div>
                </div>
                <div class="text-center d-block line-wrapper">
                    <div class="line line-2"></div>
                </div>
                <div class="text-center d-block line-wrapper">
                    <div class="line line-3"></div>
                </div>
                <div class="text-center d-block line-wrapper">
                    <div class="line line-4"></div>
                </div>
                <div class="text-center d-block line-wrapper">
                    <div class="line line-5"></div>
                </div>

            </div>
        </a>
    </div>

</div>

<div class="video-div mt-lg-5 mt-md-4 mt-sm-4 mt-4">



    <!-- <div class="mt-120px"> -->


    <iframe width="560" height="315" src="https://www.youtube.com/embed/0SkUSWkVnaM?rel=0" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>

    <!-- </div> -->


    <!-- <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/fake-video-scaled.jpg" alt=""> -->
    <!-- width="560" height="315" -->
    <!-- <iframe class="w-100" src="https://www.youtube.com/embed/Z-zy_ZSoFi4" title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe> -->

</div>


<div class="container ">

    <h2 class="subtitle text-center mt-lg-5 mt-md-4 mt-sm-4 mt-4">Concert</h2>

    <div class="row mt-4 gx-3">
        <div class="col-6">
            <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concert-preview-img.jpg"
                alt="">
        </div>
        <div class="col-6">
            <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concert-preview-img.jpg"
                alt="">
        </div>
    </div>

    <h2 class="subtitle  text-center mt-lg-5 mt-md-4 mt-sm-4 mt-4">Training Camp</h2>

    <div class="camp-slick-wrapper position-relative">
        <a href="javascript:void(0);" class="home-slick-arrow home-slick-arrow-left"></a>
        <a href="javascript:void(0);" class="home-slick-arrow home-slick-arrow-right"></a>

        <div class="camp-slick mt-4">

            <div class="camp overflow-hidden">


                <a href="javascript:void(0);" class="">
                    <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/fdsa@2x-50.jpg" alt="">
                </a>
            </div>
            <div class="camp overflow-hidden">
                <a href="javascript:void(0);" class="">

                    <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/fdsaf@2x-50.jpg"
                        alt="">
                </a>

            </div>
            <div class="camp overflow-hidden">
                <a href="javascript:void(0);" class="">

                    <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/fdsa@2x-50.jpg" alt="">
                </a>
            </div>

            <div class="camp overflow-hidden">


                <a href="javascript:void(0);" class="">
                    <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/fdsa@2x-50.jpg" alt="">
                </a>
            </div>
            <div class="camp overflow-hidden">
                <a href="javascript:void(0);" class="">

                    <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/fdsaf@2x-50.jpg"
                        alt="">
                </a>

            </div>
            <div class="camp overflow-hidden">
                <a href="javascript:void(0);" class="">

                    <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/fdsa@2x-50.jpg" alt="">
                </a>
            </div>



        </div>
    </div>

</div>

<div class="mt-lg-5 mt-md-4 mt-sm-4 mt-4">
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
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: false
            }
        }]



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