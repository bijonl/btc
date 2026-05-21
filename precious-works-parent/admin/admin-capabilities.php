<?php function pw_restrict_admin_menu() {
     // List of allowed email addresses
    $allowed_emails = array(
        'bijon@precious.works',
        'billing@precious.works',
        'bijonlb.dev@gmail.com'
    );

    // Get current user info
    $current_user = wp_get_current_user();
    $user_email   = $current_user->user_email;

    $valid_user = get_current_user_id() === 1 || in_array( $user_email, $allowed_emails ); 



    // Check if current user is NOT the super admin
    if ( ! current_user_can( 'manage_options' ) || !$valid_user ) {

        // Remove Theme Editor
        remove_submenu_page( 'themes.php', 'theme-editor.php' );
        remove_submenu_page( 'themes.php', 'themes.php' );
        remove_submenu_page( 'themes.php', 'site-editor.php' );



        // Remove Plugin Editor
        remove_submenu_page( 'plugins.php', 'plugin-editor.php' );

        // Remove ACF menu
        remove_menu_page( 'edit.php?post_type=acf-field-group' );
    }
}
add_action( 'admin_menu', 'pw_restrict_admin_menu', 999 );

/**
 * Hide dangerous admin menus for non-super-admins
 */
