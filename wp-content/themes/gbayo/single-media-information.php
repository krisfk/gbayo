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
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/media-banner-scaled.jpg"
        alt="">
    <img class="w-100 about-big-img mobile" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/Asset-8@2x-50.jpg"
        alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container mt-100  content-fsize">


    <div class="text-center">
        <ul class="news-ul mb-30">
            <li>
                <a href="<?php echo get_site_url();?>/media" class="">All</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/news" class="active">News</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/press-releases">Press Releases</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/videos">Videos</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/photos">Photos</a>
            </li>
        </ul>
    </div>

    <div class="row ">


        <div class="col-12">

            <ul class="media-news-data-ul">


                <li>

                    <!-- <a href="<?php echo get_permalink();?>" class="more-btn"> -->

                    <h3 class="orange bold d-inline-block">
                        <?php echo get_field('media_title');?>

                        <h3 class="orange bold d-inline-block">

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
                        </h3>



                    </h3>

                    <div>

                        <?php echo get_field('media_date');?>

                    </div>



                </li>

            </ul>


            <?php
            
            echo 11;
if(get_field('media_type')=='News')
{

    if( have_rows('media_news_images') )
         {

            while( have_rows('media_news_images') ) { 
            the_row();
            ?>
            <img class="w-100" src="<?php echo wp_get_attachment_image_src(get_sub_field('news_image'),'full')[0];?>"
                alt="">
            <?php

            }
        }
}



            ?>


        </div>





    </div>







</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-100">
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