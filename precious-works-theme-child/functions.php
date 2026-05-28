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
    wp_enqueue_script( 'pw-main', get_stylesheet_directory_uri()  . '/assets/js/main.js', [], PW_THEME_CHILD_VERSION, true );

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

function mytheme_enqueue_fonts() {

    wp_enqueue_style(
        'adobe-fonts',
        'https://use.typekit.net/llg1mcf.css',
        array(),
        null
    );

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_fonts');
function childtheme_extend_allowed_blocks( $allowed_blocks, $editor_context ) {

    // If parent already returned "true", keep it
    if ( $allowed_blocks === true ) {
        return $allowed_blocks;
    }

    // Make sure it's an array
    if ( ! is_array( $allowed_blocks ) ) {
        $allowed_blocks = [];
    }

    // Existing custom blocks
    $allowed_blocks[] = 'btc/economic-indicators-map';
    $allowed_blocks[] = 'btc/state-indicators';

    // Lottie Player blocks
    $allowed_blocks[] = 'gb/lottieplayer';
    $allowed_blocks[] = 'gb/lottiecover';

    return array_unique( $allowed_blocks );
}

add_filter(
    'allowed_block_types_all',
    'childtheme_extend_allowed_blocks',
    20,
    2
);

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('dotlottie-player-light');
});

function theme_enqueue_gsap() {

    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js',
        array('gsap'),
        null,
        true
    );

}
add_action('wp_enqueue_scripts', 'theme_enqueue_gsap');

