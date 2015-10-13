<?php
/**
 * Redirect NAS UNIT archive listing to NAS Units page.
 *
 * @package ANAM
 */

  $redirectLink = get_page_link (get_page_by_title( 'NAS Units' ));

  header("Location: $redirectLink", TRUE, 301);
?>
