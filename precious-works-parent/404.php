<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); 
?>

<section class="page-404 container text-center py-5">
    <h1 class="display-1 mb-3">404</h1>
    <h2 class="mb-4">Oops! Page not found.</h2>
    <p class="mb-4">Sorry, the page you are looking for does not exist. It might have been removed or you may have typed the URL incorrectly.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
        Go Back Home
    </a>
</section>

<?php get_footer(); ?>
