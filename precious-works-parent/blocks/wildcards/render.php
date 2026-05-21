<?php $wildcards = get_field('wildcards');
$cards_per_row = get_field('cards_per_row') ? get_field('cards_per_row') : 4;
include(locate_template('blocks/partials/global-block-variables.php')); ?>

<?php $has_content = have_rows('wildcards') || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 
 ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    <div class="wildcards-container container">
        <div class="wildcards-row row row-cols-1 row-cols-lg-<?php echo $cards_per_row ?>" role="list">
                <?php if(have_rows('wildcards')) {
                    while(have_rows('wildcards')) {
                        the_row(); 
                        $title = get_sub_field('title'); 
                        $image = get_sub_field('image'); 
                        $icon = get_sub_field('icon'); 
                        $button = get_sub_field('button'); 
                        $image_type = get_sub_field('image_type'); 
                        $content = get_sub_field('content'); 
                        $wildcard_id = 'wildcard-'.get_row_index(); 
                        ?>
                        <div class="wildcards-col col mx-auto text-center u-focus-style" role="listitem">
                            <?php include(locate_template('blocks/wildcards/partials/single-wildcard.php'));  ?>
                        </div>     
                <?php   
                    }
                } ?>
            </div>
        </div>
        <div class="button-row row">
            <div class="button-col mx-auto text-center">
                <?php include(locate_template('blocks/partials/button-area.php')); ?>
            </div>
        </div>   
    </div>
</section>

