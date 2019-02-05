<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title><?php bloginfo('name'); echo ' | ';  bloginfo('description'); ?></title>
    
    <?php wp_head(); ?>


        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113874351-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-113874351-1');
    </script>

    
    
  </head>

  <body>
    <nav class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
              <?php the_custom_logo( $blog_id ); ?>
                      </div>
          <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-0 col-sm-offset-0" id="menu-div">
            <div class="wrap">
              <div class="wrap-block">

                <?php


                wp_nav_menu( array(
                  'theme_location'  => 'header.php',
                   'container_class' => 'menu-{menu-slug}-container',
                   'menu_class'      => 'header-ul',
                   'menu_id'         => '',
                   'echo'            => true,
                   'before'          => '',
                   'after'           => '',
                   'link_before'     => '',
                   'link_after'      => '',
                   'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                   'depth'           => 0,
                   'walker'          => '',
                 ) ); 
                 ?>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
            <div class="wrap">
              <div class="wrap-block">
                <a href="tel:+79106287744" class="header-phone"><?php the_field('main_number') ?></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
            <button type="submit" class="button-small popup-btn">
              Перезвоните мне
            </button>
          </div>
        </div>
      </div>
    </nav>