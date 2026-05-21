<?php 
$display_title = !empty($display_title) ? $display_title : 'h2'; 
$display_title .= ' mb-0'; 
?>

<?php if ($has_title_area) { ?>
    <section 
        class="title-area-container container" 
        role="region" 
        aria-labelledby="section-title-<?php echo esc_attr($block['id']); ?>"
    >
        <div class="title-area-row row">
            <div class="title-area-col col text-center">
                <div class="title-area-content-wrapper">
                    
                    <?php if (!empty($section_title)) { ?>
                        <div class="title-wrapper">
                            <?php 
                                // Heading gets an ID so region can be linked to it
                                echo pw_seo_heading(
                                    $section_title, 
                                    $section_title_tag, 
                                    $display_title, 
                                    [ 'id' => 'section-title-' . esc_attr($block['id']), 'class' => 'u-focus-style' ]
                                ); 
                            ?>
                        </div>
                    <?php } ?>

                    <?php if (!empty($section_subtitle)) { ?>
                        <div class="subtitle-wrapper wysiwyg">
                            <?php echo $section_subtitle; ?>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </section>
<?php } ?>
