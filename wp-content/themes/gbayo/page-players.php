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



<div class="full-width-img-div position-relative mt-3">

    <div class="position-absolute top left w-100 z-1">

        <div class="container">
            <h1 class="page-main-heading mt-5"><?php echo get_the_title();?></h1>
        </div>

    </div>
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/conductor-banner-scaled.jpg"
        alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container">

    <div class="row mt-5 content-fsize">



        <div class="col-6">
            <div class="mb-4">

                <div class="bold mb-2">Violins
                </div>


                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">Lau Sin Yiu Danielle</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Lai Sum Yee</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Huang Zelin</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Li Shiming</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Tsui Vincent</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Chu Wan Lam Sophy</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Mak Hoi Kiu</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Shiu Sin Man</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Cheong Tin Ut</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Si Tou Pui Ieng</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Chao Hei Man</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Chan Si Cheng</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">張宗桐</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">陳天樂</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">馬竟博</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">李沐陽</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">曹宇</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">齊楊烯</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">梁凱嵐</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">劉姿君</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">董玉靈</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">陳萱</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">鍾沛然</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">胡融思</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                </ul>






            </div>

        </div>






    </div>
    <div class="col-6">










    </div>



</div>
</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>

<?php

get_footer();