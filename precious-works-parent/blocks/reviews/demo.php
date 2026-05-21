<?php
/**
 * Demo placeholder for Reviews block
 * Used when there is no content
 */
?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    <div class="reviews-container container">
        <div class="reviews-row row">
            <?php
            // Demo reviews
            $demo_reviews = [
                [
                    'review' => 'This is an amazing product! Totally exceeded my expectations.',
                    'person' => 'Jane Doe',
                    'position' => 'CEO, Example Co.',
                    'image_url' => 'https://placehold.co/60x60?text=Placeholder+Icon'
                ],
                [
                    'review' => 'Highly recommend this service. Very professional and responsive.',
                    'person' => 'John Smith',
                    'position' => 'Marketing Director',
                    'image_url' => 'https://placehold.co/60x60?text=Placeholder+Icon'
                ],
                [
                    'review' => 'Five stars! I will definitely use this again.',
                    'person' => 'Alice Johnson',
                    'position' => 'Designer',
                    'image_url' => 'https://placehold.co/60x60?text=Placeholder+Icon'
                ],
                [
                    'review' => 'Exceptional experience from start to finish.',
                    'person' => 'Bob Lee',
                    'position' => 'Entrepreneur',
                    'image_url' => 'https://placehold.co/60x60?text=Placeholder+Icon'
                ],
            ];

            // Split demo reviews into two columns
            $left_column = [];
            $right_column = [];
            foreach ($demo_reviews as $i => $review) {
                if ($i % 2 === 0) {
                    $left_column[] = $review;
                } else {
                    $right_column[] = $review;
                }
            }

            // Render columns
            foreach (['left' => $left_column, 'right' => $right_column] as $col_class => $column) : ?>
                <div class="reviews-col col-sm-5 <?php echo $col_class === 'left' ? 'ms-auto' : 'me-auto'; ?>">
                    <?php foreach ($column as $index => $item) : ?>
                        <article class="masonry-review-card" aria-labelledby="review-demo-<?php echo $index; ?>-person">
                            <div class="review-content">
                                <blockquote>
                                    <p><?php echo esc_html($item['review']); ?></p>
                                </blockquote>
                            </div>
                            <footer class="review-meta-wrapper d-flex align-items-center">
                                <?php if (!empty($item['image_url'])) : ?>
                                    <div class="review-image-wrapper">
                                        <img src="<?php echo esc_url($item['image_url']); ?>" alt="<?php echo esc_attr($item['person']); ?>" />
                                    </div>
                                <?php endif; ?>
                                <div class="review-meta">
                                    <?php if ($item['person']) : ?>
                                        <p id="review-demo-<?php echo $index; ?>-person" class="review-meta person mb-0 fw-bold">
                                            <?php echo esc_html($item['person']); ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if ($item['position']) : ?>
                                        <p class="review-meta position mb-0">
                                            <?php echo esc_html($item['position']); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </footer>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="button-row row">
            <div class="button-col col-12 mx-auto text-center">
                <?php include(locate_template('blocks/partials/button-area.php')); ?>
            </div>
        </div>   
    </div>
</section>
