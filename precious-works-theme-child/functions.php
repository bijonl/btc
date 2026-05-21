<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// 🔧 Define theme version
$theme = wp_get_theme();
define( 'PW_THEME_CHILD_VERSION', $theme->get( 'Version' ) );


function pw_enqueue_scripts() {
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/assets/dist/css/style.min.css', [], PW_THEME_CHILD_VERSION );

    // Then enqueue child style, dependent on parent-style
    // wp_enqueue_style( 'pw-style', get_stylesheet_directory_uri() . '/assets/dist/css/style.min.css', ['parent-style'], PW_THEME_CHILD_VERSION );
    
    // JS if needed
    wp_enqueue_script( 'pw-main', get_template_directory_uri()  . '/assets/js/main.js', [], PW_THEME_CHILD_VERSION, true );

      // Font Awesome 6 CDN (replace with your preferred version if needed)
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css',
        [],
        '6.5.0'
    );
}

function pw_enqueue_glightbox_assets() {
    wp_enqueue_style('glightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css');
    wp_enqueue_script('glightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js', array(), null, true);

    // Optionally initialize after DOM loads
    wp_add_inline_script('glightbox', 'document.addEventListener("DOMContentLoaded", function() { GLightbox({ selector: ".glightbox" }); });');
}

add_action('wp_enqueue_scripts', 'pw_enqueue_glightbox_assets');
add_action( 'wp_enqueue_scripts', 'pw_enqueue_scripts', 20 );
add_action( 'enqueue_block_editor_assets', 'pw_enqueue_scripts' );




