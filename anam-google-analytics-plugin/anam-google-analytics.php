<?php
/*
Plugin Name: ANAM Google Analytics Plugin
Plugin URI: http://alamedanavalairmuseum.org
Description: Adds a Google analytics tracking code for http://alamedanavalairmuseum.org
Author: David Balmer
Version: 1.0
 */
 
if ( ! function_exists( 'anam_google_analytics' ) ):
  function anam_google_analytics() {
  ?>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-8429302-2', 'auto');
    ga('send', 'pageview');
    </script>
  <?php
  }
endif;

add_action( 'wp_head', 'anam_google_analytics', PHP_INT_MAX );
?>
