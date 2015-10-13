<?php
/**
 * Redirect Event archive listing to Current Events page.
 *
 * @package ANAM
 */

  $redirectLink = get_page_link (get_page_by_title( 'Current Events' ));

  header("Location: $redirectLink", TRUE, 301);
?>
