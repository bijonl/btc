<?php $reviews = get_field('reviews');
include(locate_template('blocks/partials/global-block-variables.php')); 


if ($reviews && count($reviews) > 0) {
    // Split reviews into two columns by alternating
    $left_column = [];
    $right_column = [];

    foreach ($reviews as $i => $review) {
        if ($i % 2 === 0) {
            $left_column[] = $review;
        } else {
            $right_column[] = $review;
        }
    }
}

$has_content = have_rows('reviews') || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    <div class="reviews-container container">
        <div class="reviews-row row">
            <div class="reviews-col col-md-6 col-lg-5 ms-auto">
                <?php foreach ($left_column as $review_id) { ?>
                    <?php include(locate_template('components/variables/review-variables.php')); ?>
                    <?php include(locate_template('blocks/reviews/partials/single-review.php')); ?>       
                <?php }; ?>
            </div>
            <div class="reviews-col col-md-6 col-lg-5 me-auto">
                  <?php foreach ($right_column as $review_id) { ?>
                    <?php include(locate_template('components/variables/review-variables.php')); ?>
                    <?php include(locate_template('blocks/reviews/partials/single-review.php')); ?>       
                <?php }; ?>
            </div>
        </div>
        <div class="button-row row">
            <div class="button-col col-12 mx-auto text-center">
                <?php include(locate_template('blocks/partials/button-area.php')); ?>
            </div>
        </div>   
    </div>
</section>

