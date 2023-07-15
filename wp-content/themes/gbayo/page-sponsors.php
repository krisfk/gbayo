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
            <h1 class="page-main-heading"><?php echo get_the_title();?></h1>
        </div>

    </div>
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/about-banner-1-scaled.jpg"
        alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container">

    <div class="row mt-5">

        <div class="col-4">

            <div>
                <h3 class="bold orange sponsor-title">Founding Patron</h3>

                <a href="javascript:void(0);" class="sponsor-rect">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/Asset-16@2x.png" alt="">
                </a>

            </div>
        </div>

        <div class="col-4">

            <div>
                <h3 class="bold orange sponsor-title">Sponsored by</h3>

                <a href="javascript:void(0);" class="sponsor-rect">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/Asset-12@2x.png" alt="">
                </a>

            </div>
        </div>


        <div class="col-4">

            <div>
                <h3 class="bold orange sponsor-title"></h3>

                <a href="javascript:void(0);" class="sponsor-rect">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/Asset-13@2x.png" alt="">
                </a>

            </div>
        </div>

        <div class="col-4">

            <div>
                <h3 class="bold orange sponsor-title">Co-organiser <br>
                    for the Macau Concert</h3>

                <a href="javascript:void(0);" class="sponsor-rect">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/Asset-11@2x.png" alt="">
                </a>

            </div>
        </div>

        <div class="col-4">

            <div>
                <h3 class="bold orange sponsor-title">Shenzhen Concert <br>
                    Supporting Unit</h3>

                <a href="javascript:void(0);" class="sponsor-rect">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/Asset-10@2x.png" alt="">
                </a>

            </div>
        </div>

        <div class="col-4">

            <div>
                <h3 class="bold orange sponsor-title">Guangzhou Concert <br>
                    Supporting Unit</h3>

                <a href="javascript:void(0);" class="sponsor-rect">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/Asset-14@2x.png" alt="">
                </a>

            </div>
        </div>


        <div class="col-4">

            <div>
                <h3 class="bold orange sponsor-title">Co-organiser <br>
                    for the Macau Concert</h3>

                <a href="javascript:void(0);" class="sponsor-rect">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/Asset-15@2x.png" alt="">
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