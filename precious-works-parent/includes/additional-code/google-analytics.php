<?php // Head snippet
function pw_inject_google_analytics_head() {
    if ( function_exists('get_field') ) {
        $head_snippet = get_field('google_analytics_head_snippet', 'option'); 
        if ( $head_snippet ) {
            // Wrap in <script> if snippet is JS only
            echo $head_snippet;
        }
    }
}
add_action( 'wp_head', 'pw_inject_google_analytics_head', 0 );

// Body snippet
function pw_inject_google_analytics_body() {
    if ( function_exists('get_field') ) {
        $body_snippet = get_field('google_analytics_body_snippet', 'option'); 
        if ( $body_snippet ) {
            echo $body_snippet;
        }
    }
}
add_action( 'wp_body_open', 'pw_inject_google_analytics_body', 1 );
