<?php
/**
 * Redirect Memorial archive listing to Memorials page.
 *
 * @package ANAM
 */

  $redirectLink = get_page_link (get_page_by_title( 'Memorials' ));

  header("Location: $redirectLink", TRUE, 301);
?>
