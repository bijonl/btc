<?php 
if ( !function_exists( 'pw_register_nav_menus' ) ) {
    function pw_register_nav_menus() {
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'pw' ),
            'footer-menu' => __( 'Footer Menu', 'pw' ),

        ) );
    };
}
