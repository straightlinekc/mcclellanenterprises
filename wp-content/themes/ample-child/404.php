<?php
/**
 * The template for displaying 404 pages (Page Not Found).
 *
 * @package ThemeGrill
 * @subpackage Ample-Child
 */
?>

<?php get_header();

    do_action( 'ample_before_body_content' ); ?>
    <?php
        if( is_active_sidebar( 'ample_business_sidebar' ) ) {
            // Calling the business sidebar if it exists.
            if ( !dynamic_sidebar( 'ample_business_sidebar' ) ):
            endif;
        }
    ?>

    <div class="single-page clearfix">
        <div class="inner-wrap">
            <div class="section-wrapper">
                <div class="error-msg">
                    <h1>Uh Oh..</h1>
                    <p>Sorry, but the page you requested can't be found.  Please select from the pages listed below:</p>
                    <a href="/">- Home</a>
                    <a href="available-homes">- Available Homes</a>
                    <a href="/gallery">- Gallery</a>
                    <a href="/about">- About Us</a>
                </div>
            </div>
        </div>
    </div>

<?php do_action( 'ample_after_body_content' );
get_footer(); ?>