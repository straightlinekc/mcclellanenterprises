<?php
/**
 * Template Name: Home Listing
 *
 * Displays Individual Home Listing of the theme.
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
    <?php
        global $post;
        $pageId = $post->ID;
        if ($pageId == 111) {
            $listingNumber = 1;
        } elseif ($pageId == 145) {
            $listingNumber = 2;
        } elseif ($pageId == 156) {
            $listingNumber = 3;
        }
    ?>
    <div class="banner">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/available_homes_banner.jpg"/>
        <div class="banner-tagline">
            <div class="inner-wrap">
             <h4><?php the_field('home-listing_tagline-' . $listingNumber); ?></h4>
          </div>
        </div>
    </div>
    <div class="single-page clearfix">
        <div class="inner-wrap">
            <div class="section-wrapper">
                <div class="section-head dark">
                   <h1><?php the_field('home-listing_page-title-' . $listingNumber); ?></h1>
                   <div class="title-decoration">
                      <?php echo do_shortcode("[wp-svg-icons icon='home' wrap='i']"); ?>
                   </div>
                </div>
                <p><?php the_field('home-listing_desc-' . $listingNumber); ?></p>

                <div class="home-listing-specs content-sub-section">
                    <h2 class="subhead-no-dec"><?php the_field('home-listing_title-' . $listingNumber); ?></h2>
                    <div class="pure-g">
                        <div class="features-container grid-xs-1 grid-sm-1 grid-md-1 grid-lg-1-3">
                            <p>
                                <span class="address1"><?php the_field('home-listing_address1-' . $listingNumber); ?></span>
                                <span class="address2"><?php the_field('home-listing_address2-' . $listingNumber); ?></span>
                            </p>
                            <div class="pure-g">
                                <div class="home-info grid-xs-1 grid-sm-1-2 grid-md-1-2 grid-lg-1">
                                    <p><span class="feature-label">MLS#:</span>
                                        <?php the_field("home-listing_mls-" . $listingNumber); ?>
                                    </p>
                                    <p><span class="feature-label">Community:</span>
                                        <?php the_field("home-listing_community-" . $listingNumber); ?>
                                    </p>
                                    <p><span class="feature-label">Price:</span>
                                        <?php the_field("home-listing_price-" . $listingNumber); ?>
                                    </p>
                                    <p><span class="feature-label">Beds:</span>
                                        <?php the_field("home-listing_beds-" . $listingNumber); ?>
                                    </p>
                                </div>
                                <div class="home-info grid-xs-1 grid-sm-1-2 grid-md-1-2 grid-lg-1">
                                    <p><span class="feature-label">Baths:</span>
                                        <?php the_field("home-listing_baths-" . $listingNumber); ?>
                                    </p>
                                    <p><span class="feature-label">Sq Ft:</span>
                                        <?php the_field("home-listing_square-feet-" . $listingNumber); ?>
                                    </p>
                                    <p><span class="feature-label">Status:</span>
                                        <?php the_field("home-listing_status-" . $listingNumber); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-container grid-xs-1 grid-sm-1 grid-md-1 grid-lg-2-3">
                            <?php echo photo_gallery($listingNumber); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

   </script>

<?php do_action( 'ample_after_body_content' );
get_footer(); ?>