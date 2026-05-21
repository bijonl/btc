    <div class="single-post-tile">
        <a href="<?php echo $permalink; ?>" class="single-post-link" aria-label="Read more about <?php echo esc_attr($title); ?>">
            <div class="single-post-image-wrapper">
                <?php echo $featured_image ? 
                $featured_image : 
                wp_get_attachment_image($default_blog_image, 'full', false, array('class' => 'w-100 h-auto')) ?>
            </div>
        </a>
        <div class="post-meta-wrapper">
            <div class="single-post-title-wrapper">
                <a href="<?php echo $permalink; ?>" class="single-post-link color-inherit" aria-label="Read more about <?php echo esc_attr($title); ?>">
                    <h4 class="mb-0"><?php echo $title ?></h4>
                </a>
            </div>
            <?php if (!empty($terms)) { ?>
                <ul class="term-wrapper">
                    <?php foreach ($terms as $term) {
                        if ($term->term_id === 1) continue; ?>
                        <li class="single-term">
                            <?php echo esc_html($term->name); ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <div class="single-post-date-wrapper">
                <p><?php echo $publish_date ?></p>
            </div>
        </div>
    </div>
