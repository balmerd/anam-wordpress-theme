<?php
/**
 * Template Name: Current Events
 * 
 * Used to display a list of upcoming Event post types.
 *
 * When clicking on a single Event link, it will render 'single-event.php'.
 *
 * @package ANAM
 *
 * SEE: https://gist.github.com/aderaaij/6827478
 */

  $anamEvent = new ANAMEvent();

  $query = $anamEvent->getCurrentEvents();
  
  //http://keithdevon.com/passing-variables-to-get_template_part-in-wordpress/
  include(locate_template('content-event-list.php'));
