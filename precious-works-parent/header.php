<!DOCTYPE html>
  <?php wp_head(); ?>
  <html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage">
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to main content', '' ); ?></a>
<?php include(locate_template('components/header-navigation/header-navigation.php')); ?>

