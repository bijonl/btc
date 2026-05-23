<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$media = get_field('media'); 
$content = get_field('content');
$column_order = get_field('column_order');

?>

<?php $has_content = !empty($media) || !empty($content) || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 

$image_col_width = 'col-lg-6'; 
$text_col_width = 'col-lg-6'; ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="two-col-container">
        <div class="two-col-row d-flex align-items-center">
            <div class="two-col-col text-col text-start w-50">
                <div class="media-text-container container">
                  <div class="media-text-row row">
                    <div class="media-text-col col-sm-6">
                       <?php echo pw_seo_heading(
                            $section_title, 
                            $section_title_tag, 
                            $section_title, 
                            [ 'id' => 'section-title-' . esc_attr($block['id']), 'class' => 'u-focus-style' ]
                        ); ?>
                        <?php echo $content ?>
                    </div>
                  </div>
                </div>
                
            </div>
            <div class="two-col-col media-col w-50 <?php echo $column_order ?>">
                <video class="w-100 h-auto" width="320" height="240" autoplay muted loop playsinline>
                    <source src="<?php echo esc_url($media['url']); ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>