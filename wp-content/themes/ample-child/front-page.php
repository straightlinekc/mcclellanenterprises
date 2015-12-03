<?php
/**
 * Page Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>

<?php get_header();

   do_action( 'ample_before_body_content' ); ?>

      <div class="single-page clearfix">
         <div id="primary">
            <div id="content">
               <div class="welcome section-wrapper">
                  <div class="inner-wrap">


                        <div class="section-head dark">
                           <h2><?php the_field('front-page_welcome-title'); ?></h2>
                           <div class="title-decoration">
                              <?php echo do_shortcode("[wp-svg-icons icon='home' wrap='i']"); ?>
                           </div>
                        </div>

                        <p><?php the_field('front-page_welcome-paragraph'); ?></p>



<!-- CALL OUT SECTION -->

                     <div class="callouts-wrapper">

                        <div class="callout-option grid-xs-1 grid-sm-1-4 grid-md-1-4 grid-lg-1-4">
                           <a class="callout-link" id="callout-1">
                              <div class="circle-border-outer">
                                 <?php echo do_shortcode("[wp-svg-icons icon='home' wrap='i']"); ?>
                              </div>
                           </a>
                           <h3><?php the_field('front-page_callout-title_1'); ?></h3>
                        </div>

                        <div class="callout-option grid-xs-1 grid-sm-1-4 grid-md-1-4 grid-lg-1-4">
                           <a class="callout-link" id="callout-2">
                              <div class="circle-border-outer">
                                 <?php echo do_shortcode("[wp-svg-icons icon='quotes-left' wrap='i']"); ?>
                              </div>
                           </a>
                           <h3><?php the_field('front-page_callout-title_2'); ?></h3>
                        </div>

                        <div class="callout-option grid-xs-1 grid-sm-1-4 grid-md-1-4 grid-lg-1-4">
                           <a class="callout-link" id="callout-3">
                              <div class="circle-border-outer">
                                 <?php echo do_shortcode("[wp-svg-icons icon='envelop' wrap='i']"); ?>
                              </div>
                           </a>
                           <h3><?php the_field('front-page_callout-title_3'); ?></h3>
                        </div>

                     </div>

                  </div><!-- .inner-wrap -->
               </div><!-- welcome -->
               <div class="available-homes section-wrapper"><a id="callout-1-section"></a>
                  <div class="inner-wrap">
                     <div class="section-head bright">
                        <h2><?php the_field('front-page_available-homes-title'); ?></h2>
                        <div class="title-decoration">
                           <?php echo do_shortcode("[wp-svg-icons icon='home' wrap='i']"); ?>
                        </div>
                     </div>
                     <div class="pure-g">
                        <div class="available-homes-map-wrap grid-sm-1 grid-md-1-2 grid-lg-1-2">
                           <div class="available-homes-map">
                              <?php echo do_shortcode("[put_wpgm id=1]"); ?>
                           </div>
                        </div>
                        <div class="available-homes-content-wrap grid-sm-1 grid-md-1-2 grid-lg-1-2">
                           <div class="available-homes-content">
                              <h3><?php the_field('front-page_available-homes-community-title'); ?></h3>
                              <p><?php the_field('front-page_available-homes-community-desc'); ?></p>
                              <a class="community-link" href="http://www.yourhomewichita.com/comm_detail.php?com=3">Learn more about Fox Ridge</a>
                              <a class="see-homes-btn">See Our Available Homes</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="testimonials section-wrapper"><a id="callout-2-section"></a>
                  <div class="inner-wrap">
                     <div class="section-head dark">
                        <h2><?php the_field('front-page_testimonials-title'); ?></h2>
                        <div class="title-decoration">
                           <?php echo do_shortcode("[wp-svg-icons icon='home' wrap='i']"); ?>
                        </div>
                     </div>
                     <?php echo do_shortcode("[show_testimonials]"); ?>
                  </div>
               </div>
               <?php while ( have_posts() ) : the_post(); ?>
               <?php endwhile; // end of the loop. ?>

               <div class="contact-us section-wrapper">
                  <div class="background-overlay"><a id="callout-3-section"></a>
                     <div class="inner-wrap">
                        <div class="section-head bright">
                           <h2><?php the_field('front-page_contact-title'); ?></h2>
                           <div class="title-decoration">
                              <?php echo do_shortcode("[wp-svg-icons icon='home' wrap='i']"); ?>
                           </div>
                        </div>
                        <div class="pure-g">
                           <div class="contact-content-wrap grid-sm-1 grid-md-1 grid-lg-1-2">
                              <div class="contact-content">
                                 <h3><?php the_field('front-page_contact-subtitle'); ?></h3>
                                 <p class="contact-desc"><?php the_field('front-page_contact-desc'); ?></p>
                              </div>
                           </div>
                           <div class="contact-form-wrap grid-sm-1 grid-md-1 grid-lg-1-2">
                              <?php echo do_shortcode("[bestwebsoft_contact_form]"); ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div><!-- content -->
         </div><!-- primary -->
      </div><!-- .single-page -->
   </div>
   <script>
      jQuery(document).ready(function($) {
         $('.callout-link').on('click', function() {
            var calloutLink = $(this).attr('id');
            $('#' + calloutLink + '-section').animatescroll({scrollSpeed:1000,padding:30});
         })
      })
   </script>
   <?php
   do_action( 'ample_after_body_content' );
get_footer(); ?>