<?php
/**
 * Footer template.
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @author Themeisle
 * @version 1.1.2
 * @package capri-pro
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <?php
    $show_footer = is_active_sidebar( 'capri-footer-widget-area' ) || is_active_sidebar( 'capri-footer-widget-area-2' ) || is_active_sidebar( 'capri-footer-widget-area-3' );
    if ( $show_footer ) {
        ?>
        <div class="container container-footer">

            <div class="footer-inner">
                <div class="row">
                    <div class="col-md-4 footer-inner-item">
                        <?php
                        if ( is_active_sidebar( 'capri-footer-widget-area' ) ) {
                            dynamic_sidebar( 'capri-footer-widget-area' );
                        }
                        ?>
                    </div>

                    <div class="col-md-4 footer-inner-item">
                        <?php
                        if ( is_active_sidebar( 'capri-footer-widget-area-2' ) ) {
                            dynamic_sidebar( 'capri-footer-widget-area-2' );
                        }
                        ?>
                    </div>

                    <div class="col-md-4 footer-inner-item">
                        <?php
                        if ( is_active_sidebar( 'capri-footer-widget-area-3' ) ) {
                            dynamic_sidebar( 'capri-footer-widget-area-3' );
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="site-info">
        <div class="container">
            <div class="footer-copyright">
               <span title="gromila.developer@gmail.com"><?php _e('Разработчик сайта - Смахтин Сергей Александрович'); ?></span>
            </div>
        </div>
    </div><!-- .site-info -->

</footer><!-- #colophon -->
</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
