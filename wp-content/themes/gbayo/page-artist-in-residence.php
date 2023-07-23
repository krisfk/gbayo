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

    <div class="lightbox-press-area"></div>

    <div class="">
        <div class="lightbox-content">

            <a href="javascript:void(0);" class="close-btn"></a>



            <div class="container lightbox-container-inner-wrapper">
                <div class="row">

                    <div class="col-lg-3 col-md-12 col-sm-12 col-12 mb-30">
                        <img class="w-100" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/musician.jpg"
                            alt="">

                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12  content-fsize">


                        <h1 class="bold">Thomas Hung</h1>
                        <h3 class="bold orange">Cello</h3>


                        <div>


                            Thomas Hung began his early cello lessons with his parents. Under the tutelage of Ray Wang
                            and
                            Paul
                            Watkins, he graduated from the Hong Kong Academy of Performing Arts (HKAPA) and Yale School
                            of
                            Music
                            with distinctions. His other mentors included Yo-Yo Ma, Jian Wang, David Finckel, amongst
                            other
                            renowned cellists. <br><br>

                            Thomas is expanding his presence on the global stage as a soloist and chamber musician. In
                            July
                            2022, Thomas was invited to perform a recital for the Opening Concert of the Academy Cello
                            Festival,
                            the first ever since the inception of the Hong Kong Academy for Performing Arts. His other
                            featured
                            performances included the Hong Kong Philharmonic Orchestra Gala Finale concert and the debut
                            recital
                            in HKSAR presentation of “Our Music Talents” series in 2021.
                            <br><br>
                            His other solo performance experiences included concerts with orchestras in Latvia, Hong
                            Kong,
                            Macao
                            and Taiwan. In addition, his recital and chamber music concert appearances had taken him to
                            audience
                            across Asia, America, and Europe. In recognition of his musical achievements, Thomas was
                            awarded
                            the
                            Home Affairs Bureau’s Commendation by the Hong Kong government.
                            Laureate of many competitions in Asia and Europe, such as the Karl Davidov Cello Competition
                            and
                            the
                            National Youth Cello Competition in China. Thomas was also a fellow of the Norfolk Chamber
                            Music
                            Festival and the Aspen Music Festival and
                            School. He participated in the “Orchestra of the Future” under the baton of Gustavo Dudamel
                            with
                            performances for the Nobel Prize Award Ceremony in 2017.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- http://64.227.13.14/gbayo/wp-content/uploads/2023/07/musician.jpg -->
</div>




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

        <div class="col-12">
            <h2 class="orange bold"><?php echo get_field('gbayo_year_faculty_title');?></h2>


        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">

            <?php
    if( have_rows('left_col_content') )
    {
    
        while( have_rows('left_col_content') ) { 
            the_row();
         $faculty_id = get_sub_field('faculty');

         $term = get_term($faculty_id); 
       $faculty_name= $term->name; 
            
            ?>

            <div class="faculty-group">

                <h2 class="bold mt-5 mb-4"><?php echo $faculty_name;?>
                </h2>
                <?php
            $args = array(
                'post_type' => 'gbayo_musician',
                'tax_query' => array(
                    array(
                    'taxonomy' => 'faculty',
                    'field' => 'term_id',
                    'terms' => $faculty_id
                     )
                  )
                );
                $query = new WP_Query( $args ); 

                if ( $query->have_posts() ) {
                    // Start looping over the query results. 
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
                <div class="mb-4">


                    <div class="bold"><?php echo get_field('instrument');?>
                    </div>

                    <a href="javascript:void(0);" class="more-btn musician-more-btn">
                        <h3 class="orange bold d-inline-block"><?php echo get_field('musician_name');?> <div
                                class="five-lines-grid">
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
                        </h3>



                    </a>

                    <div>
                        <?php echo get_field('musician_description');?>
                    </div>

                </div>
                <?php
                    }
                }

                
            ?>

            </div>
            <?php
        }
    
    }
            ?>

        </div>


        <div class="col-lg-6 col-md-12 col-sm-12 col-12">

            <?php
            // wp_reset_postdata();
            wp_reset_query();
if( have_rows('right_col_content') )
{
while( have_rows('right_col_content') ) { 
the_row();
// echo 1;
$faculty_id = get_sub_field('faculty');

$term = get_term($faculty_id); 
$faculty_name= $term->name; 

?>

            <div class="faculty-group">

                <h2 class="bold mt-5 mb-4"><?php echo $faculty_name;?>
                </h2>
                <?php
$args = array(
    'post_type' => 'gbayo_musician',
    'tax_query' => array(
        array(
        'taxonomy' => 'faculty',
        'field' => 'term_id',
        'terms' => $faculty_id
         )
      )
    );
    $query2 = new WP_Query( $args ); 

    if ( $query2->have_posts() ) {
        // Start looping over the query results. 
        while ( $query2->have_posts() ) {
            $query2->the_post();
            ?>
                <div class="mb-4">


                    <div class="bold"><?php echo get_field('instrument');?>
                    </div>

                    <a href="javascript:void(0);" class="more-btn musician-more-btn">
                        <h3 class="orange bold d-inline-block"><?php echo get_field('musician_name');?> <div
                                class="five-lines-grid">
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
                        </h3>



                    </a>

                    <div>
                        <?php echo get_field('musician_description');?>
                    </div>

                </div>
                <?php
        }
    }

    
?>

            </div>
            <?php
}

}
?>

        </div>





    </div>
</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>



<script type="text/javascript">
$(function() {

    $('.musician-more-btn').click(function() {

        $('.lightbox-layer').fadeIn(200);
    })

})
</script>

<?php

get_footer();