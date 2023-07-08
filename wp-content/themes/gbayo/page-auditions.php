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
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/audition-banner-scaled.jpg"
        alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container mt-5 content-fsize">


    <h2 class="bold mb-4">2023 Auditions</h2>


    <div class="mb-4 audition-content">
        <h3 class="bold orange">Training Camp & Concert Tour Period</h3>
        <div>Jul 31 - Aug 16, 2023</div>
    </div>

    <div class="mb-4 audition-content">
        <h3 class="bold orange">Training Camp Location</h3>
        <div>Hong Kong</div>
    </div>

    <div class="mb-4 audition-content">
        <h3 class="bold orange">Concert Tour</h3>
        <div>Hong Kong, Guangzhou, Shenzhen, &amp; Macau (*Concert locations are subject to change)</div>
    </div>

    <div class="mb-4 audition-content">
        <h3 class="bold orange">Fee</h3>
        <div>Free of Charge (Tuition and accommodation included)</div>
    </div>

    <div class="mb-4 audition-content">
        <h3 class="bold orange">Eligibility</h3>
        <div>16 – 24 year old musicians who were either born/graduated/are living/studying/working in the Guandong, Hong
            Kong, Macao, Greater Bay Area</div>
    </div>


    <div class="mb-4 audition-content">
        <h3 class="bold orange">Selection Process
        </h3>

        <span class="bold">First Round</span> – Interested and eligible musicians should send the application form by
        email to below
        designated
        institutes or organisation in your region by below deadlines:<br><br>

        <span class="bold"> Hong Kong – 17 Mar 2023</span> <br>
        Hong Kong Academy for Performing Arts: GBAYO@hkapa.edu<br><br>

        <span class="bold">Guangdong – 10 Feb 2023</span><br>
        Xinghai Conservatory of Music: gbayo@xhcom.edu.cn<br><br>

        <span class="bold">Macau – 10 Feb 2023</span><br>
        Macao Youth Symphony Orchestra: mysoa@macau.ctm.net


    </div>


    <div class="mb-4 audition-content">
        <h3 class="bold orange">Download

        </h3>
        <ul class="download-pdf-list">
            <li>
                <a href="javascript:void(0);"> Application Form (doc) / Application Form (pdf)
                </a>
            </li>
        </ul>
    </div>



</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>

<?php

get_footer();