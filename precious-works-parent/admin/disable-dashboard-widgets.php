<?php function pw_remove_dashboard_widgets() {

    // Default WordPress widgets

    remove_meta_box(
        'dashboard_quick_press', // Widget ID for Quick Draft / Quick Press
        'dashboard',             // Screen to remove from
        'side'                   // Context (side column)
    );      

    remove_meta_box(
        'dashboard_right_now',   // Widget ID for “At a Glance” / Right Now
        'dashboard',
        'normal'                 // Main column
    );        

    remove_meta_box(
        'dashboard_primary',     // Widget ID for WordPress News
        'dashboard',
        'side'
    );          

    remove_meta_box(
        'dashboard_secondary',   // Widget ID for Other WordPress news/info
        'dashboard',
        'side'
    );        

    remove_meta_box(
        'dashboard_activity',    // Widget ID for Activity (recent posts/comments)
        'dashboard',
        'normal'
    );       

    // Plugin widgets

    remove_meta_box(
        'rg_forms_dashboard',    // Gravity Forms dashboard widget
        'dashboard',
        'normal'
    );       

    remove_meta_box(
        'wpseo-wincher-dashboard-overview', // Yoast + Wincher SEO overview (if exists)
        'dashboard',
        'normal'
    );       

    remove_meta_box(
        'wpseo-dashboard-overview', // Standard Yoast SEO dashboard widget
        'dashboard',
        'normal'
    ); 
}

// Hook our function to the dashboard setup action
add_action('wp_dashboard_setup', 'pw_remove_dashboard_widgets');

/**
 * Remove unnecessary dashboard widgets
 * 
 * This function cleans up the WordPress admin dashboard by removing default
 * widgets and some plugin widgets like Yoast SEO or Gravity Forms.
 */
