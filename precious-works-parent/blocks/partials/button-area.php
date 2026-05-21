<?php if (!empty($section_button)) { ?>
    <div class="button-area-wrapper">
        <a 
            href="<?php echo esc_url($section_button['url']); ?>" 
            target="<?php echo esc_attr($section_button['target'] ?: '_self'); ?>" 
            class="pw-solid-button"
            <?php if (!empty($section_button_aria_label) && $section_button_aria_label !== $section_button['title']) { ?>
                aria-label="<?php echo esc_attr($section_button_aria_label); ?>"
            <?php } ?>
        >
            <?php echo esc_html($section_button['title']); ?>
        </a>
    </div>
<?php } ?>
