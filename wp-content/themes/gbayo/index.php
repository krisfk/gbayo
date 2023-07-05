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




<div class="container mt-3">

    <div class="top-div">


        <div class="row align-items-center">
            <div class="col-3"> <a href="javascript:void(0);" class="logo-a"><img
                        src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/Asset-5@2x.png" alt=""></a>

            </div>

            <div class="col-9 text-end">


                <table class="d-inline-block">
                    <tr>
                        <td class="align-top">Presented by</td>
                        <td> <a href="javascript:void(0);" class="top-presenter-logos-a ms-4">

                                <img class="" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/logo-1.png"
                                    alt="">
                            </a>
                            <a href="javascript:void(0);" class="top-presenter-logos-a ms-4">

                                <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/logo-2.png" alt="">
                            </a>
                            <a href="javascript:void(0);" class="top-presenter-logos-a ms-4">

                                <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/logo-3.png" alt="">
                            </a>
                        </td>
                    </tr>
                </table>


            </div>

        </div>

    </div>

</div>

<div class="full-width-img-div position-relative mt-3">

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

<div class="container mt-5">

    Established and directed by The Hong Kong Academy for Performing Arts (HKAPA) with the support of the Swire Group as
    Founding Patron, the Greater Bay Area Youth Orchestra (GBAYO) aspires to be one of the finest youth orchestras in
    the world.  It aims to provide a platform for the highest standard of classical orchestral performance in the
    Greater Bay Area (GBA) by offering professional training and coaching by world-class musicians to talented young
    musicians across the region.

</div>
<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->



<?php

get_footer();