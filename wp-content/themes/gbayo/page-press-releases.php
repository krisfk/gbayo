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

        <?php


$current_language_code= get_language_shortcode();


if($current_language_code=='en')
{
?>
        <ul class="news-ul mb-30">
            <li>
                <a href="<?php echo get_site_url();?>/media" class="">All</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/news" class="">News</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/press-releases" class="active">Press Releases</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/videos">Videos</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/photos">Photos</a>
            </li>
        </ul>
        <?php
}
?>
        <?php

if($current_language_code=='zh')
{
?>
        <ul class="news-ul mb-30">
            <li>



                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/media" class="active">媒體</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/news" class="">最新消息</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/press-releases" class="active">新聞稿</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/videos">影片</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/photos">相片</a>
            </li>
        </ul>
        <?php
}

?>
        <?php

if($current_language_code=='cn')
{
?>

        <ul class="news-ul mb-30">
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/media" class="">媒体</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/news" class="">最新消息</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/press-releases" class="active">新闻稿</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/videos">影片</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/photos">相片</a>
            </li>
        </ul>
        <?php
}

?>

    </div>

    <div class="row ">


        <div class="col-12">

            <ul class="media-news-data-ul">



                <?php
            
            
            $query_args = array(
                'post_type' => 'media-information',
                'orderby' => 'media_date',
                'order' => 'ASC',

                'meta_query' => array(
                    '0' => array(
                        'key' => 'media_type',
                        'value' => 'Press Releases',
                        'compare' => '=',
                    ),
                ),
            );
            
            // The Query
            $the_query = new WP_Query( $query_args );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                <li>

                    <a href="<?php echo get_field('media_press_link');?>" class="more-btn" target="_blank">

                        <h3 class="orange bold d-inline-block">
                            <?php echo get_field('media_title');?>

                            <span class="orange bold d-inline-block">

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
                            </span>



                        </h3>
                    </a>

                    <div>

                        <?php //echo get_field('media_date');
                        
                    
                        if($current_language_code=='en')
                        {
                            echo  date("F j, Y", strtotime(get_field('media_date')));
                        }

                        if($current_language_code=='zh')
                        {
                            echo  date("Y年n月j日", strtotime(get_field('media_date')));
                        }

                        if($current_language_code=='cn')
                        {
                            echo  date("Y年n月j日", strtotime(get_field('media_date')));
                        }

?>

                        <!-- 16 Feb 2023 -->
                    </div>
                </li>

                <?php
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            } 
            
            ?>
                <!-- <li>

                    <a href="javascript:void(0);" class="more-btn">

                        <h3 class="orange bold d-inline-block">Greater Bay Area Youth Orchestra (GBAYO) 2023 Season
                            Recruitment
                            Starts

                        </h3>




                    </a>

                    <div>16 Feb 2023
                    </div>
                </li> -->


            </ul>

            <!-- <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/news-img.jpg" alt=""> -->
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