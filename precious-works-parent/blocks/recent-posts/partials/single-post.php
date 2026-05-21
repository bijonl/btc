<?php include(locate_template('components/variables/post-variables.php')); ?>

<div class="single-post-tile">
    <div class="single-post-image-wrapper">
        <?php echo $featured_image ? $featured_image : wp_get_attachment_image($default_blog_image, 'full', false, array('class' => 'w-100 h-auto'))?>
    </div>
    <div class="single-post-title-wrapper">
        <h4 class="mb-0"><?php echo $title ?></h4>
    </div>
    <div class="single-post-date-wrapper">
        <p class="mb-0"><?php echo $publish_date ?></p>
    </div>
</div>