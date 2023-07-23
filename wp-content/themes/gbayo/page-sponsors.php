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
    <img class="top-banner w-100"
        src="<?php echo wp_get_attachment_image_src(get_field('top_banner_desktop'),'full')[0];?>" alt="">

    <img class="top-banner w-100 mobile"
        src="<?php echo wp_get_attachment_image_src(get_field('top_banner_mobile'),'full')[0];?>" alt="">
</div>



<div class="five-lines-sep"></div>

<div class="container mt-100">

    <div class="row ">

        <?php
    if( have_rows('sponsors') )
    {
    
        while( have_rows('sponsors') ) { 
            the_row();
            echo 1;
            ?>

        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start"><?php echo get_sub_field('sponsor_title');?></h3>

                <a href="<?php echo get_sub_field('sponsor_link');?>" target="_blank" class="sponsor-rect mx-auto">

                    <img src="<?php echo wp_get_attachment_image_src(get_field('sponsor_logo'),'full')[0];?>" alt="">
                </a>

            </div>
        </div>
        <?php
        }
    }
    ?>


        <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start">Sponsored<br>by</h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-19.png" alt="">
                </a>

            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start">Sponsored<br>by</h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-20.png" alt="">
                </a>

            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start">Co-organiser <br>
                    for the Macau Concert</h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-21.png" alt="">
                </a>

            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start">Shenzhen Concert <br>
                    Supporting Unit</h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-22.png" alt="">
                </a>

            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start">Guangzhou Concert <br>
                    Supporting Unit</h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">

                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-23.png" alt="">
                </a>

            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-30">

            <div>
                <h3 class="bold orange sponsor-title text-start">Co-organiser <br>
                    for the Macau Concert</h3>

                <a href="javascript:void(0);" class="sponsor-rect mx-auto">


                    <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/sponsors_logos-24.png" alt="">
                </a>

            </div>
        </div> -->







    </div>
</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>

<?php

get_footer();