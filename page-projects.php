<?php
/*
Template Name: Проекты
*/
?>

<?php get_header();  ?>
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
<?php get_footer();  
