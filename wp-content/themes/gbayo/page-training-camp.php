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

    <div class="row gx-3">



        <?php


$query_args = array(
	'post_type' => 'training-camp',
);

// The Query
$the_query = new WP_Query( $query_args );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
        ?>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-30">

            <a href="<?php echo get_permalink();?>" class="camp-cate  d-block position-relative" style="">
                <img class="w-100"
                    src="<?php echo wp_get_attachment_image_src(get_field('camp_thumbnail_background'),'full')[0];?>"
                    alt="">

                <div class="camp-cate-title camp-cate-title-1 bold"
                    style="color:<?php echo get_field('camp_thumbnail_title_color');?>"><?php
                echo get_field('camp_thumbnail_title');
                ?></div>
                <div class="camp-cate-title camp-cate-title-2 bold" style="color:<?php echo get_field('camp_name_color');?>>
                    <?php
                    echo get_field('camp_name');
                    
                    ?>
                </div>
            </a>
        </div>


        <?php
	}
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}

?>



        <!-- 
        <div class=" col-lg-6 col-md-12 col-sm-12 col-12 mb-30">

                    <a href="<?php echo get_site_url();?>/orchestra" class="camp-cate  d-block position-relative"
                        style="">
                        <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/bg-1.jpg" alt="">

                        <div class="camp-cate-title camp-cate-title-1 bold">Coming <br> Soon</div>
                        <div class="camp-cate-title camp-cate-title-2 bold">Orchestra</div>
                    </a>
                </div>



                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-30">

                    <a href="<?php echo get_site_url();?>/orchestra" class="camp-cate  d-block position-relative"
                        style="">
                        <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/bg-2.jpg" alt="">


                        <div class="camp-cate-title camp-cate-title-1 bold">Coming <br> Soon</div>
                        <div class="camp-cate-title camp-cate-title-2 bold">Chamber <br>
                            Music</div>
                    </a>
                </div>


                <div class="col-lg-6 col-md-12 col-sm-12 col-12  mb-30 ">

                    <a href="<?php echo get_site_url();?>/orchestra" class="camp-cate  d-block position-relative"
                        style="">
                        <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/bg-2.jpg" alt="">


                        <div class="camp-cate-title camp-cate-title-1 bold">Coming <br> Soon</div>
                        <div class="camp-cate-title camp-cate-title-2 bold">Masterclass <br>
                            & Workshop</div>
                    </a>
                </div>


                <div class="col-lg-6 col-md-12 col-sm-12 col-12   ">

                    <a href="<?php echo get_site_url();?>/orchestra" class="camp-cate  d-block position-relative"
                        style="">
                        <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/bg-1.jpg" alt="">


                        <div class="camp-cate-title camp-cate-title-1 bold">Coming <br> Soon</div>
                        <div class="camp-cate-title camp-cate-title-2 bold">Leisure <br>
                            Activities</div>
                    </a>
                </div> -->





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