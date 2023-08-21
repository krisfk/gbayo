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
    // echo get_field('media_type');
?>
        <ul class="news-ul mb-30">
            <li>
                <a href="<?php echo get_site_url();?>/media" class="">All</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/news"
                    class="<?php echo get_field('media_type')=='News'?'active':'';?>">News</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/press-releases"
                    class="<?php echo get_field('media_type')=='Press Releases'?'active':'';?>">Press Releases</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/videos"
                    class="<?php echo get_field('media_type')=='Videos'?'active':'';?>">Videos</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/photos"
                    class="<?php echo get_field('media_type')=='Photos'?'active':'';?>">Photos</a>
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



                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/media" class="">媒體</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/news"
                    class="<?php echo get_field('media_type')=='News'?'active':'';?>">最新消息</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/press-releases"
                    class="<?php echo get_field('media_type')=='Press Releases'?'active':'';?>">新聞稿</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/videos"
                    class="<?php echo get_field('media_type')=='Videos'?'active':'';?>">影片</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/photos"
                    class="<?php echo get_field('media_type')=='Photos'?'active':'';?>">相片</a>
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
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/news"
                    class="<?php echo get_field('media_type')=='News'?'active':'';?>">最新消息</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/press-releases"
                    class="<?php echo get_field('media_type')=='Press Releases'?'active':'';?>">新闻稿</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/videos"
                    class="<?php echo get_field('media_type')=='Videos'?'active':'';?>">影片</a>
            </li>
            <li>
                <a href="<?php echo get_site_url().'/'.$current_language_code;?>/photos"
                    class="<?php echo get_field('media_type')=='Photos'?'active':'';?>">相片</a>
            </li>
        </ul>
        <?php
}

?>

    </div>



    <!-- 
    <div class="text-center">
        <ul class="news-ul mb-30">
            <li>
                <a href="<?php echo get_site_url();?>/media" class="">All</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/news"
                    class="<?php echo get_field('media_type')=='News'?'active':'';?>">News</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/press-releases"
                    class="<?php echo get_field('media_type')=='press_releases'?'active':'';?>">Press Releases</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/videos"
                    class="<?php echo get_field('media_type')=='videos'?'active':'';?>">Videos</a>
            </li>
            <li>
                <a href="<?php echo get_site_url();?>/photos"
                    class="<?php echo get_field('media_type')=='Photos'?'active':'';?>">Photos</a>
            </li>
        </ul>
    </div> -->

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

                        <?php
                        
                        
                        
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

                    </div>



                </li>

            </ul>


            <?php
            
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
// 
    echo get_field('media_news_content');
}


            
if(get_field('media_type')=='Photos')
{

?>
            <div class="mt-5">
                <?php
    if( have_rows('media_photos') )
    {
            $idx = 0;
            $row_idx=0;

        while( have_rows('media_photos') ) { 
            // echo 1;
        the_row();


        if($idx%2==0)
        {
            ?>
                <div class="row mb-30 gx-3 ">

                    <?php
        }
        ?>
                    <?php
        ?>
                    <div class="<?php 
                
                
                if($row_idx%2==0 && $idx%2==0)
                {
                    echo 'col-4';
                }

                if($row_idx%2==0 && $idx%2==1)
                {
                    echo 'col-8';
                }


                if($row_idx%2==1 && $idx%2==0)
                {
                    echo 'col-8';
                }

                if($row_idx%2==1 && $idx%2==1)
                {
                    echo 'col-4';
                }
                

                // ? 'col-4':'col-8' ;
                
                ?> position-relative">
                        <div class="album-foto-div position-relative">
                            <div class="position-absolute w-100 h-100">
                                <a href="javascript:void(0);" class="album-a"
                                    rel="<?php echo wp_get_attachment_image_src(get_sub_field('media_photo'),'full')[0];?>"
                                    style="background: url(<?php echo wp_get_attachment_image_src(get_sub_field('media_photo'),'full')[0];?>); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                            </div>
                        </div>
                    </div>
                    <?php

                if($idx%2!=0)
                {
                    $row_idx++;
                ?>
                </div>
                <?php    
                }
            $idx++;
        }
    }
    ?>
            </div>
            <?php
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