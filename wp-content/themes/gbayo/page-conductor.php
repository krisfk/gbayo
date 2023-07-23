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

        <div class="col-lg-4 col-md-12 col-sm-12 col-12 "></div>
        <div class="col-lg-8 col-md-12 col-sm-12 col-12  content-fsize">

            <img class="w-100" src="<?php echo wp_get_attachment_image_src(get_field('conductor_foto'),'full')[0];?>"
                alt="">


            <h2 class="subtitle text-start mt-30"><?php echo get_field('conductor_title');?></h2>

            <h3 class="orange bold"><?php echo get_field('conductor_subtitle');?></h3>





            <?php

echo get_field('conductor_text_content');
?>


        </div>


    </div>
</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-100">
    <div class="five-lines-sep"></div>
</div>

<?php

get_footer();