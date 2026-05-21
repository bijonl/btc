<?php /**
 * Unregister the built-in 'post_tag' taxonomy from posts.
 *
 * This removes the Tags meta box and disables tags for posts.
 */
function pw_unregister_post_tags() {
    // Remove 'post_tag' taxonomy from the 'post' post type
    unregister_taxonomy_for_object_type( 'post_tag', 'post' );
}
// Hook into 'init' to unregister tags after WordPress registers taxonomies
add_action( 'init', 'pw_unregister_post_tags' ); 

/**
 * Enable custom admin menu ordering
 */
function pw_enable_custom_admin_menu_order($menu_order) {
    return true; // enable custom ordering
}
add_filter('custom_menu_order', 'pw_enable_custom_admin_menu_order');

/**
 * Define the custom admin menu order
 *
 * @param array $menu_order Default menu order array.
 * @return array Reordered menu slugs
 */
function pw_admin_menu_order($menu_order) {
    if (!$menu_order) {
        return true;
    }

    return [
        'index.php',           // Dashboard
        'edit.php?post_type=page', // Pages
        'edit.php',            // Posts


        'edit.php?post_type=reviews',
        'admin.php?page=gf_edit_forms',
        'upload.php',          // Media

        'tools.php',           // Tools
        'themes.php',          // Appearance
        'users.php',           // Users
        'plugins.php',         // Plugins
    ];
}
add_filter('menu_order', 'pw_admin_menu_order');