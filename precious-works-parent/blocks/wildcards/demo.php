<?php
/**
 * Demo placeholder for Wildcards block
 * Used when there is no content
 */
?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="wildcards-container container">
        <div class="wildcards-row row row-cols-4" role="list">
            <?php
            // Demo items (4 placeholders)
            $demo_items = [
                [
                    'title' => 'Demo Item 1',
                    'content' => 'This is a demo description for wildcard 1.',
                    'image_type' => 'image',
                    'image_url' => 'https://placehold.co/200x200?text=Placeholder+Icon',
                    'icon' => '',
                    'button' => [
                        'url' => '#',
                        'title' => 'Learn More',
                        'target' => '_self'
                    ]
                ],
                [
                    'title' => 'Demo Item 2',
                    'content' => 'This is a demo description for wildcard 2.',
                    'image_type' => 'image',
                    'image_url' => 'https://placehold.co/200x200?text=Placeholder+Icon',
                    'icon' => '',
                    'button' => [
                        'url' => '#',
                        'title' => 'Learn More',
                        'target' => '_self'
                    ]
                ],
                [
                    'title' => 'Demo Item 3',
                    'content' => 'This is a demo description for wildcard 3.',
                    'image_type' => 'image',
                    'image_url' => 'https://placehold.co/200x200?text=Placeholder+Icon',
                    'icon' => '',
                    'button' => [
                        'url' => '#',
                        'title' => 'Learn More',
                        'target' => '_self'
                    ]
                ],
                [
                    'title' => 'Demo Item 4',
                    'content' => 'This is a demo description for wildcard 4.',
                    'image_type' => 'image',
                    'image_url' => 'https://placehold.co/200x200?text=Placeholder+Icon',
                    'icon' => '',
                    'button' => [
                        'url' => '#',
                        'title' => 'Learn More',
                        'target' => '_self'
                    ]
                ],
            ];

            foreach ($demo_items as $index => $item) { 
                $wildcard_id = 'wildcard-demo-' . ($index + 1);
            ?>
                <div class="wildcards-col col mx-auto text-center" role="listitem">
                    <div class="single-wildcard-wrapper">
                        <div class="wildcard-image-wrapper">
                            <?php if ($item['image_type'] === 'icon') : ?>
                                <span class="wildcard-icon" role="img" aria-label="<?php echo esc_attr($item['title']); ?>">
                                    <?php echo $item['icon']; ?>
                                </span>
                            <?php elseif ($item['image_type'] === 'image') : ?>
                                <img src="<?php echo esc_url($item['image_url']); ?>" alt="<?php echo esc_attr($item['title']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="wildcard-title-wrapper">
                            <h4><?php echo esc_html($item['title']); ?></h4>
                        </div>
                        <div class="wildcard-content-wrapper">
                            <p><?php echo esc_html($item['content']); ?></p>
                        </div>
                        <div class="button-area-wrapper">
                            <a 
                                href="<?php echo esc_url($item['button']['url']); ?>" 
                                target="<?php echo esc_attr($item['button']['target']); ?>" 
                                class="pw-solid-button"
                                aria-label="<?php echo esc_attr('Button for '.$item['title'].'. Links to '.$item['button']['url']); ?>"
                            >
                                <?php echo esc_html($item['button']['title']); ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>
</section>
