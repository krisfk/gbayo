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

<div class="container mt-100  content-fsize">


    <h2 class="bold mb-4"><?php echo get_field('year_auditions_title');?></h2>

    <?php

if( have_rows('audition_contents') )
{

    while( have_rows('audition_contents') ) { 
        the_row();
    ?>
    <div class="mb-4 audition-content">
        <?php
     echo get_sub_field('audition_content');  
     ?>
    </div>
    <?php 
    }
    ?>

    <?php
}
?>


    <!-- <div class="mb-4 audition-content">
        <h3 class="bold orange">Training Camp & Concert Tour Period</h3>
        <div>Jul 31 – Aug 16, 2023</div>
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
        Hong Kong Academy for Performing Arts: <a class="mail-link" href="mailto:GBAYO@hkapa.edu"
            target="_blank">GBAYO@hkapa.edu</a><br><br>

        <span class="bold">Guangdong – 10 Feb 2023</span><br>
        Xinghai Conservatory of Music: <a class="mail-link" href="gbayo@xhcom.edu.cn"
            target="_blank">gbayo@xhcom.edu.cn</a><br><br>

        <span class="bold">Macau – 10 Feb 2023</span><br>
        Macao Youth Symphony Orchestra: <a class="mail-link" href="mailto:mysoa@macau.ctm.net"
            target="_blank">mysoa@macau.ctm.net</a>

        <br><br>

        (Application email subject format: <span class="bold">Instrument + Name + Age + School / Company Name)</span>
        <br><br>
        <span class="bold">Second Round</span> – Applicants should send the link of audition video to the designated
        institutes or organisation by
        email before <span class="bold">Mar 31, 2023</span>.The audition video must follow the audition requirements and
        be uploaded to Youtube
        or Youku. The GBAYO finalist and waiting list will be decided by the audition panel.



    </div> -->


    <div class="mb-4 audition-content">
        <h3 class="bold orange"><?php echo get_field('download_title');?>

        </h3>


        <ul class="download-pdf-list">

            <?php

if( have_rows('files_download') )
{

    while( have_rows('files_download') ) { 
        the_row();
        ?>

            <li>
                <a href="<?php echo get_sub_field('file_document');?>" target="_blank"
                    class="<?php echo get_sub_field('file_type');?>"><?php echo get_sub_field('file_name');?></a>
            </li>
            <?php
    }
}

        ?>


            <!-- <li>
                <a href="javascript:void(0);" class="pdf"> Application Form (doc) / Application Form (pdf)</a>
            </li>
            <li>


                <a href="javascript:void(0);" class="pdf">Audition Requirements</a>

            </li>
            <li>

            <li>
                <a href="#" class="music">Orchestra excerpts - sheet music - Strings</a>
            </li>
            <li>
                <a href="#" class="music">Orchestra excerpts - sheet music - Woodwind</a>
            </li>
            <li>
                <a href="#" class="music">Orchestra excerpts - sheet music - Brass</a>
            </li>
            <li>
                <a href="#" class="music">Orchestra excerpts - sheet music - Percussion</a>
            </li> -->
        </ul>
    </div>



</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>

<?php

get_footer();