<?php
/**
 * Template Name: Available Homes
 *
 * Displays the Available Homes of the theme.
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
             <h4>A Focus On Quality</h4>
          </div>
        </div>
    </div>
    <div class="single-page clearfix">
        <div class="inner-wrap">
            <div class="section-wrapper">
                <div class="section-head dark">
                   <h1><?php the_field('available-homes_title'); ?></h1>
                   <div class="title-decoration">
                      <?php echo do_shortcode("[wp-svg-icons icon='home' wrap='i']"); ?>
                   </div>
                </div>
                <p><?php the_field('available-homes_welcome-paragraph'); ?></p>
                <div class="available-homes-comm-desc content-sub-section">
                    <h2 class="subhead-no-dec"><?php the_field('available-homes_comm-desc-title'); ?></h2>
                    <p><?php the_field('available-homes_comm-desc-paragraph'); ?></p>
                </div>

                <div class="available-homes-listings content-sub-section">
                    <div class="home-listings">
                        <div class="pure-g">
                            <?php
                                for ($i=1; $i<4; $i++) { ?>
                                    <div class="home-listing-container grid-xs-1 grid-sm-1 grid-md-1-2 grid-lg-1-3">
                                        <div class="listing-image">
                                            <img src="<?php the_field('available-homes_listing-image-' . $i); ?>"/>
                                            <div class="listing-reveal">
                                                <p><?php the_field('available-homes_listing-reveal-' . $i); ?></p>
                                            </div>
                                        </div>
                                        <div class="listing-title">
                                            <h3><?php the_field('available-homes_listing-title-' . $i); ?></h3>
                                        </div>
                                        <div class="listing-features">
                                            <p><span class="feature-label">Community:</span>
                                                <?php the_field("available-homes_listing-community-" . $i); ?>
                                            </p>
                                            <p><span class="feature-label">Price:</span>
                                                <?php the_field("available-homes_listing-price-" . $i); ?>
                                            </p>
                                            <p><span class="feature-label">Beds:</span>
                                                <?php the_field("available-homes_listing-beds-" . $i); ?>
                                            </p>
                                            <p><span class="feature-label">Baths:</span>
                                                <?php the_field("available-homes_listing-baths-" . $i); ?>
                                            </p>
                                            <p><span class="feature-label">Sq Ft:</span>
                                                <?php the_field("available-homes_listing-square-feet-" . $i); ?>
                                            </p>
                                            <p><span class="feature-label">Status:</span>
                                                <?php the_field("available-homes_listing-status-" . $i); ?>
                                            </p>
                                            <?php
                                                if ($i == 1) {
                                                    $link = '?p=111';
                                                } elseif ($i == 2) {
                                                    $link = '?p=145';
                                                } elseif ($i == 3) {
                                                    $link = '';
                                                }
                                            ?>
                                            <a class="home-listing-btn btn" href="<?php echo $link; ?>" >Learn More</a>
                                        </div>
                                    </div>
                                <? }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      jQuery(document).ready(function($) {
         $('.home-listing-container').on('hover', function() {
            $(this).find('.listing-reveal').slideDown('slow');
         })
      })
   </script>

<?php do_action( 'ample_after_body_content' );
get_footer(); ?>