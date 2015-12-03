<?php
/**
 * Footer Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>
</div><!-- .main-wrapper -->

    <footer id="colophon">
        <div class="inner-wrap">

            <div class="footer-top clearfix">
                <div class="footer-company-info">
                    <img class="footer-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpg">
                    <div class="company-contact">
                        <p>1108 W 34th St</p>
                        <p>Wichita, KS 67204</p>
                        <p class="footer-phone">316-641-7453</p>
                    </div>
                </div>
                <div class="footer-right">
                    <div class="footer-nav">
                        <?php
                            if ( has_nav_menu( 'footer' ) ) {
                                wp_nav_menu( array( 'theme_location' => 'footer', 'depth' => -1 ) );
                            }
                        ?>
                    </div>
                    <div class="footer-social clearfix">
                        <a class="social-link" href="www.google.com/+">
                            <?php echo do_shortcode("[wp-svg-icons icon='google-plus-4' wrap='i']"); ?>
                        </a>
                        <a class="social-link" href="www.facebook.com">
                            <?php echo do_shortcode("[wp-svg-icons icon='facebook-3' wrap='i']"); ?>
                        </a>
                        <a class="social-link" href="www.yelp.com">
                            <?php echo do_shortcode("[wp-svg-icons icon='yelp' wrap='i']"); ?>
                        </a>
                        <a class="social-link" href="linkedin.com">
                            <?php echo do_shortcode("[wp-svg-icons icon='linkedin' wrap='i']"); ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom clearfix">
                <div class="copyright-info">
                    <p><?php echo comicpress_copyright();?> McClellan Enterprises, Inc.</p>
                    <p>Site Designed By: Straight Line Web Solutions</p>
                </div>
            </div>
        </div>
    </footer>
    <a href="#masthead" id="scroll-up"><i class="fa fa-angle-up"></i></a>
</div><!-- #page -->
<?php wp_footer(); ?>
<script>

</script>
</body>
</html>