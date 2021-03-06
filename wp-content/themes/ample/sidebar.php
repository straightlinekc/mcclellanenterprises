<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>

<div id="secondary" class="sidebar">
   <?php do_action( 'ample_before_sidebar' );

   if( is_page_template( 'page-templates/template-contact.php' ) ) {
      $sidebar = 'ample_contact_page_sidebar';
   }
   else {
      $sidebar = 'ample_right_sidebar';
   }

   if ( ! dynamic_sidebar( $sidebar ) ) :
      if ( $sidebar == 'ample_contact_page_sidebar' ) {
         $sidebar_display = __('Contact Page', 'ample');
      } else {
         $sidebar_display = __('Right', 'ample');
      }
      the_widget( 'WP_Widget_Text',
         array(
            'title'  => __( 'Example Widget', 'ample' ),
            'text'   => sprintf( __( 'This is an example widget to show how the %s sidebar looks by default. You can add custom widgets from the %swidgets screen%s in the admin. If custom widgets is added than this will be replaced by those widgets', 'ample' ), $sidebar_display, current_user_can( 'edit_theme_options' ) ? '<a href="' . admin_url( 'widgets.php' ) . '">' : '', current_user_can( 'edit_theme_options' ) ? '</a>' : '' ),
            'filter' => true,
         ),
         array(
            'before_widget' => '<section class="widget widget_text">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
         )
      );
   endif;

   do_action( 'ample_after_sidebar' ); ?>
</div>