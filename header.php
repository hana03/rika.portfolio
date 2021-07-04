<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <html <?php bloginfo('charset');?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('descriptiont');?>">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/konpa/devicon@master/devicon.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous">
    </script>
  <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
  <header>
    <div class="header-right">
      <div class="header-inner">

        <?php wp_nav_menu( array(
            'theme_location' => 'header-menu',
            'items_wrap'     => '<ul class="header-pc-nav">%3$s</ul>'
            ) );  ?>

      </div>
    </div><!-- header-right pc用-->

    <div class="header-sp">
      <div class="menu-btn-sp">
        <i class="fa fa-bars" ari-hidden="true"></i>
      </div>

      <?php wp_nav_menu( array(
                  'theme_location' => 'sp-menu',
                  'items_wrap'     => '<ul class="header-nav">%3$s</ul>'
                  ) );  ?>

    </div><!-- header-sp スマホ用-->

    <div class="top-title">
      <div class="container container-sp ">
        <div class="ttl-flex">
          <h2 class="top-title-name">Rika Oishi</h2>
          <p class="top-title-p">portfolio</p>
        </div>
      </div><!-- container -->
    </div><!-- top-title -->
  </header>