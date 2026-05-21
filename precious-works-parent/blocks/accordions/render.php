<?php $accordions = get_field('accordions');
include(locate_template('blocks/partials/global-block-variables.php')); ?>

<?php $has_content = have_rows('accordions') || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 

$accordion_width = 'col-sm-8';  ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    <div class="accordions-container container">
        <div class="accordions-row row">
            <div class="accordions-col <?php echo $accordion_width ?> mx-auto">
                <?php if(have_rows('accordions')) {
                    while(have_rows('accordions')) {
                        the_row(); 
                        $title = get_sub_field('title'); 
                        $content = get_sub_field('content', false, false); 
                        $accordion_id = 'accordion-'.get_row_index(); 
                        ?>
                        <?php include(locate_template('blocks/accordions/partials/single-accordion.php'));         
                    }
                } ?>
            </div>
        </div>
        <div class="button-row row">
            <div class="button-col <?php echo $accordion_width ?> mx-auto text-center">
                <?php include(locate_template('blocks/partials/button-area.php')); ?>
            </div>
        </div>   
    </div>
</section>

