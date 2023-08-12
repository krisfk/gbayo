<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



    <div class="lightbox-layer photo-layer">

        <div class="lightbox-press-area"></div>


        <div class="container yellow-bg-div gx-0 photo-yellow-bg-div position-relative">


            <div class="row">


                <div class="col-12">

                    <a href="javascript:void(0);" class="lightbox-close-btn"></a>

                </div>
                <div class="col-12">

                    <div class="lightbox-enlarge-photo-div position-relative">
                        <a href="javascript:void(0);" class="photo-album-arrow photo-album-arrow-l"></a>
                        <a href="javascript:void(0);" class="photo-album-arrow photo-album-arrow-r"></a>

                        <img class="w-100 lightbox-enlarge-photo" src="" alt="">
                    </div>
                </div>
            </div>
        </div>



    </div>



    <div class="lightbox-layer txt-layer">

        <div class="lightbox-press-area"></div>


        <!-- <div class="wrapper"> -->
        <div class="container yellow-bg-div gx-0 photo-yellow-bg-div position-relative">

            <div class="lightbox-container-inner-wrapper">
                <div class="row">


                    <div class="col-12">

                        <a href="javascript:void(0);" class="lightbox-close-btn"></a>

                    </div>
                    <div class="col-12">

                        <div class="lightbox-enlarge-photo-div position-relative">


                            <h3 class="orange bold mt-lg-4  mt-md-2  mt-sm-2  mt-2">
                            </h3>

                            <div class="content-fsize mt-4  sponsor-para-txt">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->


    </div>



    <!-- <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css"> -->


    <script type="text/javascript">
    $(function() {


        $('.fix-back-to-top').click(function() {});

        $('.hamburger-menu-btn').click(function() {

            $('.menu-layer').fadeIn(200);

        })
        $('.top-menu-ul li a.menu-arrow').click(function() {
            // alert(3);
            $('.top-menu-ul li').removeClass('active');
            $('.mobile-menu-submenu').fadeOut(0);
            $(this).closest('li').toggleClass('active');

            if ($(this).closest('li').hasClass('active')) {

                $(this).closest('li').find('ul').slideDown(200);
            }
        })

        $('.menu-layer .close-btn').click(function() {

            $('.menu-layer').fadeOut(200);
        })

        $('.lightbox-content .close-btn,.lightbox-close-btn').click(function() {

            $('.lightbox-layer').fadeOut(0);

        })

        $('.fix-back-to-top').click(function() {

            $("html, body").animate({
                scrollTop: 0
            }, 200);



        })






        var photo_arr = [];
        var current_index;

        for (i = 0; i < $('.album-a').length; i++) {
            photo_arr.push($('.album-a').eq(i).attr('rel'));
        }
        console.log(photo_arr);

        $('.album-a').click(function() {
            var select_url = $(this).attr('rel');
            console.log(photo_arr);
            console.log(select_url);

            var index = photo_arr.indexOf(select_url);
            current_index = index;

            if ($(this).attr('rel')) {
                // alert(6);
                $('.lightbox-layer.photo-layer').fadeIn(200);
                var photo_url = $(this).attr('rel');
                $('.lightbox-enlarge-photo').attr('src', '');
                $('.lightbox-enlarge-photo').attr('src', photo_arr[current_index]);
                $('.lightbox-enlarge-photo').addClass('lazyloaded');
            }


        })

        $('.m-album-a').click(function() {

            $(this).prev('.album-a').click();

            if (!$(this).prev('.album-a').length) {

                // alert(6);
                var enlarge_foto = $(this).attr('rel');
                // alert(enlarge_foto);
                $('.album-a[rel="' + enlarge_foto + '"]').click();
            }

        })
        $('.photo-album-arrow.photo-album-arrow-r').click(function() {

            current_index++;

            if (current_index >= photo_arr.length) {
                current_index = 0;
            }

            $('.lightbox-enlarge-photo').attr('src', '');
            $('.lightbox-enlarge-photo').attr('src', photo_arr[current_index]);
            $('.lightbox-enlarge-photo').removeClass('lazyloaded');

            $('.lightbox-enlarge-photo').addClass('lazyloaded');


        });

        $('.photo-album-arrow.photo-album-arrow-l').click(function() {


            current_index--;

            if (current_index < 0) {
                current_index = photo_arr.length - 1;
            }

            $('.lightbox-enlarge-photo').attr('src', '');
            $('.lightbox-enlarge-photo').attr('src', photo_arr[current_index]);
            $('.lightbox-enlarge-photo').removeClass('lazyloaded');

            $('.lightbox-enlarge-photo').addClass('lazyloaded');



        });

        $('.lightbox-press-area').click(function() {
            $(".lightbox-layer").fadeOut(0);

        })


        // $("body").click(
        //     function(e) {
        //         if (e.target.className !== "lightbox-content") {
        //             $(".lightbox-layer").fadeOut(0);
        //         }
        //     }
        // );


    })
    </script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>





    <div class="menu-layer">

        <a href="javascript:void(0);" class="close-btn"></a>

        <div class="menu-top-div pt-4 pb-4">
            <!-- mx-lg-5 mx-md-4 mx-sm-4 mx-4 -->


            <div class="mx-lg-5 mx-md-4 mx-sm-4 mx-4 ">
                <a href="<?php echo get_site_url();?>"> <img class="gbayo-logo-white"
                        src="<?php echo wp_get_attachment_image_src(get_field('menu_white_gbayo_logo',$head_post_id),'full')[0];?>"
                        alt=""></a>
            </div>

        </div>


        <div class="lang-div pt-3 pb-3">

            <div class="mx-lg-5 mx-md-4 mx-sm-4 mx-4 ">
                <!--  -->
                <!--  -->


                <?php
                
                // echo 11;
                // echo get_language_shortcode();
                $langs= icl_get_languages('skip_missing=0&orderby=custom&order=asc&link_empty_to=');


                //  echo $langs['en']['url'];
                //  echo $langs['zh']['url'];
                //  echo $langs['cn']['url'];


                // if($current_language_code=='zh-hant')
                // {
                // }
                ?>
                <!-- <li class="me-3"><a class="active" href="<?php echo $langs['zh-hant']['url'];?>">中</a></li> -->
                <!-- <li><a href="<?php echo $langs['en']['url'];?>">EN</a></li> -->

                <!-- ?> -->
                <a href="<?php echo $langs['en']['url'];?>" class="d-inline-block lang-a">EN</a> | <a
                    class="  lang-a d-inline-block" href="<?php echo $langs['zh']['url'];?>">繁</a> | <a
                    href="<?php echo $langs['cn']['url'];?>" class=" lang-a d-inline-block">簡</a>

            </div>


        </div>
        <div>

            <!-- <ul class="menu-ul">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul> -->

            <div class="top-menu-ul-wrapper">
                <ul class=" top-menu-ul">



                    <?php
                                    $main_menu = wp_get_menu_array('main menu');
foreach ($main_menu as $menu_item) {

$url = $menu_item['url'];
$title = $menu_item['title'];
$class = $menu_item['class'];

$temp_arr=explode(get_site_url(),$url);
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);


if(count($menu_item['children']))
{
  
    echo '<li><a class="   level-1 parent '.$class.'" href="'.$url.'">'.$title;
    ?>

                    <a href="javascript:void(0);" class="menu-arrow"></a>
                    <!-- <img class="arrow"
                        src="<?php echo get_template_directory_uri();?>/assets/images/white-arrow-enter.png" alt=""> -->

                    <?php
    echo'</a>';

 
    echo '<ul class="mobile-menu-submenu">';
?>

                    <?php
    
    foreach ($menu_item['children'] as $sub_menu_item) 
    {
        $sub_url = $sub_menu_item['url'];
        $sub_title = $sub_menu_item['title'];
        
        $sub_temp_arr=explode(get_site_url(),$sub_url);
        $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
        $sub_slug=str_replace('/cn/','',$sub_slug);
        $sub_slug=str_replace('/','',$sub_slug);
        echo'<li class=""><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
    }
    echo '</ul>';

}
else
{
echo '<li><a class="   level-1 '.$slug.' '.$class.'" href="'.$url.'">'.$title.'</a>';

}
echo'</li>';


}


?>



                </ul>
            </div>

        </div>

    </div>


    <?php
            
            if(get_language_shortcode()=='zh')
            {
                $head_post_id=717;
            }
            if(get_language_shortcode()=='en')
            {
                $head_post_id=165;

            }
            if(get_language_shortcode()=='cn')
            {
                $head_post_id=717;
   
            }
            ?>

    <div class="fix-social-elements">
        <ul class="">
            <li class="follow-us"><?php echo get_field('follow_us_txt',$head_post_id);?></li>
            <li class="dash"> ー </li>
            <li> <a target="_blank" href="<?php echo get_field('ig_link',207);?>"
                    class="facebook fix-icon-a  fix-icon-a-1"> </a>
            </li>
            <li> <a target="_blank" href="<?php echo get_field('fb_link',207);?>"
                    class="instagram fix-icon-a fix-icon-a-2"> </a>
            </li>
            <li> <a target="_blank" href="<?php echo get_field('youtube_link',207);?>"
                    class="youtube fix-icon-a fix-icon-a-3"> </a></li>
        </ul>
    </div>

    <a class="fix-back-to-top" href="javascript:void(0);">

        <span class="pe-lg-3 pe-md-1 pe-sm-1 pe-1 "><?php echo get_field('back_to_top_txt',$head_post_id);?></span>
        <span class="back-to-top-arrow"></span>
    </a>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php
		/* translators: Hidden accessibility text. */
		esc_html_e( 'Skip to content', 'twentytwentyone' );
		?>
        </a>

        <?php //get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    <!-- <div class="top-div-outer position-relative pt-3 pb-3"> -->
                    <div class="top-div-outer position-relative ">


                        <a href="javascript:void(0);" class="hamburger-menu-btn">


                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                        </a>

                        <div class="container top-div-outer-container">

                            <div class="top-div">


                                <div class="row align-items-center gx-0">
                                    <div class="col-3"> <a href="<?php echo get_site_url();?>" class="logo-a"><img
                                                src="<?php echo wp_get_attachment_image_src(get_field('gbayo_logo',$head_post_id),'full')[0];?>"
                                                alt=""></a>

                                    </div>

                                    <div class="col-9 text-end  present-by-div">


                                        <table class="d-inline-block position-relative present-by-table">
                                            <tr>
                                                <td class="align-top txt">
                                                    <?php echo get_field('subtitle_1',$head_post_id);?></td>
                                                <td>
                                                    <a href="<?php echo get_field('logo_1_link',$head_post_id);?>"
                                                        target="_blank" class="top-presenter-logos-a  ">

                                                        <img class=""
                                                            src="<?php echo wp_get_attachment_image_src(get_field('logo_1',$head_post_id),'full')[0];?>"
                                                            alt="">
                                                    </a>
                                                    <a href="<?php echo get_field('logo_2_link',$head_post_id);?>"
                                                        target="_blank" class="top-presenter-logos-a  ">

                                                        <img src="<?php echo wp_get_attachment_image_src(get_field('logo_2',$head_post_id),'full')[0];?>"
                                                            alt="">
                                                    </a>
                                                    <a href="<?php echo get_field('logo_3_link',$head_post_id);?>"
                                                        target="_blank" class="top-presenter-logos-a  ">

                                                        <img src="<?php echo wp_get_attachment_image_src(get_field('logo_3',$head_post_id),'full')[0];?>"
                                                            alt="">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>


                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>