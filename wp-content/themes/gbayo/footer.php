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

<footer id="colophon" class="site-footer">

    <div class="container">

        <div class="row">
            <div class="col-9">

                <div class="footer-logos-subtitle">Presented by</div>
                <table class="d-inline-block">
                    <tr>
                        <td> <a href="javascript:void(0);" class="top-presenter-logos-a ms-4">

                                <img class="" src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/logo-1.png"
                                    alt="">
                            </a>
                            <a href="javascript:void(0);" class="top-presenter-logos-a ms-4">

                                <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/logo-2.png" alt="">
                            </a>
                            <a href="javascript:void(0);" class="top-presenter-logos-a ms-4">

                                <img src="http://64.227.13.14/gbayo/wp-content/uploads/2023/07/logo-3.png" alt="">
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-3"></div>
        </div>

    </div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>