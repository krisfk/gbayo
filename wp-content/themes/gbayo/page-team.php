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

    <!-- <h2 class="subtitle text-start mt-100"><?php echo get_field('management_team_title');?></h2> -->

    <div class="row mt-4">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 content-fsize ">

            <?php

if( have_rows('left_staffs') )
{

    while( have_rows('left_staffs') ) { 
        the_row();
        ?>
            <div class="content-fsize mb-4">

                <div class="bold"><?php echo get_sub_field('staff_position');?></div>
                <h3 class="bold orange"><?php echo get_sub_field('staff_name');?></h3>


                <?php echo get_sub_field('staff_description');?>
            </div>

            <?php
    }
}
        
        ?>

        </div>


        <div class="col-lg-6 col-md-6 col-sm-6 col-12 content-fsize ">


            <?php

if( have_rows('right_staffs') )
{

    while( have_rows('right_staffs') ) { 
        the_row();
        ?>
            <div class=" content-fsize mb-4">

                <div class="bold"><?php echo get_sub_field('staff_position');?></div>
                <h3 class="bold orange"><?php echo get_sub_field('staff_name');?></h3>


                <?php echo get_sub_field('staff_description');?>
            </div>

            <?php
    }
}
        
        ?>

        </div>


    </div>

</div>

<div class="mt-100">
    <div class="five-lines-sep"></div>
</div>



<?php

get_footer();