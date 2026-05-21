<?php
/**
 * Remove Yoast SEO columns from admin posts/pages list.
 * 
 * This function removes any columns added by Yoast SEO in the posts/pages list
 * tables in the WordPress admin. Yoast columns usually start with 'wpseo_'.
 *
 * @param array $columns Array of existing columns.
 * @return array Modified columns array with Yoast columns removed.
 */
function pw_disable_yoast_columns($columns) {
    // Loop through all columns
    foreach ($columns as $key => $title) {

        // If the column key starts with 'wpseo_' it is a Yoast column
        if (strpos($key, 'wpseo_') === 0) {
            unset($columns[$key]); // Remove the Yoast column
        }
    }

    // Return the modified columns array
    return $columns;
}

// Apply filter to posts list table
add_filter('manage_post_posts_columns', 'pw_disable_yoast_columns', 20);

// Apply filter to pages list table
add_filter('manage_page_posts_columns', 'pw_disable_yoast_columns', 20);
