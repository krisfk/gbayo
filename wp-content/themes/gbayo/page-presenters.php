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
            <h1 class="page-main-heading mt-5">Presenters</h1>
        </div>

    </div>
    <img class="top-banner w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/about-banner-1-scaled.jpg"
        alt="">
</div>


<div class="five-lines-sep"></div>

<div class="container">

    <div class="row mt-5">
        <div class="col-4 ">

            <a href="javascript:void(0);" class="top-presenter-logos-a orange bold">

                <img class="" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/logo-1.png" alt="">
            </a>

            <h3 class="orange bold mt-4">The Hong Kong Academy for Performing Arts</h3>

            <div class="content-fsize mt-4">

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
        <div class="col-4"> <a href="javascript:void(0);" class="top-presenter-logos-a orange bold">

                <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/logo-2.png" alt="">
            </a>
            <h3 class="orange bold mt-4">Xinghai Conservatory of Music
            </h3>

            <div class="content-fsize mt-4">
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
        <div class="col-4"> <a href="javascript:void(0);" class="top-presenter-logos-a orange bold">

                <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/logo-3.png" alt="">
            </a></div>
    </div>
</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->



<?php

get_footer();