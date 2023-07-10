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
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concerts-banner.png" alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container mt-5 content-fsize">


    <div class="row">

        <div class="col-4 mb-5">

            <img class="w-100 concert-img"
                src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/concert-temp-img-2-1.jpg" alt="">



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
                <div class="bold mb-1">Conductor
                </div>

                <h3 class="bold orange">Sharon Choa
                </h3>
            </div>

            <div class="mb-4">
                <div class="bold mb-1">Violin
                </div>

                <h3 class="bold orange d-inline-block">Li Jinzhu

                </h3><span>Guangzhou</span>
            </div>






            Programme
            Beethoven: Triple Concerto
            Dvorak: Symphony No.9 in E minor “From the New World”
            Tan Dun: Internet Symphony "Eroica“

            Conductor
            Sharon Choa

            Violin
            Li Jinzhu Guangzhou

            Piano
            Cheong Hoi Leong Macau

            Cello
            Thomas Hung Hong Kong

            Date: 11 Aug 2023
            Time: 8pm
            Venue: The Hong Kong Jockey Club Amphitheatre, HKAPA

            Free
            Admission

            Greater Bay Area Youth Orchestra reserves the right to change the programme and artists





        </div>





    </div>







</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>

<?php

get_footer();