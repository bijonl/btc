<div class="footer-logo-wrapper d-flex  justify-content-center">

    <?php if ($footer_images) { ?>

        <?php foreach ($footer_images as $image) {

            $image_id = is_array($image) ? $image['ID'] : $image;

            $image_link = get_field('image_link', $image_id);

            $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

            if (empty($alt)) {
                $alt = 'Company logo';
            }
            ?>

            <?php if ($image_link) { ?>
                <a href="<?php echo $image_link['url'] ?>" target="_blank" aria-label="Homepage">
            <?php } ?>

                <?php
                echo wp_get_attachment_image($image_id, 'full', false, array(
                    'class' => 'w-auto',
                    'alt'   => esc_attr($alt),
                ));
                ?>

            <?php if ($image_link) { ?>
                </a>
            <?php } ?>

        <?php } ?>

    <?php } ?>
</div>