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
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concerts-banner.png" alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container mt-5 content-fsize">


    <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-6 col-6  mb-5">

            <img class="w-100 concert-img"
                src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concert-temp-img-1.jpg" alt="">

            <h3 class="bold orange mt-4">GBAYO Debut Concert 2023 <br> (Hong Kong)</h3>

            <table class=" mt-4">
                <tr>
                    <td class="bold pe-3 align-top">Date:</td>
                    <td class="align-top">11 Aug 2023</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">Time:</td>
                    <td class="align-top">8pm</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">Venue:</td>
                    <td class="align-top">The Hong Kong Jockey Club Amphitheatre, HKAPA</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">City:</td>
                    <td class="align-top">Hong Kong</td>
                </tr>
            </table>

        </div>


        <div class="col-lg-4 col-md-6 col-sm-6 col-6  mb-5">

            <img class="w-100 concert-img"
                src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concert-temp-img-2.jpg" alt="">

            <h3 class="bold orange mt-4">GBAYO Concert 2023 <br> (Macau)
            </h3>

            <table class="mt-4">
                <tr>
                    <td class="bold pe-3 align-top">Date:</td>
                    <td class="align-top">12 Aug 2023</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">Time:</td>
                    <td class="align-top">8pm</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">Venue:</td>
                    <td class="align-top">Macau Tower</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">City:</td>
                    <td class="align-top">Macau</td>
                </tr>
            </table>

        </div>


        <div class="col-lg-4 col-md-6 col-sm-6 col-6  mb-5">

            <img class="w-100 concert-img"
                src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concert-temp-img-3.jpg" alt="">

            <h3 class="bold orange mt-4">GBAYO Concert 2023 <br> (Shenzhen)

            </h3>

            <table class="mt-4">
                <tr>
                    <td class="bold pe-3 align-top">Date:</td>
                    <td class="align-top">14 Aug 2023</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">Time:</td>
                    <td class="align-top">8pm</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">Venue:</td>
                    <td class="align-top">Theater Hall, Shenzhen Grant Theatre</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">City:</td>
                    <td class="align-top">Shenzhen</td>
                </tr>
            </table>

        </div>


        <div class="col-lg-4 col-md-6 col-sm-6 col-6  mb-5">

            <img class="w-100 concert-img"
                src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concert-temp-img-4.jpg" alt="">

            <h3 class="bold orange mt-4">GBAYO Concert 2023 <br> (Guangzhou)

            </h3>

            <table class="mt-4">
                <tr>
                    <td class="bold pe-3 align-top">Date:</td>
                    <td class="align-top">15 Aug 2023</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">Time:</td>
                    <td class="align-top">8pm</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">Venue:</td>
                    <td class="align-top">Concert Hall, Xinghai Concert Hall</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">City:</td>
                    <td class="align-top">Guangzhou</td>
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