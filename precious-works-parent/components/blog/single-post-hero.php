 <div class="single-blog-hero-container container">
    <div class="single-blog-hero-row row">
        <div class="single-blog-hero-col col">
            <div class="post-meta-wrapper">
                <div class="title-wrapper">
                    <h1 class="mb-0"><?php echo $title ?></h1>
                </div>
                <div class="author-wrapper">
                    <p class="mb-0"><?php echo $author_display_name ?></p>
                </div>

                <div class="date-wrapper">
                     <p class="mb-0"><?php echo $publish_date ?></p>
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
            </div>
            <div class="blog-image-wrapper">
                <?php echo $featured_image ? 
                $featured_image : 
                wp_get_attachment_image($default_blog_image, 'full', false) ?>
            </div>
        </div>
    </div>
</div>