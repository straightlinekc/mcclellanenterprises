<?php
/**
 * Template Name: About
 *
 * Displays the about page of the theme.
 *
 * @package ThemeGrill
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
    <div class="banner">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/available_homes_banner.jpg"/>
        <div class="banner-tagline">
            <div class="inner-wrap">
             <h4><?php the_field('about_tagline'); ?></h4>
          </div>
        </div>
    </div>
    <div class="single-page clearfix">
        <div class="inner-wrap">
            <div class="section-wrapper">
                <div class="section-head dark">
                   <h1><?php the_field('about_title'); ?></h1>
                   <div class="title-decoration">
                      <?php echo do_shortcode("[wp-svg-icons icon='home' wrap='i']"); ?>
                   </div>
                </div>
                <p><?php the_field('about_welcome'); ?></p>

                <div class="about-owners-content content-sub-section">
                    <h2 class="subhead-no-dec"><?php the_field('about-owners_title'); ?></h2>
                    <div class="pure-g">
                        <div class="about-owners-image grid-xs-1 grid-sm-1 grid-md-1 grid-lg-1-2"></div>
                        <div class="about-owners-desc grid-xs-1 grid-sm-1 grid-md-1 grid-lg-1-2">
                            <p><?php the_field('about-owners_desc'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php do_action( 'ample_after_body_content' );
get_footer(); ?>