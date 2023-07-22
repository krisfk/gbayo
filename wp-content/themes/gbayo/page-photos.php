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
        <ul class="news-ul mb-5">
            <li>
                <a href="<?php echo get_site_url();?>/media">All</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/news">News</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/press-releases">Press Releases</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/videos">Videos</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/photos" class="active">Photos</a>
            </li>
        </ul>
    </div>

    <div class="row mt-5">


        <div class="col-12">


            <ul class="media-news-data-ul">

                <li>

                    <!-- <a href="javascript:void(0);" class="more-btn"> -->

                    <h3 class="orange bold d-inline-block">Greater Bay Area Youth Orchestra (GBAYO) 2023 Season
                        Recruitment
                        Starts

                    </h3>


                    <!-- </a> -->

                    <div>16 Feb 2023
                    </div>
                </li>

            </ul>

            <!-- <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/news-img.jpg" alt=""> -->
        </div>





    </div>

    <div class="row mt-lg-4 mt-md-3 mt-sm-2 mt-2  gx-lg-4 gx-md-3 gx-sm-2 gx-2 ">

        <div class="col-4 position-relative">

            <div class="album-foto-div position-relative">

                <div class="position-absolute w-100 h-100">
                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>

        </div>
        <div class="col-8 position-relative">
            <div class="album-foto-div position-relative">


                <div class="position-absolute w-100 h-100">

                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>


        </div>
    </div>

    <div class="row mt-lg-4 mt-md-3 mt-sm-2 mt-2  gx-lg-4 gx-md-3 gx-sm-2 gx-2 ">
        <div class="col-8 position-relative">
            <div class="album-foto-div position-relative">


                <div class="position-absolute w-100 h-100">

                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>


        </div>
        <div class="col-4 position-relative">

            <div class="album-foto-div position-relative">

                <div class="position-absolute w-100 h-100">
                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>

        </div>

    </div>

    <div class="row mt-lg-4 mt-md-3 mt-sm-2 mt-2  gx-lg-4 gx-md-3 gx-sm-2 gx-2 ">

        <div class="col-4 position-relative">

            <div class="album-foto-div position-relative">

                <div class="position-absolute w-100 h-100">
                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>

        </div>
        <div class="col-8 position-relative">
            <div class="album-foto-div position-relative">


                <div class="position-absolute w-100 h-100">

                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>


        </div>
    </div>
    <div class="row mt-lg-4 mt-md-3 mt-sm-2 mt-2  gx-lg-4 gx-md-3 gx-sm-2 gx-2 ">
        <div class="col-8 position-relative">
            <div class="album-foto-div position-relative">


                <div class="position-absolute w-100 h-100">

                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>


        </div>
        <div class="col-4 position-relative">

            <div class="album-foto-div position-relative">

                <div class="position-absolute w-100 h-100">
                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>

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

        $('.lightbox-layer.photo').fadeIn(200);
    })

})
</script>
<?php

get_footer();