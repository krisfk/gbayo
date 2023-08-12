<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>


<?php
            
            if(get_language_shortcode()=='zh')
            {
                $footer_post_id=724;
            }
            if(get_language_shortcode()=='en')
            {
                $footer_post_id=207;

            }
            if(get_language_shortcode()=='cn')
            {
                $footer_post_id=207;
   
            }
            ?>

<footer id="colophon" class="site-footer mt-5 mb-5">


    <div class="desktop-footer">
        <div class="container">



            <div class="row mt-4">
                <!-- col-lg-6 col-md-12 col-sm-12 col-12 -->
                <div
                    class="col-lg-6 col-md-12 col-sm-12 col-12  mb-lg-0 mb-md-0 mb-sm-0 mb-lg-0 mb-md-0 mb-sm-0 mb-0  ">
                    <div class="d-inline-block mb-4">
                        <div class="footer-logos-subtitle" style="position:relative;top:7px">
                            <?php echo get_field('group_2_subtitle',$footer_post_id);?></div>
                        <table class="d-inline-block">
                            <tr>
                                <td> <a target="_blank"
                                        href="<?php echo get_field('group_2_logo_1_link',$footer_post_id);?>"
                                        style="top:28px" class="other-logos-a me-lg-4 me-md-2 me-sm-2 me-2">

                                        <img class=""
                                            src="<?php echo wp_get_attachment_image_src(get_field('group_2_logo_1',$footer_post_id),'full')[0];?>"
                                            alt="">
                                    </a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="d-inline-block">
                        <div class="footer-logos-subtitle" style="position:relative;top:7px"><?php
                        echo get_field('group_3_subtitle',$footer_post_id);
                        ?>
                        </div>
                        <table class="d-inline-block">
                            <tr>
                                <td> <a target="_blank"
                                        href="<?php echo get_field('group_3_logo_1_link',$footer_post_id);?>"
                                        style="top:25px" class="other-logos-a me-lg-4 me-md-2 me-sm-2 me-2">

                                        <img class=""
                                            src="<?php echo wp_get_attachment_image_src(get_field('group_3_logo_1',$footer_post_id),'full')[0];?>"
                                            alt="">
                                    </a></td>

                                <td> <a target="_blank"
                                        href="<?php echo get_field('group_3_logo_2_link',$footer_post_id);?>"
                                        style="top:25px" class="other-logos-a me-lg-4 me-md-2 me-sm-2 me-2">

                                        <img class=""
                                            src="<?php echo wp_get_attachment_image_src(get_field('group_3_logo_2',$footer_post_id),'full')[0];?>"
                                            alt="">
                                    </a></td>
                            </tr>
                        </table>
                    </div>


                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-lg-end text-md-start text-sm-start text-start "
                    style="">

                    <table
                        class="mb-0 d-lg-inline-block d-md-inline-block d-sm-table d-table w-lg-auto w-md-auto w-sm-100 sponsor-footer-table ">
                        <tr>


                            <td class="ps-lg-4 ps-md-0 ps-sm-0 ps-0">
                                <div class="footer-logos-subtitle text-start">
                                    <?php echo get_field('group_4_subtitle',$footer_post_id);?>
                                </div>
                                <table class="d-inline-block">
                                    <tr>
                                        <td>


                                            <?php 
                                        if(get_field('group_4_logo_1_link',$footer_post_id))
                                        {
                                            ?>
                                            <a target="_blank"
                                                href="<?php echo get_field('group_4_logo_1_link',$footer_post_id);?>"
                                                class="other-logos-a" style="top:11px">

                                                <img class=""
                                                    src="<?php echo wp_get_attachment_image_src(get_field('group_4_logo_1',$footer_post_id),'full')[0];?>"
                                                    alt="">
                                            </a>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <div class="other-logos-a" style="top:11px">

                                                <img class=""
                                                    src="<?php echo wp_get_attachment_image_src(get_field('group_4_logo_1',$footer_post_id),'full')[0];?>"
                                                    alt="">
                                            </div>

                                            <?php
                                        }
                                        
                                        ?>


                                        </td>
                                    </tr>
                                </table>
                            </td>

                            <td class="ps-lg-4 ps-md-0 ps-sm-0 ps-0">
                                <div class="footer-logos-subtitle text-start">
                                    <?php echo get_field('group_5_subtitle',$footer_post_id);?>

                                </div>
                                <table class="d-inline-block">
                                    <tr>
                                        <td>


                                            <?php
                                        
                                        if(get_field('group_5_logo_1_link',$footer_post_id))
                                        {
                                            ?>
                                            <a target="_blank"
                                                href="<?php echo get_field('group_5_logo_1_link',$footer_post_id);?>"
                                                class="other-logos-a" style="top:5px">

                                                <img class=""
                                                    src="
                                                    <?php echo wp_get_attachment_image_src(get_field('group_5_logo_1',$footer_post_id),'full')[0];?>"
                                                    alt="">
                                            </a>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <div class="other-logos-a" style="top:5px">

                                                <img class=""
                                                    src="
                                                    <?php echo wp_get_attachment_image_src(get_field('group_5_logo_1',$footer_post_id),'full')[0];?>"
                                                    alt="">
                                                </d>
                                                <?php
                                        }
                                        ?>

                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td class="ps-lg-4 ps-md-0 ps-sm-0 ps-0">
                                <div class="footer-logos-subtitle text-start">
                                    <?php echo get_field('group_6_subtitle',$footer_post_id);?>

                                </div>
                                <table class="d-inline-block">
                                    <tr>
                                        <td>

                                            <?php
                                        
                                        if(get_field('group_6_logo_1_link',$footer_post_id))
                                        {
?>
                                            <a target="_blank"
                                                href="<?php echo get_field('group_6_logo_1_link',$footer_post_id);?>"
                                                class="other-logos-a" style="top:9px">

                                                <img class=""
                                                    src="<?php echo wp_get_attachment_image_src(get_field('group_6_logo_1',$footer_post_id),'full')[0];?>"
                                                    alt="">
                                            </a>
                                            <?php
                                        }
                                        else{
?>
                                            <div class="other-logos-a" style="top:9px">

                                                <img class=""
                                                    src="<?php echo wp_get_attachment_image_src(get_field('group_6_logo_1',$footer_post_id),'full')[0];?>"
                                                    alt="">
                                            </div>
                                            <?php
                                        }

                                        ?>

                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td class="ps-lg-4 ps-md-0 ps-sm-0 ps-0">
                                <div class="footer-logos-subtitle text-start">
                                    <?php echo get_field('group_7_subtitle',$footer_post_id);?>

                                </div>
                                <table class="d-inline-block">
                                    <tr>
                                        <td>
                                            <?php
                                            
                                            if(get_field('group_7_logo_1_link',$footer_post_id))
                                            {
                                                ?>

                                            <a target="_blank"
                                                href="<?php echo get_field('group_7_logo_1_link',$footer_post_id);?>"
                                                class="other-logos-a">

                                                <img class=""
                                                    src="<?php echo wp_get_attachment_image_src(get_field('group_7_logo_1',$footer_post_id),'full')[0];?>"
                                                    alt="">
                                            </a>
                                            <?php
                                            }
                                            else{
                                                ?>
                                            <div class="other-logos-a">

                                                <img class=""
                                                    src="<?php echo wp_get_attachment_image_src(get_field('group_7_logo_1',$footer_post_id),'full')[0];?>"
                                                    alt="">
                                            </div>

                                            <?php
                                            }
                                            ?>


                                        </td>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                    </table>


                </div>


                <div class="col-12 mobile-reserve-txt-div mt-lg-0 mt-md-0 mt-sm-0 mt-0 ">

                    <div class="col-lg-3 col-md-12 col-sm-12 col-12 ">

                        <div class="reserve-txt"><?php echo get_field('all_right_reserve_txt',$footer_post_id);?></div>

                        <div class=" mt-2">
                            <table class="d-inline-block">
                                <tr>
                                    <td><a target="_blank" href="<?php echo get_field('ig_link',$footer_post_id);?>"
                                            class="footer-sns-icon footer-sns-icon-1 me-2"></a>
                                    </td>
                                    <td><a target="_blank" href="<?php echo get_field('fb_link',$footer_post_id);?>"
                                            class="footer-sns-icon footer-sns-icon-2 me-2"></a>
                                    </td>
                                    <td><a target="_blank"
                                            href="<?php echo get_field('youtube_link',$footer_post_id);?>"
                                            class="footer-sns-icon footer-sns-icon-3 me-2"></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 ">


                    <div class="reserve-txt text-start"><?php echo get_field('all_right_reserve_txt',$footer_post_id);?>
                    </div>


                    <!-- <div class="footer-logos-subtitle"><?php echo get_field('group_1_subtitle',$footer_post_id);?></div>
                    <table class="d-inline-block">
                        <tr>
                            <td> <a target="_blank" href="<?php echo get_field('group_1_logo_1_link',$footer_post_id);?>"
                                    class="top-presenter-logos-a me-lg-4 me-md-2 me-sm-2 me-2 ">

                                    <img class=""
                                        src="<?php echo wp_get_attachment_image_src(get_field('group_1_logo_1',$footer_post_id),'full')[0];?>"
                                        alt="">
                                </a>
                            <td> <a target="_blank" href="<?php echo get_field('group_1_logo_2_link',$footer_post_id);?>"
                                    class="top-presenter-logos-a me-lg-4 me-md-2 me-sm-2 me-2">

                                    <img src="<?php echo wp_get_attachment_image_src(get_field('group_1_logo_2',$footer_post_id),'full')[0];?>"
                                        alt="">
                                </a>
                            <td> <a target="_blank" href="<?php echo get_field('group_1_logo_3_link',$footer_post_id);?>"
                                    class="top-presenter-logos-a me-lg-4 me-md-2 me-sm-2 me-2">

                                    <img src="<?php echo wp_get_attachment_image_src(get_field('group_1_logo_3',$footer_post_id),'full')[0];?>"
                                        alt="">
                                </a>
                            </td>
                        </tr>
                    </table> -->
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 reserve-txt-div">


                    <div class="text-end mt-2">
                        <table class="d-inline-block">
                            <tr>
                                <td><a target="_blank" href="<?php echo get_field('ig_link',$footer_post_id);?>"
                                        class="footer-sns-icon footer-sns-icon-1 ms-2"></a>
                                </td>
                                <td><a target="_blank" href="<?php echo get_field('fb_link',$footer_post_id);?>"
                                        class="footer-sns-icon footer-sns-icon-2 ms-2"></a>
                                </td>
                                <td><a target="_blank" href="<?php echo get_field('youtube_link',$footer_post_id);?>"
                                        class="footer-sns-icon footer-sns-icon-3 ms-2"></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="mobile-footer">

        <div class="container">
            <!-- <div class="row mb-3">
                <div class="col-12  ">

                    <div class="footer-logos-subtitle">
                        <?php echo get_field('group_1_subtitle',$footer_post_id);?>
                    </div>
                    <table class="d-inline-block">
                        <tr>
                            <td> <a target="_blank" href="<?php echo get_field('group_1_logo_1_link',$footer_post_id);?>"
                                    class="top-presenter-logos-a me-lg-4 me-md-2 me-sm-2 me-2 ">

                                    <img class=""
                                        src="<?php echo wp_get_attachment_image_src(get_field('group_1_logo_1',$footer_post_id),'full')[0];?>"
                                        alt="">
                                </a>
                            <td> <a target="_blank" href="<?php echo get_field('group_1_logo_2_link',$footer_post_id);?>"
                                    class="top-presenter-logos-a me-lg-4 me-md-2 me-sm-2 me-2">

                                    <img src="<?php echo wp_get_attachment_image_src(get_field('group_1_logo_2',$footer_post_id),'full')[0];?>"
                                        alt="">
                                </a>
                            <td> <a target="_blank" href="<?php echo get_field('group_1_logo_3_link',$footer_post_id);?>"
                                    class="top-presenter-logos-a me-lg-4 me-md-2 me-sm-2 me-2">

                                    <img src="<?php echo wp_get_attachment_image_src(get_field('group_1_logo_3',$footer_post_id),'full')[0];?>"
                                        alt="">
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>

            </div> -->


            <div class="row mb-4">

                <div class="col-12  ">
                    <div class="d-inline-block">
                        <div class="footer-logos-subtitle" style="position:relative;top:7px">
                            <?php echo get_field('group_2_subtitle',$footer_post_id);?></div>
                        <table class="d-inline-block">
                            <tr>
                                <td> <a target="_blank"
                                        href="<?php echo get_field('group_2_logo_1_link',$footer_post_id);?>"
                                        style="top:13px" class="other-logos-a me-lg-4 me-md-2 me-sm-2 me-2">

                                        <img class=""
                                            src="<?php echo wp_get_attachment_image_src(get_field('group_2_logo_1',$footer_post_id),'full')[0];?>"
                                            alt="">
                                    </a></td>
                            </tr>
                        </table>


                    </div>

                    <div class="d-inline-block">
                        <div class="footer-logos-subtitle" style="position:relative;top:7px">
                            <?php echo get_field('group_3_subtitle',$footer_post_id);?>
                        </div>
                        <table class="d-inline-block">
                            <tr>
                                <td> <a target="_blank"
                                        href="<?php echo get_field('group_3_logo_1_link',$footer_post_id);?>"
                                        style="top:15px" class="other-logos-a me-lg-4 me-md-2 me-sm-2 me-2">

                                        <img class=""
                                            src="<?php echo wp_get_attachment_image_src(get_field('group_3_logo_1',$footer_post_id),'full')[0];?>"
                                            alt="">
                                    </a></td>

                                <td> <a target="_blank"
                                        href="<?php echo get_field('group_3_logo_2_link',$footer_post_id);?>"
                                        style="top:15px" class="other-logos-a me-lg-4 me-md-2 me-sm-2 me-2">

                                        <img class=""
                                            src="<?php echo wp_get_attachment_image_src(get_field('group_3_logo_2',$footer_post_id),'full')[0];?>"
                                            alt="">
                                    </a></td>
                            </tr>
                        </table>
                    </div>

                </div>



            </div>

            <div class="row mb-1">

                <div class="col-12 ">

                    <table
                        class="mb-4 d-lg-inline-block d-md-inline-block d-sm-table d-table w-lg-auto w-md-auto w-sm-100 sponsor-footer-table ">
                        <tr>


                            <td class="ps-lg-4 ps-md-0 ps-sm-0 ps-0">
                                <div class="footer-logos-subtitle text-start">
                                    <?php
                                echo get_field('group_4_subtitle',$footer_post_id);?>
                                </div>
                                <table class="d-inline-block">
                                    <tr>
                                        <td> <a target="_blank" href="<?php echo get_field('group_4_logo_1_link');?>"
                                                class="other-logos-a" style="top:11px">

                                                <img class=""
                                                    src="<?php echo wp_get_attachment_image_src(get_field('group_4_logo_1',$footer_post_id),'full')[0];?>"
                                                    alt="">
                                            </a></td>
                                    </tr>
                                </table>
                            </td>

                            <td class="ps-lg-4 ps-md-0 ps-sm-0 ps-0">
                                <div class="footer-logos-subtitle text-start"><?php
                                echo get_field('group_5_subtitle',$footer_post_id);?>
                                </div>
                                <table class="d-inline-block">
                                    <tr>
                                        <td> <a target="_blank"
                                                href="<?php echo get_field('group_5_logo_1_link',$footer_post_id);?>"
                                                class="other-logos-a" style="top:5px">

                                                <img class=""
                                                    src="<?php echo wp_get_attachment_image_src(get_field('group_5_logo_1',$footer_post_id),'full')[0];?>"
                                                    alt="">
                                            </a></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="ps-lg-4 ps-md-0 ps-sm-0 ps-0">
                                <div class="footer-logos-subtitle text-start"><?php
                                echo get_field('group_6_subtitle',$footer_post_id);?>
                                </div>
                                <table class="d-inline-block">
                                    <tr>
                                        <td> <a target="_blank"
                                                href="<?php echo get_field('group_6_logo_1_link',$footer_post_id);?>"
                                                class="other-logos-a" style="top:9px">

                                                <img class=""
                                                    src="<?php echo wp_get_attachment_image_src(get_field('group_6_logo_1',$footer_post_id),'full')[0];?>"
                                                    alt="">
                                            </a></td>
                                    </tr>
                                </table>
                            </td>
                            <td class="ps-lg-4 ps-md-0 ps-sm-0 ps-0">
                                <div class="footer-logos-subtitle text-start">
                                    <?php echo get_field('group_7_subtitle',$footer_post_id);?>
                                </div>
                                <table class="d-inline-block">
                                    <tr>
                                        <td> <a target="_blank"
                                                href="<?php echo get_field('group_7_logo_1_link',$footer_post_id);?>"
                                                class="other-logos-a">

                                                <img class=""
                                                    src="<?php echo wp_get_attachment_image_src(get_field('group_7_logo_1',$footer_post_id),'full')[0];?>"
                                                    alt="">
                                            </a></td>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                    </table>

                </div>
            </div>

            <div class="row gx-1">

                <table>
                    <tr>
                        <td>
                            <div class="reserve-txt "><?php echo get_field('all_right_reserve_txt',$footer_post_id);?>
                            </div>
                        </td>
                        <td>
                            <table class="d-inline-block">
                                <tr>
                                    <td><a target="_blank" href="<?php echo get_field('ig_link',$footer_post_id);?>"
                                            class="footer-sns-icon footer-sns-icon-1 ms-0"></a>
                                    </td>
                                    <td><a target="_blank" href="<?php echo get_field('fb_link',$footer_post_id);?>"
                                            class="footer-sns-icon footer-sns-icon-2 ms-0"></a>
                                    </td>
                                    <td><a target="_blank"
                                            href="<?php echo get_field('youtube_link',$footer_post_id);?>"
                                            class="footer-sns-icon footer-sns-icon-3 ms-0"></a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>




            </div>


        </div>
    </div>

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>