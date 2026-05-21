<?php
/**
 * Generate a CSS class, ID, and ADA/ARIA attributes for a block section.
 *
 * Builds a string containing:
 *  - class attribute (including block name, padding, background color)
 *  - id attribute (uses anchor if set or auto-generated from title)
 *  - role and aria-label attributes for accessibility
 *
 * @param array  $block Block data array (expects 'title', 'id', 'anchor', and 'data' keys).
 * @param string $role  Optional ARIA role for the section. Defaults to 'region'.
 * @return string       HTML attributes string for the section tag.
 */
function pw_block_section_classes( $block, $role = "region" ) {

    // Base section class
    $section_classes = 'pw-section ';

    // Generate a kebab-case block name from title
    $block_name = str_replace( ' ', '-', strtolower( $block['title'] ) );

    // Append block-specific classes
    $section_classes .= $block_name . '-section block-section ';

    // Add top padding class if set
    if ( ! empty( $block['data']['top_section_padding'] ) ) {
        $padding_class_top = $block['data']['top_section_padding'] === 'none' ? 'pt-0' : 'padding-standard';
        $section_classes .= $padding_class_top . ' ';
    }

    // Add bottom padding class if set
    if ( ! empty( $block['data']['bottom_section_padding'] ) ) {
        $padding_class_bottom = $block['data']['bottom_section_padding'] === 'none' ? 'pb-0' : 'padding-standard';
        $section_classes .= $padding_class_bottom . ' ';
    }

    // Add background color class if set
    if ( ! empty( $block['data']['section_background_color'] ) ) {
        $section_classes .= 'background-' . $block['data']['section_background_color'] . ' ';
    }

    // Determine ARIA label (for accessibility)
    $section_aria_label = $block['title']; // default

    if ( ! empty( $block['data']['section_aria_label'] ) ) {
        $section_aria_label = $block['data']['section_aria_label'];
    } elseif ( ! empty( $block['data']['section_title'] ) ) {
        $section_aria_label = $block['data']['section_title'];
    }

    // Determine section ID
    $section_id = ! empty( $block['anchor'] ) ? esc_attr( $block['anchor'] ) : esc_attr( $block_name . '-' . $block['id'] );

    // Build HTML attribute strings
    $section_class_string = 'class="' . $section_classes . '"';
    $section_id_string    = 'id="' . $section_id . '"';
    $section_ada_string   = 'role="' . $role . '" aria-label="' . esc_attr( $section_aria_label ) . '"';

    // Return combined attribute string
    return $section_class_string . ' ' . $section_id_string . ' ' . $section_ada_string;
}


/**
 * Returns a semantic HTML heading with optional tag and CSS class.
 *
 * Sanitizes content and ensures only valid heading tags are used.
 *
 * @param string $title        The heading text.
 * @param string $tag          The HTML tag to use (e.g., 'h2', 'h3'). Defaults to 'h2'.
 * @param string $custom_class Optional CSS class(es) to apply.
 * @return string              The heading HTML string or empty string if invalid.
 */
function pw_seo_heading( $title, $tag = 'h2', $custom_class = '' ) {

    // Return empty if title is empty or tag is invalid
    if ( empty( $title ) || ! in_array( strtolower( $tag ), [ 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' ] ) ) {
        return '';
    }

    // Build class attribute if custom class is provided
    $class_attr = $custom_class ? ' class="' . esc_attr( trim( $custom_class ) ) . '"' : '';

    // Return formatted heading HTML
    return sprintf(
        '<%1$s%2$s>%3$s</%1$s>',
        esc_html( $tag ),        // heading tag
        $class_attr,             // optional class attribute
        $title        // heading content
    );
}
?>
