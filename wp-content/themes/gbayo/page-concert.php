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


<div class="lightbox-layer">

    <div class="lightbox-content"></div>
    <!-- http://64.227.13.14/gbayo/wp-content/uploads/2023/07/musician.jpg -->
</div>

<div class="full-width-img-div position-relative mt-3">

    <div class="position-absolute top left w-100 z-1">

        <div class="container">
            <h1 class="page-main-heading mt-5"><?php echo get_the_title();?></h1>
        </div>

    </div>
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concerts-banner.png" alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container mt-5 content-fsize">


    <div class="row">

        <div class="col-4 mb-5 text-center">

            <img class="w-100 concert-img"
                src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concert-temp-img-2-1.jpg" alt="">





            <div class="mt-4">
                <a href="javascript:void(0);" class="more-btn ticket-here">


                    <div class="d-inline-block">Ticket here</div>


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





        <div class="col-8 mb-5">



            <h2 class="bold mb-4">GBAYO Debut Concert 2023 (Hong Kong)
            </h2>

            <div class="mb-4">


                <h3 class="bold orange">Programme

                </h3>




                <table>

                    <tr>
                        <td class="bold pe-3 align-top">Beethoven</td>
                        <td>Triple Concerto</td>
                    </tr>
                    <tr>
                        <td class="bold pe-3 align-top">Dvorak</td>
                        <td>Symphony No.9 in E minor “From the New World”</td>
                    </tr>
                    <tr>
                        <td class="bold pe-3 align-top">Tan Dun</td>
                        <td>Internet Symphony "Eroica"</td>
                    </tr>

                </table>


            </div>




            <div class="mb-4">
                <div class="bold ">Conductor
                </div>

                <h3 class="bold orange">Sharon Choa
                </h3>
            </div>

            <div class="mb-4">
                <div class="bold ">Violin
                </div>


                <a href="javascript:void(0);" class="more-btn">

                    <h3 class="bold orange d-inline-block">Li Jinzhu

                    </h3><span class="ms-2 content-fsize text-dark">Guangzhou</span>


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




            <div class="mb-4">
                <div class="bold ">Piano</div>

                <a href="javascript:void(0);" class="more-btn">
                    <h3 class="bold orange d-inline-block">Cheong Hoi Leong</h3>
                    <span class="ms-2 content-fsize text-dark">Macau</span>

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




            <div class="mb-4">
                <div class="bold ">Cello</div>

                <a href="javascript:void(0);" class="more-btn">
                    <h3 class="bold orange d-inline-block">Thomas Hung</h3>
                    <span class="ms-2 content-fsize text-dark">Hong Kong</span>

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

            <table class="mb-4">
                <tr>
                    <td class="bold pe-3 align-top">Date:</td>
                    <td>11 Aug 2023</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">Time:</td>
                    <td>8pm</td>
                </tr>
                <tr>
                    <td class="bold pe-3 align-top">Venue:</td>
                    <td>The Hong Kong Jockey Club Amphitheatre, HKAPA</td>
                </tr>
            </table>


            <h3 class="orange bold">Free <br>
                Admission
            </h3>


            <div class="concert-right-txt">Greater Bay Area Youth Orchestra reserves the right to change the programme
                and
                artists
            </div>






        </div>





    </div>







</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>

<?php

get_footer();