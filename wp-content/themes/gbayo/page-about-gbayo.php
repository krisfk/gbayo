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

<div class="container mt-5 content-fsize">

    <div>
        Established and directed by The Hong Kong Academy for Performing Arts (HKAPA) with the support of the Swire
        Group as Founding Patron, the Greater Bay Area Youth Orchestra (GBAYO) aspires to be one of the finest youth
        orchestras in the world. It aims to provide a platform for the highest standard of classical orchestral
        performance in the Greater Bay Area (GBA) by offering professional training and coaching by world-class
        musicians to talented young musicians across the region.

    </div>
    <!-- <div class="text-end mt-3">

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
    </div> -->

</div>

<div class="mt-5">
    <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/about-img-2-scaled.jpg" alt="">
</div>


<div class="container ">

    <h2 class="subtitle text-start mt-5">Management team</h2>

    <div class="row mt-4">

        <div class="col-4 content-fsize">

            <h3 class="orange bold">Project Director</h3>
            <div class="bold">Dr. Iñaki Sandoval</div>

            Dean of the School of Music, <br>
            Hong Kong Academy for Performing Arts

        </div>

        <div class="col-4 content-fsize">

            <h3 class="orange bold">Artistic Coordinator</h3>
            <div class="bold">Professor Yiu Song Lam</div>

            Head of Woodwind, Brass and Percussion, <br> Hong Kong Academy For Performing Arts

        </div>
        <div class="col-4 content-fsize">
            <h3 class="orange bold">Programme Manager</h3>
            <div class="bold">Samantha Li</div>


        </div>
    </div>

</div>

<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>



<?php

get_footer();