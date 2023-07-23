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

<div class="container mt-100 content-fsize">

    <div class="font-36">
        <?php
       echo get_field('about_gbayo_txt');
       ?>

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

<div class="mt-100">
    <img class="w-100 about-big-img"
        src="<?php echo wp_get_attachment_image_src(get_field('about_gbayo_bottom_banner_desktop'),'full')[0];?>"
        alt="">

    <img class="w-100 about-big-img mobile"
        src="<?php echo wp_get_attachment_image_src(get_field('about_gbayo_bottom_banner_mobile'),'full')[0];?>" alt="">

    <!-- http://64.227.13.14/gbayo/wp-content/uploads/2023/07/Asset-3@2x-50.jpg -->
</div>


<div class="container ">

    <h2 class="subtitle text-start mt-100"><?php echo get_field('management_team_title');?></h2>

    <div class="row mt-4">
        <?php

if( have_rows('staffs') )
{

    while( have_rows('staffs') ) { 
        the_row();
        ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 content-fsize mb-4">

            <h3 class="orange bold"><?php echo get_sub_field('staff_position');?></h3>
            <div class="bold"><?php echo get_sub_field('staff_name');?></div>
            <?php echo get_sub_field('staff_description');?>
        </div>

        <?php
    }
}
        
        ?>
        <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-12 content-fsize mb-4">

            <h3 class="orange bold">Project Director</h3>
            <div class="bold">Dr. Iñaki Sandoval</div>

            Dean of the School of Music, <br>
            Hong Kong Academy for Performing Arts

        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-12 content-fsize  mb-4">

            <h3 class="orange bold">Artistic Coordinator</h3>
            <div class="bold">Professor Yiu Song Lam</div>

            Head of Woodwind, Brass and Percussion, <br> Hong Kong Academy For Performing Arts

        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 content-fsize  mb-4">
            <h3 class="orange bold">Programme Manager</h3>
            <div class="bold">Samantha Li</div>


        </div> -->
    </div>

</div>

<div class="mt-100">
    <div class="five-lines-sep"></div>
</div>



<?php

get_footer();