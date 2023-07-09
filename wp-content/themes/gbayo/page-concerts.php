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
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concerts-banner.png" alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container mt-5 content-fsize">


    <div class="row">

        <div class="col-4">

            <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concert-temp-img.jpg" alt="">

            <h3 class="bold orange">GBAYO Debut Concert 2023 (Hong Kong)</h3>

            <table>
                <tr>
                    <td class="bold">Date:</td>
                    <td>11 Aug 2023</td>
                </tr>
                <tr>
                    <td class="bold">Time:</td>
                    <td>8pm</td>
                </tr>
                <tr>
                    <td class="bold">Venue:</td>
                    <td>The Hong Kong Jockey Club Amphitheatre, HKAPA</td>
                </tr>
                <tr>
                    <td class="bold">City:</td>
                    <td>Hong Kong</td>
                </tr>
            </table>


        </div>
    </div>







</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>

<?php

get_footer();