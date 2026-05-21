<?php
/**
 * Demo placeholder for Homepage Hero block
 */

// Placeholder image
$image_url = 'https://placehold.co/1600x600?text=Homepage+Hero';

// Demo title and button
$demo_title = 'Welcome to Our Website';
$demo_subtitle = 'Your tagline or introduction goes here.';
$demo_button = [
    'url' => '#',
    'title' => 'Learn More',
    'target' => '_self',
];

// Temporarily override variables if they aren’t set
$has_title_area = true;
$has_button_area = true;
?>

<section <?php echo pw_block_section_classes($block); ?> style="background-image: url('<?php echo esc_url($image_url); ?>')">
    <div class="overlay image-overlay"></div>
    <div class="homepage-hero-container container h-100">
        <div class="homepage-hero-row row align-items-center h-100">
            <div class="homepage-hero-col col-12">
                <div class="homepage-hero-content-wrapper">
                    <?php
                    // Use demo title for placeholder
                    $display_title = 'h1';
                    $section_title = $demo_title;
                    $section_subtitle = $demo_subtitle;
                    include(locate_template('blocks/partials/title-area.php'));

                    // Use demo button
                    $section_button = $demo_button;
                    include(locate_template('blocks/partials/button-area.php'));
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
