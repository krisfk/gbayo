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

<div class="container bottom-main-content mt-100">

    <div class="row mt-100 gx-3">

        <?php
    
    if( have_rows('presenters') )
{

    while( have_rows('presenters') ) { 
        the_row();
        ?>

        <div class="col-lg-4 col-md-12 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-4 mb-4 ">

            <a href="javascript:void(0);" class="w-75 presenter-a">

                <img class="w-75"
                    src="<?php echo wp_get_attachment_image_src(get_sub_field('presenter_logo'),'full')[0];?>" alt="">
            </a>

            <h3 class="orange bold mt-lg-4  mt-md-2  mt-sm-2  mt-2"><?php echo get_sub_field('presenter_name');?></h3>

            <div class="content-fsize mt-4 sponsor-para-txt sponsor-para-txt-0">

                <?php echo get_sub_field('presenter_description');?>


                <!-- The Hong Kong Academy for Performing Arts (HKAPA), established by The Hong Kong Academy for Performing
                Arts Ordinance in 1984, is a leading tertiary institution in the performing arts in Asia. It provides
                professional undergraduate education and practice-based postgraduate studies. The study encompasses
                Chinese Opera, Dance, Drama, Film and Television, Music, and Theatre and Entertainment Arts. Its
                educational philosophy reflects the cultural diversity of Hong Kong with emphasis on Chinese and Western
                traditions, and interdisciplinary learning. <br>
                Since 2008, the Academy has attained the Programme Area Accreditation (PAA) status awarded by the Hong
                Kong Council for Accreditation of Academic and Vocational Qualifications (HKCAAVQ) to self-monitor and
                accredit its own Undergraduate and Post-secondary programmes in the five programme areas of Dance,
                Drama, Film and Television, Music, and Theatre and Entertainment Arts. Since 2016, the PAA status has
                been extended to cover Master’s Degree programmes and below. The programmes operated by the School of
                Chinese Opera are accredited by HKCAAVQ for recognition under the Hong Kong Qualifications
                Framework.<br>
                Besides the main campus in Wanchai, Béthanie, the site of the Academy’s Landmark Heritage Campus in
                Pokfulam, has housed training facilities for the School of Film and Television since 2006.<br>
                In the QS World University Rankings announced in 2022, the Academy is ranked 1st in Asia and 10th in the
                world in the Performing Arts category. -->

            </div>

        </div><?php
    }
}?>

        <!--     
        <div class="col-lg-4 col-md-12 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-4 mb-4 ">

            <a href="javascript:void(0);" class="w-75 presenter-a">

                <img class="w-75" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/logo-1.png" alt="">
            </a>

            <h3 class="orange bold mt-lg-4  mt-md-2  mt-sm-2  mt-2">The Hong Kong Academy for Performing Arts</h3>

            <div class="content-fsize mt-4 sponsor-para-txt sponsor-para-txt-0">

                The Hong Kong Academy for Performing Arts (HKAPA), established by The Hong Kong Academy for Performing
                Arts Ordinance in 1984, is a leading tertiary institution in the performing arts in Asia. It provides
                professional undergraduate education and practice-based postgraduate studies. The study encompasses
                Chinese Opera, Dance, Drama, Film and Television, Music, and Theatre and Entertainment Arts. Its
                educational philosophy reflects the cultural diversity of Hong Kong with emphasis on Chinese and Western
                traditions, and interdisciplinary learning. <br>
                Since 2008, the Academy has attained the Programme Area Accreditation (PAA) status awarded by the Hong
                Kong Council for Accreditation of Academic and Vocational Qualifications (HKCAAVQ) to self-monitor and
                accredit its own Undergraduate and Post-secondary programmes in the five programme areas of Dance,
                Drama, Film and Television, Music, and Theatre and Entertainment Arts. Since 2016, the PAA status has
                been extended to cover Master’s Degree programmes and below. The programmes operated by the School of
                Chinese Opera are accredited by HKCAAVQ for recognition under the Hong Kong Qualifications
                Framework.<br>
                Besides the main campus in Wanchai, Béthanie, the site of the Academy’s Landmark Heritage Campus in
                Pokfulam, has housed training facilities for the School of Film and Television since 2006.<br>
                In the QS World University Rankings announced in 2022, the Academy is ranked 1st in Asia and 10th in the
                world in the Performing Arts category.

            </div>

        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-4 mb-4  ">
            <a href="javascript:void(0);" class="w-75  presenter-a">
                <img class="w-75" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/logo-2.png" alt="">
            </a>
            <h3 class="orange bold mt-lg-4  mt-md-2  mt-sm-2  mt-2">Xinghai Conservatory of Music
            </h3>

            <div class="content-fsize mt-4  sponsor-para-txt  sponsor-para-txt-1">
                Located in Guangzhou, the centre of Lingnan Culture, Xinghai Conservatory of Music is the only higher
                music education institution in South China. Deeply rooted and immersed in Lingnan music and culture, the
                Conservatory has witnessed the formation of excellent education traditions with the spirit of
                inclusiveness and open innovation. <br>
                With music and dance being the main curriculum, the Conservatory also develops other complementary arts
                disciplines. Music and dance are firstclass disciplines in Guangdong Province. Music Theory, Music
                Performance and Recording Art are state-level characteristic disciplines. Music Theory, Music
                Performance, Recording Art, Composition and Composition Studies are provincial-level characteristic
                disciplines. Piano is a reputable discipline in Guangdong Province. Music Performance is a
                provincial-level key discipline. The Conservatory’s range of disciplines includes Composition and
                Composition Studies, Music Theory, Recording Art, Music Performance, and Dance. With a complete spectrum
                of disciplines, the Conservatory has integrated teaching, creation, performance and research, covering
                vocational training, undergraduate and postgraduate levels of education. While predominantly offering
                general education, the Conservatory also offers continuing education.<br>
                In the new historical period, Xinghai Conservatory of Music responds to the national initiative of “Belt
                and Road”, the strategy of Guangdong-Hongkong-Macao Greater Bay Area, the construction of cultural
                Guangdong province, and insists on the connotative development, characteristic development, innovative
                development as well as the international development with “Chinese pattern, world vision, Lingnan
                style”. Xinghai Conservatory of Music strives to be the first in China and a world-famous high-ranking
                music institution with Lingnan style by putting together a team of first-class teaching staff,
                cultivating the top-notch music and dance talents, launching symbolic results and developing first-rate
                disciplines.
            </div>

        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12  ">
            <a href="javascript:void(0);" class="w-75  presenter-a">

                <img class="w-75" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/logo-3.png" alt="">
            </a>

            <h3 class="orange bold mt-lg-4  mt-md-2  mt-sm-2  mt-2">Macao Youth Symphony Orchestra

            </h3>


            <div class="content-fsize mt-4  sponsor-para-txt  sponsor-para-txt-2">
                <div class="bold">
                    People-oriented
                    Nurturing Talents
                    Making friends with Music
                    Promoting Macao</div>
                <br>

                At the early stage when the Macao Youth Symphony Orchestra was established, a group of musicians
                including Michael Ma, Ray Wang, Yiu Songlam and Leung Kin-fung regularly visited Macao to offer music
                training. The Orchestra has collaborated with such renowned musicians as Boris Kuschnir, Stanley Dodds,
                Yu Feng, Lin Daye. Over the 12 tours at home and abroad, the Orchestra visited over 20 cities in Europe,
                the United States, Asia and the Pacific Ocean, and appeared in major European music festivals like the
                Young Euro Classic, the Musikverein Wien, the Kennedy Center and the National Centre for the Performing
                Arts, presenting Macao’s music culture and the artistic talent of youngsters to the international stage.
                Macao Youth Symphony Orchestra has built up signature series such as “Macao New Year’s Concert”, “Macao
                New Generation Musicians Concert”, “Macao YSO Music Festival”, “Performing with Masters”, and “Music
                Seeding Concert.” More than 80 members pursued their professional path, studying at prestigious music
                institutions including The Hong Kong Academy for Performing Arts, Curtis Institute of Music, the
                Juilliard School, the University of Music and Performing Arts Vienna, the Royal Academy of Music, the
                Central Conservatory of Music, and Shanghai Conservatory of Music. This group of first-generation local
                musicians, with Lio Kuokman as the role model, laid an invaluable foundation for Macao’s musical
                culture. Established in 1997, Macao Youth Symphony Orchestra has become Macao’s local cultural brand.
            </div>
        </div> -->
    </div>
</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-100">
    <div class="five-lines-sep"></div>
</div>

<script type="text/javascript">
$(function() {

    $('.presenter-a').click(function() {

        if ($(window).width() <= 991) {
            $('.lightbox-layer.txt-layer').fadeIn(200);

            $('.lightbox-layer.txt-layer h3').html($(this).next('h3').html());

            var idx = $(this).parent('div').index();
            $('.lightbox-layer.txt-layer .sponsor-para-txt').html($('.sponsor-para-txt-' + idx).html());

        }




    })
})
</script>
<?php

get_footer();