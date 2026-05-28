<?php 
$display_title = !empty($display_title) ? $display_title : 'h2'; 
$display_title .= ' mb-0'; 
$icon_appearance = get_field('icon_appearance'); 
?>

<?php if ($has_title_area) { ?>
    <section 
        class="title-area-container container" 
        role="region" 
        aria-labelledby="section-title-<?php echo esc_attr($block['id']); ?>"
    >
        <div class="title-area-row row">
            <div class="title-area-col col-sm-11 mx-auto text-center">
                <div class="title-area-content-wrapper">
                    <div class="trigger-icon-globe-block <?php echo $icon_appearance ?>">
                        <svg class="icon-globe" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81 81" fill="none" stroke="#fdbd51" stroke-width="2" style="opacity: 1;"><g class="longitude"><path class="cls-1" d="M40.5,0.5 C24.2154,0.5 11.0153,18.41 11.0153,40.5 C11.0153,62.59 24.2154,80.5 40.5,80.5"></path><path class="cls-1" d="M40.8913,0.6956 C35.6697,2.0895 31.2437,18.6007 31.1948,40.6956 C31.1948,62.7905 35.6697,79.3996 40.8913,80.5"></path><path class="cls-1" d="M40.5.5c5.0963,0.5518,9.0872,17.91,9.0872,40s-3.9518,39.4482,-9.0872,40"></path><path class="cls-1" d="M40.5.5c16.1276,0,29.0562,17.91,29.0562,40s-12.8877,40-29.0562,40"></path><path class="cls-1" d="M40.5.5c22.09,0,40,17.91,40,40s-17.91,40-40,40"></path></g><path d="M80.5,40.5c0,22.09-17.91,40-40,40S.5,62.59.5,40.5,18.41.5,40.5.5s40,17.91,40,40ZM76.25,57.67c-6.77-5.78-20.56-9.83-35.75-9.83s-29.07,4.13-35.68,10.15M14.44,71.06c7.12-3.92,16.62-6.31,27.06-6.31,9.67,0,18.55,2.06,25.46,5.48M76.67,23.33c-6.61,6.03-20.29,9.8-35.87,9.8-15.19,0-29.53-4.35-36.3-10.13M66.6,10c-7.12,3.92-16.25,6.21-26.68,6.21-9.67,0-19-2.09-25.92-5.51"></path></svg>
                    </div>
                    
                    <?php if (!empty($section_title)) { ?>            
                        <div class="title-wrapper">
                            <?php 
                                // Heading gets an ID so region can be linked to it
                                echo pw_seo_heading(
                                    $section_title, 
                                    $section_title_tag, 
                                    $display_title. ' section-title-heading u-focus-style', 
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
