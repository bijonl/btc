<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$image = get_field('image'); 
$content = get_field('content');
$column_order = get_field('column_order');

?>

<?php $has_content = !empty($image) || !empty($content) || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 

$image_col_width = 'col-lg-6'; 
$text_col_width = 'col-lg-6'; ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?>

    <div class="two-col-container container">
        <div class="two-col-row row align-items-center">
            <div class="two-col-col image-col <?php echo $image_col_width ?> <?php echo $column_order ?>">
                <?php echo wp_get_attachment_image($image, 'full', false, array('class' => 'w-100 h-auto')) ?>
            </div>
            <div class="two-col-col text-col <?php echo $text_col_width ?>">
                <?php echo $content ?>
            </div>
        </div>
    </div>
  
    <div class="button-row row">
        <div class="button-col col-12 mx-auto text-center">
            <?php include(locate_template('blocks/partials/button-area.php')); ?>
        </div>
    </div>   
</section>