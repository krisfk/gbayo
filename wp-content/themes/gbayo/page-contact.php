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

<div class="container mt-100  content-fsize">



    <h2 class="bold mb-5"><?php echo get_field('big_txt');?></h2>



    <!-- [contact-form-7 id="e0e19e8" title="Contact form 1"] -->

    <?php
    
    
    echo do_shortcode( '[contact-form-7 id="e0e19e8" title="Contact form 1"]' );
?>
    <!-- <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
            <label for="name" class="mb-1">Name:</label>
            <input type="text" id="name" class="form-control">

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-4 ">

            <label for="email" class="mb-1">Email:</label>
            <input type="text" id="email" class="form-control">

        </div>
        <div class="col-12 ">

            <label for="message" class="mb-1">Message:</label>
            <textarea type="text" id="message" class="form-control"></textarea>

            <div class="text-end mt-4">
                <a href="javascript:void(0);" class="more-btn">


                    <span><?php echo get_field('submit_btn_txt');?>

                    </span>

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
            </div>
        </div>

    </div> -->




    <?php ?>












</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>


<script type="text/javascript">
$(function() {

    $('.musician-more-btn').click(function() {

        $('.lightbox-layer').fadeIn(200);
    })

})
</script>
<?php

get_footer();