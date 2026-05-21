<?php
/**
 * Demo placeholder for Recent Posts block
 * Used when no posts are selected
 */

// Fallback posts data
$demo_posts = [
    [
        'title' => 'Demo Post 1',
        'publish_date' => date('F j, Y'),
        'featured_image' => 'https://placehold.co/350x200?text=Placeholder+Icon',
    ],
    [
        'title' => 'Demo Post 2',
        'publish_date' => date('F j, Y', strtotime('-1 week')),
        'featured_image' => 'https://placehold.co/350x200?text=Placeholder+Icon',
    ],
    [
        'title' => 'Demo Post 3',
        'publish_date' => date('F j, Y', strtotime('-2 weeks')),
        'featured_image' => 'https://placehold.co/350x200?text=Placeholder+Icon',
    ],
];
?>

<section <?php echo pw_block_section_classes($block); ?>>
    <?php if ($has_title_area) { 
        include(locate_template('blocks/partials/title-area.php'));
    } ?>

    <div class="recent-posts-container container">
        <div class="recent-posts-row row">
            <?php foreach ($demo_posts as $post) { ?>
                <div class="recent-posts-col col-sm-4">
                    <div class="single-post-tile">
                        <div class="single-post-image-wrapper">
                            <img src="<?php echo esc_url($post['featured_image']); ?>" alt="<?php echo esc_attr($post['title']); ?>" />
                        </div>
                        <div class="single-post-title-wrapper">
                            <h4><?php echo esc_html($post['title']); ?></h4>
                        </div>
                        <div class="single-post-date-wrapper">
                            <p><?php echo esc_html($post['publish_date']); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <?php if ($section_button) { ?>
            <div class="button-row row">
                <div class="button-col col-sm-12 mx-auto text-center">
                    <?php include(locate_template('blocks/partials/button-area.php')); ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
