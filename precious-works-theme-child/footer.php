<?php 
wp_footer(); 
$footer_text = get_field('footer_text', 'options');
$footer_images = get_field('footer_images', 'options');
$footer_privacy_links = get_field('footer_privacy_links', 'options');
?>

<footer class="site-footer background-tile-background" role="contentinfo">
    <div class="site-footer-content-container container">
        <div class="site-footer-content-row row align-items-center">
            <div class="footer-content-col col-sm-9 mx-auto text-center">
                <?php echo $footer_text ?>
            </div>
        </div>
        <div class="site-footer-logo-row row align-items-center">
            <div class="footer-logo-col col">
                <?php include locate_template('components/footer/footer-logo.php'); ?>
            </div>
        </div>
        <div class="site-copyright-logo-row row align-items-center">
            <div class="footer-copyright-col col">
                <?php include locate_template('components/footer/copyright.php'); ?>
            </div>
        </div>
    </div>
</footer>
