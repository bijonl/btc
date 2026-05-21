<?php $copyright_text = get_field('copyright_text', 'options'); 
// Replace tokens with actual values
$year = date('Y');
$symbol = '&copy;'; // Use HTML entity for proper rendering
$site_name = get_site_option('blogname'); 
$processed_copyright = str_replace(
    ['[year]', '[copyright]'],
    [$year, $symbol],
    $copyright_text
); ?>

<div class="copyright-wrapper">
    <?php if(!empty($copyright_text)) { ?>
        <p class="mb-0">
            <?php echo $processed_copyright; ?>
        </p>
    <?php } else { ?>
        <p class="mb-0">
            <?php echo 'Copyright' ?>
            <?php echo $symbol ?> 
            <?php echo $year ?> 
            <?php echo $site_name.'. ' ?> 
            <?php echo 'All rights reserved.' ?>
        </p>
    <?php } ?>
</div>