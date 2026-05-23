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

<div class="copyright-wrapper text-center">
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

<?php if (have_rows('footer_privacy_links', 'options')) { ?>
    <div class="footer-privacy-links-wrapper text-center">

        <?php 
        $count = 0;

        while (have_rows('footer_privacy_links', 'options')) {
            the_row();

            $footer_link = get_sub_field('footer_link');

            if ($footer_link) {

                if ($count > 0) {
                    echo ' <span class="separator">|</span> ';
                }

                $link_url    = $footer_link['url'];
                $link_title  = $footer_link['title'];
                $link_target = $footer_link['target'] ? $footer_link['target'] : '_blank';
                ?>

                <a 
                    class="color-inherit"
                    href="<?php echo esc_url($link_url); ?>"
                    target="<?php echo esc_attr($link_target); ?>"
                >
                    <?php echo esc_html($link_title); ?>
                </a>

                <?php 
                $count++;
            } 
        } 
        ?>

    </div>
<?php } ?>