<?php $stats = get_field('stats');
include(locate_template('blocks/partials/global-block-variables.php')); ?>

<?php $has_content = have_rows('stats') || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 
 ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?> 
    <div class="stats-container container">
        <div class="stats-row row row-cols-1 row-cols-lg-4" role="list">
                <?php if(have_rows('stats')) {
                    while(have_rows('stats')) {
                        the_row(); 
                        $number = get_sub_field('number'); 
                        $content = get_sub_field('content'); 
                        $stat_id = 'stat-'.get_row_index(); 
                        ?>
                        <div class="stats-col col mx-auto text-center u-focus-style" role="listitem">
                            <?php include(locate_template('blocks/stats/partials/single-stat.php'));  ?>
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

