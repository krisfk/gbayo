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
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/conductor-banner-scaled.jpg"
        alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container">

    <div class="row mt-lg-5 mt-md-4 mt-sm-4 mt-4">

        <div class="col-lg-4 col-md-12 col-sm-12 col-12 "></div>
        <div class="col-lg-8 col-md-12 col-sm-12 col-12  content-fsize">

            <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/conductor-img.jpg" alt="">


            <h2 class="subtitle text-start mt-lg-5 mt-md-4 mt-sm-4 mt-4">Sharon Andrea Choa</h2>

            <h3 class="orange bold">Sharon Andrea Choa</h3>






            Born in Hong Kong and enjoyed an exceptional Anglo-Chinese education, Sharon Andrea Choa excelled in the
            violin at an early age and first began conducting while still at school at the age of 16. She was later
            accepted at the Royal Academy of Music as a violinist to study under the great quartet leader Sidney
            Griller. Choa also holds a First Class B.Mus. and Ph.D degrees from King's College London. During her
            studies at King’s, her talent for conducting was rediscovered and led to coaching from the conductors
            Lawrence Leonard, Diego Masson, Georg Tintner, Janos Fürst, Ji í B lohlávek and Sir Colin Davis.
            <br><br>
            In the U.K., Choa founded Chamber Orchestra Anglia, a professional ensemble that draws together creative,
            cultural and academic strengths in the country. Whilst there, Choa has been awarded many performance and
            academic prizes and has been given individual grants by Arts Council England, the British Academy, the Arts
            and Humanities Research Council and the British Council to further her many musical and entrepreneurial
            activities. She was awarded the Norfolk Arts Award and the A.R.A.M. in 2014, the same year when she returned
            to her birth place, Hong Kong, to take up the position as Dean of Music at The Hong Kong Academy for
            Performing Arts (HKAPA).<br><br>

            In Hong Kong, she guest conducted the Hong Kong Philharmonic Orchestra (HK Phil), and was the Principal
            Guest conductor of the Hong Kong New Music Ensemble – taking the ensemble on tour to the Tongyeong
            International Music Festival and Asia Cultural Center’s Performing Arts Festival in Gwangju, Korea, as well
            as performing in a series of high-profile concerts in Hong Kong. In 2016, she and her colleagues at the
            HKAPA founded an ensemble - Philharmonia APA - made up of the most distinguished graduates from the School
            of Music. Since then, Choa has taken the ensemble on tour to Vienna, and performed in venues in Hong Kong to
            considerable acclaim. In 2020, Choa joint hands with the HK Phil to develop “The Orchestra Academy Hong
            Kong” that allows HKAPA students to receive the highest professional training. In 2022, Sharon and
            colleagues at the HKAPA launched the “Greater Bay Area Youth Orchestra” with the Swire Group as its Founding
            Patron.



        </div>


    </div>
</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-lg-5 mt-md-4 mt-sm-4 mt-4">
    <div class="five-lines-sep"></div>
</div>

<?php

get_footer();