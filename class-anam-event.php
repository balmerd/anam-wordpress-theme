<?php
class ANAMEvent {

  public function __construct() {
    // nothing yet
  }

  private function getQueryArgs($order, $comparison) {
    return array(
      'post_type'   => 'event',
      'meta_key'    => 'event_date',
      'orderby'     => 'meta_value_num',
      'order'       => $order,
      'meta_query'  => array(
        array(
          'key'     => 'event_date',
          'type'    => 'DATE',
          'value'   => date("Y-m-d"),
          'compare' => $comparison,
        )
      )
    );
  }

  public function getRecentEvents() {
    return new WP_Query( $this->getQueryArgs('DESC', '<' ) );
  }

  public function getCurrentEvents() {
    return new WP_Query( $this->getQueryArgs('ASC', '>=' ) );
  }
}
?>
