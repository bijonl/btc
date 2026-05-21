<div class="footer-logo-wrapper">
    <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Homepage">
        <?php 
            $alt = get_post_meta($footer_logo, '_wp_attachment_image_alt', true);
            if (empty($alt)) {
                $alt = 'Company logo'; // fallback alt text
            }
            echo wp_get_attachment_image($footer_logo, 'full', false, array(
                'class' => 'w-100 h-auto',
                'alt'   => esc_attr($alt),
            )); 
        ?>
    </a>
</div>