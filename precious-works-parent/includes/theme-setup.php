<?php function pw_register_theme_setup() {
    // Add support for document title tag
    add_theme_support( 'title-tag' );

    // Add support for featured images
    add_theme_support( 'post-thumbnails' );

    // Add support for block editor styles (optional)
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );
}

