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
            <h1 class="page-main-heading mt-5"><?php echo get_the_title();?></h1>
        </div>

    </div>
    <img class="top-banner w-100"
        src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/training-camp-banner-scaled.jpg" alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container mt-5 content-fsize">


    <div class="text-center">
        <ul class="news-ul mb-5">
            <li>
                <a href="javascript:void(0);" class="">All</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="">News</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="">Press Releases</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="">Videos</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="active">Photos</a>
            </li>
        </ul>
    </div>

    <div class="row mt-5">


        <div class="col-12">


            <ul class="media-news-data-ul">

                <li>

                    <!-- <a href="javascript:void(0);" class="more-btn"> -->

                    <h3 class="orange bold d-inline-block">Greater Bay Area Youth Orchestra (GBAYO) 2023 Season
                        Recruitment
                        Starts

                    </h3>


                    <!-- </a> -->

                    <div>16 Feb 2023
                    </div>
                </li>

            </ul>

            <!-- <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/news-img.jpg" alt=""> -->
        </div>





    </div>


    <div class="row mt-4">

        <div class="col-4">

            <a href="javascript:void(0);">
                <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg" alt="">
            </a>
        </div>
        <div class="col-8">

            <a href="javascript:void(0);">
                <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg" alt="">
            </a>
        </div>
    </div>

    <div class="row mt-4">

        <div class="col-8">

            <a href="javascript:void(0);">
                <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg" alt="">
            </a>
        </div>
        <div class="col-4">

            <a href="javascript:void(0);">
                <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg" alt="">
            </a>
        </div>

    </div>

    <div class="row mt-4 ">

        <div class="col-4">

            <a href="javascript:void(0);">
                <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg" alt="">
            </a>
        </div>
        <div class="col-8">

            <a href="javascript:void(0);">
                <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg" alt="">
            </a>
        </div>
    </div>

    <div class="row mt-4 ">


        <div class="col-8">

            <a href="javascript:void(0);">
                <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg" alt="">
            </a>
        </div>
        <div class="col-4">

            <a href="javascript:void(0);">
                <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg" alt="">
            </a>
        </div>
    </div>







</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>


<script type="text/javascript">
$(function() {

    $('.musician-more-btn').click(function() {

        $('.lightbox-layer').fadeIn(200);
    })

})
</script>
<?php

get_footer();