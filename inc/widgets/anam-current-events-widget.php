<?php
if ( ! function_exists( 'anam_create_current_events_widget' ) ) :
  /**
   * Register ANAM Current Events widget.
   *
   * SEE: http://www.billerickson.net/code/popular-posts-widget/
   */
  function anam_create_current_events_widget() {

    // Define the widget class

    class current_events_widget extends WP_Widget {

      function __construct() {
        parent::__construct(
          // Base ID of your widget
          'current_events_widget', // for some reason, needs to end with "_widget"

          // Widget name will appear in UI
          __('Current Events', 'anam'), 

          // Widget description
          array( 'description' => __( 'A list of current ANAM Events', 'anam' ), ) 
        );
      }

      // Define rendering function

      public function widget( $args, $instance ) {
        extract( $args );

        $anamEvent = new ANAMEvent();

        $title = apply_filters( 'widget_title', $instance['title'] );

        $post_count = 0;  
        $post_limit = $instance['limit'];
        $query = $anamEvent->getCurrentEvents();

        if ( $query->have_posts() ) {
          // before and after widget arguments are defined by themes
          echo $before_widget;

          if ( ! empty( $title ) ) {
            if ($query->found_posts > $post_limit) {
              echo $args['before_title'] . $title . $args['after_title'] . '<a href="/events/current-events">more...<a>';
            } else {
              echo $args['before_title'] . $title . $args['after_title'];
            }
          }

          while ( $query->have_posts() ) {
            $post_count++;
            $query->the_post();
            if ($post_count <= $post_limit) {
              get_template_part('event-summary');
            }
          }

          echo $after_widget;
        }
        
        wp_reset_query();
      }

      // Define widget admin form

      public function form( $instance ) {
        if ( isset( $instance[ 'limit' ] ) ) {
          $limit = $instance[ 'limit' ];
        } else {
          $limit = __( 3, 'anam' );
        }

        if ( isset( $instance[ 'title' ] ) ) {
          $title = $instance[ 'title' ];
        } else {
          $title = __( 'Current Events', 'anam' );
        }

        ?>
        <p>
          <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id( 'limit' ); ?>"><?php _e( 'Number of events to show:' ); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id( 'limit' ); ?>" name="<?php echo $this->get_field_name( 'limit' ); ?>" type="number" min="1" max="10" value="<?php echo esc_attr( $limit ); ?>" />
        </p>
        <?php 
      }

      // Updating widget replacing old instances with new

      public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['limit'] = ( ! empty( $new_instance['limit'] ) ) ? $new_instance['limit'] : 3;
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
      }
    } // Class current_events_widget ends here

    // Register and load the widget

	  register_widget( 'current_events_widget' );
  }

endif; // anam_create_current_events_widget
?>
