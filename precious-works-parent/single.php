<?php echo get_header(); ?>
<?php $id = get_the_id(); 
include locate_template('components/variables/post-variables.php'); ?>



<section class="single-blog-post-section" id="blog-post-content">
    <?php include locate_template('components/blog/single-post-hero.php'); ?>
    <div class="single-blog-post-container container">
      <div class="single-blog-post-row row">
        <div class="single-blog-post-col col-sm-10 mx-auto">
            <?php include locate_template('components/blog/single-post-content.php'); ?>
            <?php include locate_template('components/blog/single-post-footer.php'); ?>
        </div>
      </div>
    </div>
</section>




<?php echo get_footer(); ?>