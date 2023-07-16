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
        src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/training-camp-banner-scaled.jpg" alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container mt-lg-5 mt-md-4 mt-sm-4 mt-4  content-fsize">


    <div class="row gx-3">


        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">

            <a href="javascript:void(0);" class="camp-cate mb-3 d-block position-relative" style="">
                <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/bg-1.jpg" alt="">

                <div class="camp-cate-title camp-cate-title-1 bold">Coming <br> Soon</div>
                <div class="camp-cate-title camp-cate-title-2 bold">Orchestra</div>
            </a>
        </div>



        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">

            <a href="javascript:void(0);" class="camp-cate mb-3 d-block position-relative" style="">
                <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/bg-2.jpg" alt="">


                <div class="camp-cate-title camp-cate-title-1 bold">Coming <br> Soon</div>
                <div class="camp-cate-title camp-cate-title-2 bold">Chamber <br>
                    Music</div>
            </a>
        </div>


        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">

            <a href="javascript:void(0);" class="camp-cate mb-3 d-block position-relative" style="">
                <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/bg-1.jpg" alt="">


                <div class="camp-cate-title camp-cate-title-1 bold">Coming <br> Soon</div>
                <div class="camp-cate-title camp-cate-title-2 bold">Masterclass <br>
                    & Workshop</div>
            </a>
        </div>


        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">

            <a href="javascript:void(0);" class="camp-cate mb-3 d-block position-relative" style="">
                <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/bg-2.jpg" alt="">


                <div class="camp-cate-title camp-cate-title-1 bold">Coming <br> Soon</div>
                <div class="camp-cate-title camp-cate-title-2 bold">Leisure <br>
                    Activities</div>
            </a>
        </div>





    </div>







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