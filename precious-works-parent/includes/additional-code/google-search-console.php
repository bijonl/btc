<?php
/**
 * Inject Google Search Console verification meta tag from ACF.
 */
function pw_inject_search_console_head() {
    if ( function_exists('get_field') ) {
        $gsc_tag = get_field('google_search_console_head_tag', 'option'); // global field
        if ( $gsc_tag ) {
            echo $gsc_tag; // Meta tag from Search Console
        }
    }
}
add_action( 'wp_head', 'pw_inject_search_console_head', 0 ); // very early in head
