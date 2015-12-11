<?php
/**
 * Template Name: Gallery
 *
 * Displays gallery of the theme.
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
             <h4><?php the_field('gallery_tagline'); ?></h4>
          </div>
        </div>
    </div>
    <div class="single-page clearfix">
        <div class="inner-wrap">
            <div class="section-wrapper">
                <div class="section-head dark">
                   <h1><?php the_field('gallery_title'); ?></h1>
                   <div class="title-decoration">
                      <?php echo do_shortcode("[wp-svg-icons icon='home' wrap='i']"); ?>
                   </div>
                </div>
                <p><?php the_field('gallery_welcome'); ?></p>
                <div class="gallery-category-content interiors content-sub-section">
                    <h2 class="subhead-no-dec"><?php the_field('gallery_category-title-1'); ?></h2>
                    <p><?php the_field('gallery_category-desc-1'); ?></p>
                    <div class="gallery-container">
                        <?php echo photo_gallery(8); ?>
                    </div>
                </div>
                <div class="gallery-category-content exteriors content-sub-section">
                    <h2 class="subhead-no-dec"><?php the_field('gallery_category-title-2'); ?></h2>
                    <p><?php the_field('gallery_category-desc-2'); ?></p>
                    <div class="gallery-container">
                        <?php echo photo_gallery(9); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php do_action( 'ample_after_body_content' );
get_footer(); ?>