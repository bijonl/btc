<?php
/**
 * Inject site-wide head, body, and footer code snippets from ACF option fields.
 */

/**
 * Head code injection.
 * Field: site_head_code_tag
 */
function pw_inject_site_head_code() {
    if ( function_exists('get_field') ) {
        $head_code = get_field('site_head_code_tag', 'option');
        if ( $head_code ) {
            echo $head_code;
        }
    }
}
add_action('wp_head', 'pw_inject_site_head_code', 0);


/**
 * Body-open code injection.
 * Field: site_body_open_code_tag
 */
function pw_inject_site_body_open_code() {
    if ( function_exists('get_field') ) {
        $body_code = get_field('site_body_open_code_tag', 'option');
        if ( $body_code ) {
            echo $body_code;
        }
    }
}
add_action('wp_body_open', 'pw_inject_site_body_open_code', 0);


/**
 * Footer code injection.
 * Field: site_footer_code
 */
function pw_inject_site_footer_code() {
    if ( function_exists('get_field') ) {
        $footer_code = get_field('site_footer_code', 'option');
        if ( $footer_code ) {
            echo $footer_code;
        }
    }
}
add_action('wp_footer', 'pw_inject_site_footer_code', 0);
