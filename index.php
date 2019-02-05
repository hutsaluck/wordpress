    <?php get_header(); ?>

    <main class="main" style="background-image: url(<?php the_field('main_image') ?>)">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-md-offset-1">
            <h1><?php the_field('main_title')?> </h1>
            <h2><?php the_field('main_subtitle')?></h2>
            <div class="main-feature">
              <img src="<?php bloginfo(template_url); ?>/assets/img/main/icon-1@1x.png" alt="piggy">
              <p class="main-feature-p"><?php the_field('features_1') ?> </p>
            </div>
            <div class="main-feature">
              <img src="<?php bloginfo(template_url); ?>/assets/img/main/icon-2@1x.png" alt="clock">
              <p class="main-feature-p"><?php the_field('features_2') ?></p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="main-cta-block col-md-12 col-sm-12 col-xs-12">

            <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <b class="main-cta"><?php the_field('name_sale_1') ?></b>
              <b class="main-cta-sub"><?php the_field('sale_1') ?></b>

              <form method="post" name="first-form" action="mailer/smart.php" class="form">

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_name" required type="text" placeholder="Ваше имя">
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="phone" id="phone-1" required type="text" placeholder="Ваш телефон">
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <button id="first-btn" type="submit" class="popup-thanks-btn">Оставить заявку</button>
                </div>

                <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                  <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации.<br>* при заказе строительства дома</p>
                </div>

              </form>

            </div>

          </div>
        </div>
      </div>
    </main>

    <section class="features">
      <div class="container">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="media">
            <div class="media-left">
              <img class="media-object" src="<?php bloginfo(template_url); ?>/assets/img/features/1.png" alt="Неизменная цена">
            </div>
            <div class="media-body">
              <h2 class="media-heading"><?php the_field('name_quality_1') ?></h2>
              <p><?php the_field('quality_1') ?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="media">
            <div class="media-left">
              <img class="media-object" src="<?php bloginfo(template_url); ?>/assets/img/features/2.png" alt="Неизменная цена">
            </div>
            <div class="media-body">
              <h2 class="media-heading"><?php the_field('name_quality_2') ?></h2>
              <p><?php the_field('quality_2') ?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="media">
            <div class="media-left">
              <img class="media-object" src="<?php bloginfo(template_url); ?>/assets/img/features/3.png" alt="Неизменная цена">
            </div>
            <div class="media-body">
              <h2 class="media-heading"><?php the_field('name_quality_3') ?></h2>
              <p> <?php the_field('quality_3') ?> </p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="shop" id="shop">
      <div class="container">
        <h2>Популярные проекты</h2>
        <ul class="shop-ul">
          <li><a class="active-color" href="#shop" id="a-1">Дома из бруса</a></li>
          <li><a href="#shop" id="a-2">Сруб</a></li>
          <li><a href="#shop" id="a-3">Каркасные дома</a></li>
          <li><a href="#shop" id="a-4">Кирпичные дома</a></li>
          <li><a href="#shop" id="a-5">Дома из блоков</a></li>
        </ul>
        
        
        <!-- Дома из блоков -->
           <div class="shop-cards" id="shop-cards-5">
            <?php
        // параметры по умолчанию
        $args = array(
        	'category_name'    => 'concrete',
        	'numberposts' => 0,
        	'order'       => 'ASC',
        	'post_type'   => 'post',
        	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        );

        $posts = get_posts( $args );
        
        foreach($posts as $post){ setup_postdata($post);
           ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
                <?php
              if ( has_post_thumbnail() ) {
                	the_post_thumbnail();
               } else{
                    echo "<img src='".get_template_directory_uri()."/assets/img/not-image.jpg' alt=''>";   
               } 
               ?>
              <h3><?php the_title(); ?></h3>
              <p>Площадь <?php the_field('area'); ?> м<sup>2</sup></p>
              <span><?php the_field('old_price'); ?></span>
              <b><?php the_field('new_price'); ?> руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
        
        
        <?php
        }
        
        wp_reset_postdata(); // сброс
        ?>
        </div>
        

        <!-- Кирпичные дома -->
        <div class="shop-cards" id="shop-cards-4">
            <?php
        // параметры по умолчанию
        $args = array(
        	'category_name'    => 'bricks',
        	'numberposts' => 0,
        	'order'       => 'ASC',
        	'post_type'   => 'post',
        	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        );

        $posts = get_posts( $args );
        
        foreach($posts as $post){ setup_postdata($post);
           ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
                <?php
              if ( has_post_thumbnail() ) {
                	the_post_thumbnail();
               } else{
                    echo "<img src='".get_template_directory_uri()."/assets/img/not-image.jpg' alt=''>";   
               }
               ?>
              <h3><?php the_title(); ?></h3>
              <p>Площадь <?php the_field('area'); ?> м<sup>2</sup></p>
              <span><?php the_field('old_price'); ?></span>
              <b><?php the_field('new_price'); ?> руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
        
        
        <?php
        }
        
        wp_reset_postdata(); // сброс
        ?>
        </div>

        <!-- Каркасные дома -->
        <div class="shop-cards" id="shop-cards-3">
            <?php
        // параметры по умолчанию
        $args = array(
        	'category_name'    => 'frame',
        	'numberposts' => 0,
        	'order'       => 'ASC',
        	'post_type'   => 'post',
        	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        );

        $posts = get_posts( $args );
        
        foreach($posts as $post){ setup_postdata($post);
           ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
                <?php
              if ( has_post_thumbnail() ) {
                	the_post_thumbnail();
               } else{
                    echo "<img src='".get_template_directory_uri()."/assets/img/not-image.jpg' alt=''>";   
               }
               ?>
              <h3><?php the_title(); ?></h3>
              <p>Площадь <?php the_field('area'); ?> м<sup>2</sup></p>
              <span><?php the_field('old_price'); ?></span>
              <b><?php the_field('new_price'); ?> руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
        
        
        <?php
        }
        
        wp_reset_postdata(); // сброс
        ?>
        </div>

        <!-- Сруб -->
        <div class="shop-cards" id="shop-cards-2">
            <?php
        // параметры по умолчанию
        $args = array(
        	'category_name'    => 'blockhouse',
        	'numberposts' => 0,
        	'order'       => 'ASC',
        	'post_type'   => 'post',
        	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        );

        $posts = get_posts( $args );
        
        foreach($posts as $post){ setup_postdata($post);
           ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
                <?php
              if ( has_post_thumbnail() ) {
                	the_post_thumbnail();
               } else{
                    echo "<img src='".get_template_directory_uri()."/assets/img/not-image.jpg' alt=''>";   
               }
               ?>
              <h3><?php the_title(); ?></h3>
              <p>Площадь <?php the_field('area'); ?> м<sup>2</sup></p>
              <span><?php the_field('old_price'); ?></span>
              <b><?php the_field('new_price'); ?> руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
        
        
        <?php
        }
        
        wp_reset_postdata(); // сброс
        ?>
        </div>

        <!-- Дома из бруса -->
        <div class="shop-cards active" id="shop-cards-1">
            <?php
        // параметры по умолчанию
        $args = array(
        	'category_name'    => 'lumber',
        	'numberposts' => 0,
        	'order'       => 'ASC',
        	'post_type'   => 'post',
        	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        );

        $posts = get_posts( $args );
        
        foreach($posts as $post){ setup_postdata($post);
           ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
                <?php
              if ( has_post_thumbnail() ) {
                	the_post_thumbnail();
               } else{
                    echo "<img src='".get_template_directory_uri()."/assets/img/not-image.jpg' alt=''>";    
               }
               ?>
              <h3><?php the_title(); ?></h3>
              <p>Площадь <?php the_field('area'); ?> м<sup>2</sup></p>
              <span><?php the_field('old_price'); ?></span>
              <b><?php the_field('new_price'); ?> руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>
        
        
        <?php
        }
        
        wp_reset_postdata(); // сброс
        ?>
        </div>
  
      </div>
    </section>

    <section class="example" id="example">
      <div class="container">
        <h2>Примеры наших работ</h2>

        <div class="slider_ex">
            <img src="<?php bloginfo(template_url); ?>/assets/img/example/1.jpg" alt="">
            <img src="<?php bloginfo(template_url); ?>/assets/img/example/2.jpg" alt="">
            <img src="<?php bloginfo(template_url); ?>/assets/img/example/3.jpg" alt="">
            <img src="<?php bloginfo(template_url); ?>/assets/img/example/2.jpg" alt="">
            <img src="<?php bloginfo(template_url); ?>/assets/img/example/1.jpg" alt="">
            <img src="<?php bloginfo(template_url); ?>/assets/img/example/3.jpg" alt="">
        </div>

      </div>
    </section>

    <section class="houses">
      <div class="house house-1">
        <div class="container">
          <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
            <h2>Каркасные дома</h2>
            <ul>
              <li>Низкая стоимость строительства.</li>
              <li>Низкие затраты на эксплуатацию.</li>
              <li>Можно строить в любое время года.</li>
              <li>Легкость и доступность внутренней отделки.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="house house-2">
        <div class="container">
          <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
            <h2>Кирпичные дома</h2>
            <ul>
              <li>Высокий уровень звукоизоляции.</li>
              <li>Повышенная теплоизоляция.</li>
              <li>Долговечность и прочность.</li>
              <li>Высокая противопожарная защита.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="house house-3">
        <div class="container">
          <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
            <h2>Блочные дома</h2>
            <ul>
              <li>Низкая стоимость.</li>
              <li>Безопасен для здоровья.</li>
              <li>Сохраняет тепло.</li>
              <li>Высокая противопожарная защита.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="upsell">
      <div class="container">
        <div class="row">
          <h2>Кровельные работы</h2>
          <p class="upsell-desc">Наша компания выполняет весь необходимый комплекс по монтажу кровли<br>из любых материалов:</p>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="upsell-block">
              <img src="<?php bloginfo(template_url); ?>/assets/img/upsell/1.png" alt="Металлочерепица">
              <b>Металлочерепица</b>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="upsell-block">
              <img src="<?php bloginfo(template_url); ?>/assets/img/upsell/2.png" alt="Мягкая гибкая черепица">
              <b>Мягкая гибкая черепица</b>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="upsell-block">
              <img src="<?php bloginfo(template_url); ?>/assets/img/upsell/3.png" alt="Профнастил">
              <b>Профнастил</b>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="upsell-block">
              <img src="<?php bloginfo(template_url); ?>/assets/img/upsell/4.png" alt="Шифер">
              <b>Шифер</b>
            </div>
          </div>
        </div>
        <p class="upsell-more">и много других материалов.</p>
        <div class="row">
          <div class="upsell-cta-block main-cta-block col-md-12 col-sm-12 col-xs-12">

            <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <b class="main-cta"><?php the_field('name_sale_2') ?></b>
              <b class="main-cta-sub"><?php the_field('sale_2') ?></b>

              <form method="post" name="second-form" action="mailer/smart.php" class="form">

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_name" required type="text" placeholder="Ваше имя">
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="user_phone" id="phone-2" required type="text" placeholder="Ваш телефон">
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <button id="second-btn" type="submit" class="popup-thanks-btn">Оставить заявку</button>
                </div>

                <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                  <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации.</p>
                </div>

              </form>

            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="review" id="review">
      <div class="container">
        <h2>Клиенты о нас</h2>
        <div class="row">
            <div class="slider_ex">
                
              <?php
        // параметры по умолчанию
        $args = array(
          'category_name'    => 'reviews',
          'numberposts' => 0,
          'order'       => 'ASC',
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        );

        $posts = get_posts( $args );
        
        foreach($posts as $post){ setup_postdata($post);
           ?>
           <div class="review-block">
           
           <div class="media review-avatar">
           
                <div class="media-left">
                    <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                         } else{
                              echo "<img class='media-object' src='".get_template_directory_uri()."/assets/img/not-image.jpg' alt=''>";   
                         } 
                     ?>
                    </div>
                
                <div class="media-body">
                  <p class="review-avatar-name"><?php the_field('clay'); ?></p>
                </div>
                </div>
              <div class="review-block-text">
                <h3><?php the_field('topic_view'); ?></h3> 
                <p><?php the_field('review'); ?></p>
              </div>
              </div>
        
        
        <?php
        }
        
        wp_reset_postdata(); // сброс
        ?>
        
        
          </div>
        </div>
      </div>
    </section>

    <div class="contacts" id="contacts">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="contacts-block">
              <img src="<?php bloginfo(template_url); ?>/assets/img/contacts/1.png" alt="">
              <a class="contacts-phone" href="tel:+79106287744"><?php the_field('other_number') ?></a>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="contacts-block">
              <img src="<?php bloginfo(template_url); ?>/assets/img/contacts/2.png" alt="">
              <p><?php the_field('address') ?></p>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <div class="contacts-block">
              <img src="<?php bloginfo(template_url); ?>/assets/img/contacts/3.png" alt="">
              <a href="mailto:arkada62@yandex.ru"><?php the_field('main_email') ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="map">
      <?php echo do_shortcode('[gmap-embed id="228"]') ?>
    </div>

    <?php get_footer(); ?>
