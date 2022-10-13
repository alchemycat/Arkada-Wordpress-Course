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

  <title><?php bloginfo('name');
          echo (' | ');
          bloginfo('description'); ?></title>
  <?php wp_head(); ?>

</head>

<body>
  <nav class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
          <img src="<?php bloginfo("template_url") ?>/assets/img/main/logo.png" alt="Arkada. Строительство и монтаж">
        </div>
        <div class="col-lg-5 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-0 col-sm-offset-0" id="menu-div">
          <div class="wrap">
            <div class="wrap-block">
              <ul class="header-ul" id="menu">
                <li><a href="#shop">Проекты</a></li>
                <li><a href="#example">Примеры работ</a></li>
                <li><a href="#review">Отзывы</a></li>
                <li><a href="#contacts">Контакты</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2">
          <div class="wrap">
            <div class="wrap-block">
              <a href="tel:<?php $phone = get_field('phone');
                $phone = str_replace("-", "", $phone);
                echo $phone;
              ?>" class="header-phone"><?php the_field('phone');?></a>
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

  <main class="main" style="background-image: url(<?php the_field('main_bg') ?>);">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-1">
          <h1><?php the_field('main_title'); ?></h1>
          <h2><?php the_field('main_subtitle'); ?></h2>
          <div class="main-feature">
            <img src="<?php bloginfo("template_url") ?>/assets/img/main/icon-1@1x.png" alt="piggy">
            <p class="main-feature-p"><?php the_field('feature_1'); ?></p>
          </div>
          <div class="main-feature">
            <img src="<?php bloginfo("template_url") ?>/assets/img/main/icon-2@1x.png" alt="clock">
            <p class="main-feature-p"><?php the_field('feature_2'); ?></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="main-cta-block col-md-12 col-sm-12 col-xs-12">

          <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
            <b class="main-cta"><?php the_field('form_title'); ?></b>
            <b class="main-cta-sub"><?php the_field('form_subtitle'); ?></b>


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
                <p><?php the_field('form_desc'); ?></p>
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
            <img class="media-object" src="<?php bloginfo("template_url") ?>/assets/img/features/1.png" alt="<?php the_field('feature_title_3') ?>">
          </div>
          <div class="media-body">
            <h2 class="media-heading"><?php the_field('feature_title_3'); ?></h2>
            <p><?php the_field('feature_3'); ?></p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="media">
          <div class="media-left">
            <img class="media-object" src="<?php bloginfo("template_url") ?>/assets/img/features/2.png" alt="<?php the_field('feature_title_4'); ?>">
          </div>
          <div class="media-body">
            <h2 class="media-heading"><?php the_field('feature_title_4'); ?></h2>
            <p><?php the_field('feature_4'); ?></p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="media">
          <div class="media-left">
            <img class="media-object" src="<?php bloginfo("template_url") ?>/assets/img/features/3.png" alt="<?php the_field('feature_title_5') ?>">
          </div>
          <div class="media-body">
            <h2 class="media-heading"><?php the_field('feature_title_5'); ?></h2>
            <p><?php the_field('feature_5'); ?></p>
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

        $args = array(
          'category_name' => 'blockhouse',
          'numberposts' => 0,
          'order'       => 'DESC', // подавление работы фильтров изменения SQL запроса
          'post_type' => 'post',
          'suppress_filter' => true,
        );

        $posts = get_posts($args);

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail();
              } else {
                echo "<img src='" . get_template_directory_uri() . "/assets/img/main/empty.jpg'  alt='empty'>";
              } ?>
              <h3><?php the_title(); ?></h3>
              <p>Площадь <?php the_field('area'); ?> м<sup>2</sup></p>
              <span><?php the_field('old_price'); ?></span>
              <b><?php the_field('new_price'); ?> руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>

        <?php
        }
        wp_reset_postdata();
        ?>
      </div>


      <!-- Кирпичные дома -->
      <div class="shop-cards" id="shop-cards-4">
        <?php

        $args = array(
          'category_name' => 'brickhouse',
          'numberposts' => 0,
          'order'       => 'DESC', // подавление работы фильтров изменения SQL запроса
          'post_type' => 'post',
          'suppress_filter' => true,
        );

        $posts = get_posts($args);

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail();
              } else {
                echo "<img src='" . get_template_directory_uri() . "/assets/img/main/empty.jpg'  alt='empty'>";
              } ?>
              <h3><?php the_title(); ?></h3>
              <p>Площадь <?php the_field('area'); ?> м<sup>2</sup></p>
              <span><?php the_field('old_price'); ?></span>
              <b><?php the_field('new_price'); ?> руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>

        <?php
        }
        wp_reset_postdata();
        ?>
      </div>

      <!-- Каркасные дома -->
      <div class="shop-cards" id="shop-cards-3">
        <?php

        $args = array(
          'category_name' => 'framehouse',
          'numberposts' => 0,
          'order'       => 'DESC', // подавление работы фильтров изменения SQL запроса
          'post_type' => 'post',
          'suppress_filter' => true,
        );

        $posts = get_posts($args);

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail();
              } else {
                echo "<img src='" . get_template_directory_uri() . "/assets/img/main/empty.jpg'  alt='empty'>";
              } ?>
              <h3><?php the_title(); ?></h3>
              <p>Площадь <?php the_field('area'); ?> м<sup>2</sup></p>
              <span><?php the_field('old_price'); ?></span>
              <b><?php the_field('new_price'); ?> руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>

        <?php
        }
        wp_reset_postdata();
        ?>
      </div>

      <!-- Сруб -->
      <div class="shop-cards" id="shop-cards-2">
        <?php

        $args = array(
          'category_name' => 'logcabin',
          'numberposts' => 0,
          'order'       => 'DESC', // подавление работы фильтров изменения SQL запроса
          'post_type' => 'post',
          'suppress_filter' => true,
        );

        $posts = get_posts($args);

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail();
              } else {
                echo "<img src='" . get_template_directory_uri() . "/assets/img/main/empty.jpg'  alt='empty'>";
              } ?>
              <h3><?php the_title(); ?></h3>
              <p>Площадь <?php the_field('area'); ?> м<sup>2</sup></p>
              <span><?php the_field('old_price'); ?></span>
              <b><?php the_field('new_price'); ?> руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>

        <?php
        }
        wp_reset_postdata();
        ?>
      </div>

      <!-- Дома из бруса -->
      <div class="shop-cards active" id="shop-cards-1">
        <?php

        $args = array(
          'category_name' => 'loghouse',
          'numberposts' => 0,
          'order'       => 'DESC', // подавление работы фильтров изменения SQL запроса
          'post_type' => 'post',
          'suppress_filter' => true,
        );

        $posts = get_posts($args);

        foreach ($posts as $post) {
          setup_postdata($post);
        ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-card">
              <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail();
              } else {
                echo "<img src='" . get_template_directory_uri() . "/assets/img/main/empty.jpg'  alt='empty'>";
              } ?>
              <h3><?php the_title(); ?></h3>
              <p>Площадь <?php the_field('area'); ?> м<sup>2</sup></p>
              <span><?php the_field('old_price'); ?></span>
              <b><?php the_field('new_price'); ?> руб.</b>
              <button type="submit" class="popup-btn button-small">Оставить заявку</button>
            </div>
          </div>

        <?php
        }
        wp_reset_postdata();
        ?>
      </div>

    </div>
  </section>

  <section class="example" id="example">
    <div class="container">
      <h2>Примеры наших работ</h2>

      <div class="slider_ex">
        <img src="<?php the_field("examples_img_1");?>" alt="">
        <img src="<?php the_field("examples_img_2");?>" alt="">
        <img src="<?php the_field("examples_img_3");?>" alt="">
        <img src="<?php the_field("examples_img_4");?>" alt="">
      </div>

    </div>
  </section>

  <section class="houses">
    <?php 
      $args = array(
      'category_name' => 'houses',
      'numberposts' => 0,
      'order'       => 'DESC', // подавление работы фильтров изменения SQL запроса
      'post_type' => 'post',
      'suppress_filter' => true,
      );

      $posts = get_posts($args);
      $counter = 0;
      foreach ($posts as $post) {
        $counter += 1;
        setup_postdata($post);
    ?>
    <div class="house house-<?php echo $counter ?>"  style="background-image: url(<?php the_field('houses_background') ?>);">
      <div class="container">
        <div class="col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
          <h2><?php the_title(); ?></h2>
          <ul>
            <li><?php the_field('houses_benefit_1');?></li>
            <li><?php the_field('houses_benefit_2');?></li>
            <li><?php the_field('houses_benefit_3');?></li>
            <li><?php the_field('houses_benefit_4');?></li>
            </ul>
        </div>
      </div>
    </div>
    <?php 
      }

      wp_reset_postdata();
    ?>
  </section>

  <section class="upsell">
    <div class="container">
      <div class="row">
        <h2>Кровельные работы</h2>
        <p class="upsell-desc">Наша компания выполняет весь необходимый комплекс по монтажу кровли<br>из любых материалов:</p>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="upsell-block">
            <img src="<?php bloginfo("template_url") ?>/assets/img/upsell/1.png" alt="Металлочерепица">
            <b>Металлочерепица</b>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="upsell-block">
            <img src="<?php bloginfo("template_url") ?>/assets/img/upsell/2.png" alt="Мягкая гибкая черепица">
            <b>Мягкая гибкая черепица</b>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="upsell-block">
            <img src="<?php bloginfo("template_url") ?>/assets/img/upsell/3.png" alt="Профнастил">
            <b>Профнастил</b>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="upsell-block">
            <img src="<?php bloginfo("template_url") ?>/assets/img/upsell/4.png" alt="Шифер">
            <b>Шифер</b>
          </div>
        </div>
      </div>
      <p class="upsell-more">и много других материалов.</p>
      <div class="row">
        <div class="upsell-cta-block main-cta-block col-md-12 col-sm-12 col-xs-12">

          <div class="col-md-7 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
          <b class="main-cta"><?php the_field('form_title_2') ?></b>
            <b class="main-cta-sub"><?php the_field('form_subtitle_2') ?></b>

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
              $args = array(
                'category_name' => 'feedbacks',
                'numberposts' => 0,
                'order'       => 'DESC', // подавление работы фильтров изменения SQL запроса
                'post_type' => 'post',
                'suppress_filter' => true,
              );
      
              $posts = get_posts($args);

              foreach($posts as $post) {
                setup_postdata($post);
              ?>

              <div class="review-block">
              <div class="media review-avatar">
                <div class="media-left">
                 <?php 
                  if(has_post_thumbnail()) {
                    the_post_thumbnail();
                  } else {
                    echo "<img src='" . get_template_directory_uri() . "/assets/img/review/user.png' alt='user' width='40' height='40'>";
                  }
                  ?>
                </div>
                <div class="media-body">
                  <p class="review-avatar-name"><?php the_field('feedback_name');?></p>
                </div>
              </div>
              <div class="review-block-text">
                <h3><?php the_field('feedback_title');?></h3>
                <p><?php the_field('feedback_text');?></p>
              </div>
            </div>
          <?php 
            }; 
            wp_reset_postdata( );
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
            <img src="<?php bloginfo("template_url") ?>/assets/img/contacts/1.png" alt="">
            <a href="tel:<?php $phone = get_field('phone');
                $phone = str_replace("-", "", $phone);
                echo $phone;
              ?>" class="contacts-phone"><?php the_field('phone');?></a>
          </div>
        </div>
        <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
          <div class="contacts-block">
            <img src="<?php bloginfo("template_url") ?>/assets/img/contacts/2.png" alt="">
            <p><?php the_field('address');?></p>
          </div>
        </div>
        <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0">
          <div class="contacts-block">
            <img src="<?php bloginfo("template_url") ?>/assets/img/contacts/3.png" alt="">
            <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d577.3068912428816!2d39.739776823609!3d54.63521087449768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4149e3ca7d798a8b%3A0xe7cd4dc08fecf2ef!2z0YPQuy4g0KHQvtC70L3QtdGH0L3QsNGPLCAxMiwg0KDRj9C30LDQvdGMLCDQoNGP0LfQsNC90YHQutCw0Y8g0L7QsdC7LiwgMzkwMDAw!5e0!3m2!1sru!2sru!4v1511309069060" allowfullscreen></iframe>
  </div>

  <section class="question" id="question">
    <div class="container">
      <h2>Остались вопросы?</h2>
      <a id="manager-call" href="#question">Задайте их менеджеру</a>
    </div>
  </section>

  <!-- Popup -->
  <div class="popup popup-call">
    <!-- Само (белое) модальное окно -->
    <div class="popup-dialog">
      <!-- Содежримое -->
      <div class="popup-content">
        <button type="submit" class="popup-close">&times;</button>
        <h4 class="popup-header">
          Заинтересовало?
        </h4>
        <p>Оставьте свои контактные данные <br>для связи</p>
        <form method="post" name="third-form" action="mailer/smart.php" class="form">
          <input name="user_name" required type="text" placeholder="Ваше имя">
          <input name="user_phone" id="phone-3" required type="text" placeholder="Ваш телефон">
          <button id="third-btn" type="submit" class="popup-thanks-btn">Оставить заявку</button>
          <p>Наш менеджер перезвонит Вам в течене 15 минут для консультации.<br>* при заказе строительства дома</p>
        </form>
      </div>
    </div>
  </div>

  <!-- Popup -->
  <div class="popup popup-thanks">
    <!-- Само (белое) модальное окно -->
    <div class="popup-dialog">
      <!-- Содежримое -->
      <div class="popup-content">
        <button type="submit" class="popup-close">&times;</button>
        <h2 class="popup-header">
          Спасибо за заявку
          </h4>
          <p>В течение 5 минут мы Вам перезвоним</p>
          <button class="thanks-btn button-small">Вернуться на сайт</button>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>

  <!-- Popup -->
  <script>
    $(document).ready(function($) {
      $('.popup-btn').on('click', function(event) {
        $('.popup-call').fadeIn();
      });
      $('.popup-close').on('click', function(event) {
        $('.popup-call').fadeOut();
        $('.popup-thanks').fadeOut();
      });
      $('.thanks-btn').on('click', function(event) {
        $('.popup-thanks').fadeOut();
      });
      $('#manager-call').on('click', function(event) {
        $('.popup-call').fadeIn();
      })
    });
  </script>
  <!-- Формы -->
  <script>
    $(function() {
      $('form').submit(function(e) {
        var $form = $(this);
        $.ajax({
          type: $form.attr('method'),
          url: $form.attr('action'),
          data: $form.serialize()
        }).done(function() {
          $('.popup-call').fadeOut();
          $('.popup-thanks').fadeIn();
          $('form[name=first-form]').trigger('reset');
          $('form[name=second-form]').trigger('reset');
          $('form[name=third-form]').trigger('reset');
        }).fail(function() {
          alert('Заявка не отправлена по тех причинам');
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault();
      });
    });
  </script>
  <!-- inputmask -->
  <script>
    jQuery(function($) {
      $("#phone-1").mask("+7 (999) 999-9999");
      $("#phone-2").mask("+7 (999) 999-9999");
      $("#phone-3").mask("+7 (999) 999-9999");
      $("#phone-4").mask("+7 (999) 999-9999");
    });
  </script>
  <!-- Слайдер -->
  <script>
    $(document).ready(function() {
      $('.slider_ex').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="submit" class="prev"></button>',
        nextArrow: '<button type="submit" class="next"></button>',
        responsive: [{
            breakpoint: 991,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 767,
            settings: {
              adaptiveHeight: true,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });
  </script>
  <!-- Скрипт для магазина -->
  <script>
    $(function() {
      $('#a-1').click(function() {
        $('#shop-cards-1').addClass('active');
        $('#shop-cards-2').removeClass('active');
        $('#shop-cards-3').removeClass('active');
        $('#shop-cards-4').removeClass('active');
        $('#shop-cards-5').removeClass('active');
        $('#a-1').addClass('active-color');
        $('#a-2').removeClass('active-color');
        $('#a-3').removeClass('active-color');
        $('#a-4').removeClass('active-color');
        $('#a-5').removeClass('active-color');
        // $('html, body').animate({scrollTop:$('#shop-cards-1').position().top}, 800);
      });
      $('#a-2').click(function() {
        $('#shop-cards-2').addClass('active');
        $('#shop-cards-1').removeClass('active');
        $('#shop-cards-3').removeClass('active');
        $('#shop-cards-4').removeClass('active');
        $('#shop-cards-5').removeClass('active');
        $('#a-2').addClass('active-color');
        $('#a-1').removeClass('active-color');
        $('#a-3').removeClass('active-color');
        $('#a-4').removeClass('active-color');
        $('#a-5').removeClass('active-color');
        // $('html, body').animate({scrollTop:$('#shop-cards-2').position().top}, 800);
      });
      $('#a-3').click(function() {
        $('#shop-cards-3').addClass('active');
        $('#shop-cards-2').removeClass('active');
        $('#shop-cards-1').removeClass('active');
        $('#shop-cards-4').removeClass('active');
        $('#shop-cards-5').removeClass('active');
        $('#a-3').addClass('active-color');
        $('#a-2').removeClass('active-color');
        $('#a-1').removeClass('active-color');
        $('#a-4').removeClass('active-color');
        $('#a-5').removeClass('active-color');
        // $('html, body').animate({scrollTop:$('#shop-cards-3').position().top}, 800);
      });
      $('#a-4').click(function() {
        $('#shop-cards-4').addClass('active');
        $('#shop-cards-2').removeClass('active');
        $('#shop-cards-3').removeClass('active');
        $('#shop-cards-1').removeClass('active');
        $('#shop-cards-5').removeClass('active');
        $('#a-4').addClass('active-color');
        $('#a-2').removeClass('active-color');
        $('#a-3').removeClass('active-color');
        $('#a-1').removeClass('active-color');
        $('#a-5').removeClass('active-color');
        // $('html, body').animate({scrollTop:$('#shop-cards-4').position().top}, 800);
      });
      $('#a-5').click(function() {
        $('#shop-cards-5').addClass('active');
        $('#shop-cards-2').removeClass('active');
        $('#shop-cards-3').removeClass('active');
        $('#shop-cards-4').removeClass('active');
        $('#shop-cards-1').removeClass('active');
        $('#a-5').addClass('active-color');
        $('#a-2').removeClass('active-color');
        $('#a-3').removeClass('active-color');
        $('#a-4').removeClass('active-color');
        $('#a-1').removeClass('active-color');
        // $('html, body').animate({scrollTop:$('#shop-cards-5').position().top}, 800);
      });
    });
  </script>
  <!-- slicknav -->
  <script>
    $(function() {
      $('#menu').slicknav({
        label: '',
        duration: 1000,
      });
    });
  </script>

</body>

</html>