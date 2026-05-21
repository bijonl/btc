<?php /**
 * Template Name: Top Level Blog Page
*/  

$blog_args = array(
    'post_type' => 'post', 
    'posts_per_page' => -1, 
    'post_status' => 'publish', 
    'fields' => 'ids', 
); 

$blogs = new WP_Query($blog_args); 
$blog_title = get_the_title(); 
$blog_intro = get_field('blog_page_intro');
$blogs_per_row = 2;  



?>

<?php echo get_header(); ?>
    <section class="blog-archive-hero-section background-primary" id="blog-archive-hero">
        <div class="blog-archive-container container">
          <div class="blog-archive-row row align-items-center">
            <div class="blog-archive-col col">
                <h1 class="mb-0"><?php echo $blog_title ?></h1>
                <p class="mb-0"><?php echo $blog_intro ?></p>
            </div>
          </div>
        </div>
    </section>

    <section class="blog-archive-content-section" id="blog-content-section">
        <div class="blog-posts-container container">
          <div class="blog-posts-row row row-cols-<?php echo $blogs_per_row ?>">
           <?php if($blogs->have_posts()) {
                    while($blogs->have_posts()) { 
                        $blogs->the_post(); 
                        $id = get_the_id(); 
                        include locate_template('components/variables/post-variables.php'); ?>
                        <div class="blog-posts-col col">
                            <?php include locate_template('components/blog/archive-blog-tile.php'); ?>
                        </div>
                <?php wp_reset_postdata(); 

                    }
                    wp_reset_postdata(); 
                } ?>
          </div>
        </div>
    </section>



<?php echo get_footer() ?>
