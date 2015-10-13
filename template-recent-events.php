<?php
/**
 * Template Name: Recent Events
 * 
 * Used to display a list of past Event post types.
 *
 * When clicking on a single Event link, it will render 'single-event.php'.
 *
 * @package ANAM
 *
 * SEE: https://gist.github.com/aderaaij/6827478
 */

  $anamEvent = new ANAMEvent();

  $query = $anamEvent->getRecentEvents();
  
  //http://keithdevon.com/passing-variables-to-get_template_part-in-wordpress/
  include(locate_template('content-event-list.php'));
