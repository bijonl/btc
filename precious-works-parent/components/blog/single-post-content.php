 <?php if(!empty($blog_intro)) { ?>
    <div class="post-excerpt">
        <p class="mb-0"><?php echo $blog_intro ?></p>
    </div>
<?php } ?>
<div class="post-content">
    <?php the_content() ?>
</div>