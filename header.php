<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700|Pathway+Gothic+One" rel="stylesheet">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
    <script>
    /* Add to <head> */
    // Remove no-js and add 'js' to the HTML
    document.documentElement.className = document.documentElement.className.replace('no-js', ' ');
    document.documentElement.className += ' js ';
  </script>
</head>


<div class="js">
<body <?php body_class(); ?>>
  <div id="preloader"></div>
  <a href="#main" class="hidden">Skip to main content</a>

  <header>
    <nav class="container">
      <h1 class="site-title">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </nav>
  </header><!--/.header-->

