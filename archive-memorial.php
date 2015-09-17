<?php
/**
 * Redirect Memorial archive listing to Memorials page.
 *
 * @package ANAM
 */

  $pagelink = get_page_link (get_page_by_title( 'Memorials' ));

  header("Location: $pagelink", TRUE, 301);
?>
