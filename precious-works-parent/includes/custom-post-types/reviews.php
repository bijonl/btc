<?php
/**
 * reviews Custom Post Type
 *
 * This custom post type adds support for reviews. This file declares
 * basic support for the post type, while the fields are managed by the
 * Advanced Custom Fields plugin.
 */

 function register_custom_post_type_reviews() {
    $labels = apply_filters( 'reviews_post_type_labels', array(
        'name'               => 'Reviews',
        'singular_name'      => 'Review',
        'menu_name'          => 'Reviews',
        'add_new'            => 'Add New Review',
        'add_new_item'       => 'Add Review',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Review',
        'new_item'           => 'New Review',
        'view'               => 'View Review',
        'view_item'          => 'View Review',
        'search_items'       => 'Search Reviews',
        'not_found'          => 'No Review',
        'not_found_in_trash' => 'No Reviews Found in Trash',
        'parent'             => 'Parent Reviews',
    ));

    $args = apply_filters( 'review_post_type_args', array(
        'label'               => 'review',
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => false,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'capability_type'     => 'page',
        'hierarchical'        => true,
        'query_var'           => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'menu_icon'           => 'dashicons-star-filled',
        'show_in_rest'        => true,
        'supports'            => array( 'title', 'thumbnail'),
        'labels'              => $labels,
        'map_meta_cap'        => true,
    ));

    register_post_type( 'reviews', $args );
}
add_action( 'init', 'register_custom_post_type_reviews' );


// Run once for user permissions

add_action( 'admin_init', 'add_review_caps');
function add_review_caps() {
$roles = array('administrator','editor');

foreach($roles as $the_role) {
    $role = get_role($the_role);
        $role->add_cap( 'edit_review' );
        $role->add_cap( 'read_review' );
        $role->add_cap( 'delete_review' );
        $role->add_cap( 'edit_review' );
        $role->add_cap( 'edit_others_review' );
        $role->add_cap( 'publish_review' );
        $role->add_cap( 'read_private_review' );
    }
}