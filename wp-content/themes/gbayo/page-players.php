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

    <div class="row  content-fsize">



        <div class="col-lg-4 col-md-12 col-sm-12 col-12">


            <?php
            echo get_field('left_col_content');
            ?>






        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">

            <?php
            echo get_field('center_col_content');
            ?>
            <!-- <div class="mb-4 name-list-div">


                <div class="bold mb-2">Cellos
                </div>

                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">TBC</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Cheng Ho Hei</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Chan Pui Hei</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Lai Ka Mei</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">胡藝靜</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">肖海田</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">付新珂</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">賀曉曦</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">鍾宇瑩</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">塗益嘉</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                </ul>



            </div>

            <div class="mb-4 name-list-div">
                <div class="bold mb-2">Double Basses

                </div>
                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">Zhang Yiqing</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">TBC</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Leong Un Leng</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">呂悠</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">李想</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">楊帆</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                </ul>
            </div>

            <div class="mb-4 name-list-div">
                <div class="bold mb-2">Flutes

                </div>
                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">Zheng Si Yi</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Ao Ieong Wai Teng</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">陳汝嘉</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">羅語芊</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                </ul>
            </div>

            <div class="mb-4 name-list-div">
                <div class="bold mb-2">Clarinets

                </div>

                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">Chan Hau Wo</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Lam Chon In</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">張家駒</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">楊瑩</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                </ul>

            </div>


            <div class="mb-4 name-list-div">
                <div class="bold mb-2">Oboes

                </div>
                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">Ma Kai Wen</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Hoi Yan Ching</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">梁焱皓</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">趙子嫣</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                </ul>
            </div>
 -->



        </div>

        <div class="col-lg-4 col-md-12 col-sm-12 col-12">

            <?php
        
        echo get_field('right_col_content');
        
        ?>

            <!-- <div class="mb-4 name-list-div">


                <div class="bold mb-2">Bassoons
                </div>
                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">Lee Wang Chi</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Tsui Ka Ying YoYo</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Lo Yan Tung Nicole</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">TBC</h3>
                        <span class="ms-1">MO</span>
                    </li>
                </ul>
            </div>

            <div class="mb-4 name-list-div">


                <div class="bold mb-2">Horns
                </div>
                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">Li Ning Cheung</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Lin Han</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Leong Iat Chon</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">任妤非</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">陽秋實</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">黃芷穎</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                </ul>
            </div>

            <div class="mb-4 name-list-div">


                <div class="bold mb-2">Trumpets
                </div>
                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">To Hau Suet Venus</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Shi Yuankai</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">禹軒</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">劉亮呈</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                </ul>

            </div>

            <div class="mb-4 name-list-div">


                <div class="bold mb-2">Trombones
                </div>
                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">Yiu Dorcas</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Unsam Tam</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">吳俊達</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                </ul>
            </div>


            <div class="mb-4 name-list-div">
                <div class="bold mb-2">Bass Trombones

                </div>

                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">Wong Chun Hang</h3>
                        <span class="ms-1">HK</span>
                    </li>
                </ul>
            </div>


            <div class="mb-4 name-list-div">
                <div class="bold mb-2">Tubas

                </div>

                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">Chan Chak Hong</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">林奕豪</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                </ul>
            </div>

            <div class="mb-4 name-list-div">
                <div class="bold mb-2">Percussions


                </div>
                <ul class="name-ul">
                    <li>
                        <h3 class="orange bold d-inline-block">Fung Lut kwan Rani</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Cheuk Yee Lam</h3>
                        <span class="ms-1">HK</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">Leong Hou</h3>
                        <span class="ms-1">MO</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">蘇冠熹</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">倫僖琳</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                    <li>
                        <h3 class="orange bold d-inline-block">薛瑞</h3>
                        <span class="ms-1">GZ</span>
                    </li>
                </ul>
            </div> -->
        </div>


    </div>
</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>

<?php

get_footer();