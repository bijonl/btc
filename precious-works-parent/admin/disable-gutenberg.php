<?php
/**
 * Conditionally disable the Gutenberg editor for specific posts/pages.
 *
 * This snippet allows you to disable the block editor (Gutenberg)
 * based on post type, page template, or other custom conditions.
 *
 * @param bool    $use_block_editor Whether to use Gutenberg.
 * @param WP_Post $post             The current post object.
 * @return bool
 */
function pw_disable_gutenberg( $use_block_editor, $post ) {

    // Example: Disable Gutenberg for a specific page template
    if ( $post && get_page_template_slug( $post->ID ) === 'page-blog-template.php' ) {

        // Also remove the classic editor support to fully hide the editor
        remove_post_type_support( 'page', 'editor' );

        // Return false to disable Gutenberg
        return false;
    }

    // Otherwise, use the default editor
    return $use_block_editor;
}

// Apply the filter for Gutenberg editor usage
add_filter( 'use_block_editor_for_post', 'pw_disable_gutenberg', 10, 2 );
