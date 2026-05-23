<div class="single-stat-wrapper">
    <?php if ($icon) { ?>
        <div class="stat-icon-wrapper">
            <?php echo wp_get_attachment_image($icon['id'], 'full', false, array('class' => 'mw-100 h-auto')); ?>
        </div>
    <?php } ?>

    <?php if ($number) { ?>
        <div class="stat-number-wrapper">
            <h3 class="color-secondary number h2 mb-0"><?php echo esc_html($number); ?></h3>
        </div>
    <?php } ?>

    <?php if ($unit) { ?>
        <div class="stat-unit-wrapper">
            <p class="unit h2 mb-0"><?php echo esc_html($unit); ?></p>
        </div>
    <?php } ?>

    <?php if ($content) { ?>
        <div class="stat-content-wrapper">
            <p class="mb-0"><?php echo wp_kses_post($content); ?></p>
        </div>
    <?php } ?>
</div>