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
            <h1 class="page-main-heading"><?php echo get_the_title();?></h1>
        </div>

    </div>
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/about-banner-1-scaled.jpg"
        alt="">

    <img class="w-100 about-big-img mobile"
        src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/Asset-2@2x-50-1.jpg" alt="">




</div>


<div class="five-lines-sep"></div>

<div class="container mt-100">

    <div class="row ">

        <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start">Founding Patron</h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-18.png" alt="">
                </a>

            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start">Sponsored by</h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-19.png" alt="">
                </a>

            </div>
        </div>


        <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start empty"></h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-20.png" alt="">
                </a>

            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start">Co-organiser <br>
                    for the Macau Concert</h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-21.png" alt="">
                </a>

            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start">Shenzhen Concert <br>
                    Supporting Unit</h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-22.png" alt="">
                </a>

            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start">Guangzhou Concert <br>
                    Supporting Unit</h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-23.png" alt="">
                </a>

            </div>
        </div>


        <div class="col-lg-4 col-md-12 col-sm-12 col-12 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start">Co-organiser <br>
                    for the Macau Concert</h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">


                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-24.png" alt="">
                </a>

            </div>
        </div>







    </div>
</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>

<?php

get_footer();