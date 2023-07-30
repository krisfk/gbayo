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
<!-- mt-lg-5 mt-md-4 mt-sm-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4 -->
<div class="container  mt-100   content-fsize album-content">


    <div class="row">

        <div class="col-lg-4 col-md-12 col-sm-12 col-12 "></div>
        <div class="col-lg-8 col-md-12 col-sm-12 col-12  content-fsize mb-4">



            <h2 class="bold mb-4"><?php echo get_field('camp_name');?></h2>

            <h3 class="orange bold m-0"><?php echo get_field('camp_date');?></h3>
            <div class="mb-4">
                <?php echo get_field('camp_guests_txt');?>
                <!-- <span class="bold">Guest:</span> Andrew Simon | Principal Clarinet, HK Phil -->
            </div>

            <div>

                <?php echo get_field('camp_intro');?>

                <!-- We are honoured to have Andrew Simon, Principal Clarinet of the Hong Kong Philharmonic Orchestra, to
                share
                his orchestral experience and ensemble playing techniques.
             -->
            </div>




        </div>



    </div>
    <!-- gx-lg-4 gx-md-3 gx-sm-2 gx-2 -->
    <!-- mt-lg-4 mt-md-3 mt-sm-2 mt-2 -->
    <?php



if( have_rows('photo_album') )
{
    $idx = 0;
    $row_idx=0;

while( have_rows('photo_album') ) { 
    // echo 1;
the_row();


if($idx%2==0)
{
    ?>
    <div class="row mb-30  gx-3 ">

        <?php
}
?>
        <?php
?>
        <div class="<?php 
        
        
        if($row_idx%2==0 && $idx%2==0)
        {
            echo 'col-4';
        }

        if($row_idx%2==0 && $idx%2==1)
        {
            echo 'col-8';
        }


        if($row_idx%2==1 && $idx%2==0)
        {
            echo 'col-8';
        }

        if($row_idx%2==1 && $idx%2==1)
        {
            echo 'col-4';
        }
        

        // ? 'col-4':'col-8' ;
        
        ?> position-relative">
            <div class="album-foto-div position-relative">
                <div class="position-absolute w-100 h-100">
                    <a href="javascript:void(0);" class="album-a"
                        rel="<?php echo wp_get_attachment_image_src(get_sub_field('photo'),'full')[0];?>"
                        style="background: url(<?php echo wp_get_attachment_image_src(get_sub_field('photo'),'full')[0];?>); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>
        </div>
        <?php

        if($idx%2!=0)
        {
            $row_idx++;
        ?>
    </div>
    <?php    
        }
    $idx++;
}

?>



</div>


<?php
}

?>

<!-- <div class="row mb-30  gx-3 ">

        <div class="col-4 position-relative">

            <div class="album-foto-div position-relative">

                <div class="position-absolute w-100 h-100">
                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>

        </div>
        <div class="col-8 position-relative">
            <div class="album-foto-div position-relative">


                <div class="position-absolute w-100 h-100">

                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>


        </div>
    </div>

    <div class="row mb-30  gx-3 ">
        <div class="col-8 position-relative">
            <div class="album-foto-div position-relative">


                <div class="position-absolute w-100 h-100">

                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>


        </div>
        <div class="col-4 position-relative">

            <div class="album-foto-div position-relative">

                <div class="position-absolute w-100 h-100">
                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>

        </div>

    </div>

    <div class="row mb-30  gx-3 ">

        <div class="col-4 position-relative">

            <div class="album-foto-div position-relative">

                <div class="position-absolute w-100 h-100">
                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>

        </div>
        <div class="col-8 position-relative">
            <div class="album-foto-div position-relative">


                <div class="position-absolute w-100 h-100">

                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>


        </div>
    </div>
    <div class="row mb-30  gx-3 ">
        <div class="col-8 position-relative">
            <div class="album-foto-div position-relative">


                <div class="position-absolute w-100 h-100">

                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-3.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>


        </div>
        <div class="col-4 position-relative">

            <div class="album-foto-div position-relative">

                <div class="position-absolute w-100 h-100">
                    <a href="javascript:void(0);" class="album-a"
                        rel="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg"
                        style="background: url(http://64.227.13.14/gbayo/wp-content/uploads/2023/07/album-1.jpg); position: absolute; width: 100%; height: 100%; background-size: cover;"></a>
                </div>
            </div>

        </div>

    </div> -->










</div>




<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-lines-sep.png" alt=""> -->


<div class="mt-5">
    <div class="five-lines-sep"></div>
</div>


<script type="text/javascript">
$(function() {

    $('.musician-more-btn').click(function() {

        $('.lightbox-layer.photo').fadeIn(200);
    })

})
</script>
<?php

get_footer();