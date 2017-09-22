<?php
/*
Template Name: Главная
*/
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicon's -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon">

    <!-- Viewport -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- Map -->
    <script async src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <!-- Stylesheet's -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/app.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

    <style>
    	.header__text:after {
    		content: '<?php the_field('текст_внутри_круга') ?>';
    	}
    </style>
</head>
<body>

<header class="header">
  <span class="header_bg"></span>
  <div class="header__top">
    <div class="row">
    <div class="large-7 column">
      <div class="header__logo">
        <a href="#">
          <img src="<?php the_field('лого'); ?>" alt="">
        </a>
        <p class="logo__text"><?php the_field('текст_лого'); ?></p>
      </div>
    </div>
    <div class="large-5 column">
      <div class="row">
        <div class="medium-6 large-6 column">
          <div class="header__contacts text-center">
            <a href="tel:+79689855551" class="phone__num"><?php the_field('оптовый_телефон')?></a>
            <p class="phone__descr">Оптовые продажи</p>
            <span data-open="modal__price" class="header__btn">Получить оптовый прайс</span>
          </div>
        </div>
        <div class="medium-6 large-6 column">
          <div class="header__contacts text-center">
            <a href="tel:+79689855551" class="phone__num"><?php the_field('розничный_телефон')?></a>
            <p class="phone__descr">Розничные продажи</p>
            <span data-open="modal__order" class="header__btn">Заказать сейчас</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="header__content">
    <div class="row">
      <div class="large-6 column">
        <div class="header__text">
          <h1 class="header__title"><?php the_field('заголовок_страницы')?></h1>
          <ul class="header__list">

			<?php $array = get_field('свойства_костюма_шапка');

	        	foreach($array as $item){ ?>
					<li class="h-list__item"><?=$item['свойство']?></li>
	        	<?php }
	        ?>

            <!-- <li class="h-list__item icon_material">Грязеотталкивающий <br> материал</li>
            <li class="h-list__item icon_protection">Защита от холода,<br> ветра и дождя</li>
            <li class="h-list__item icon_cloth">Непромокаемая <br> ткань</li> -->



          </ul>
        </div>
      </div>
      <div class="medium-6 large-6 column">
        <div class="header__costume">
          <img src="<?php the_field('шапка_главная_картинка')?>" alt="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="large-8 large-offset-2 column text-center">
        <div class="header__form">
          <h3 class="form__title"><?php the_field('заголовок_формы')?></h3>
          <p class="form__descr"><?php the_field('форма_условия_скидки')?></p>
          <p class="form__price"><?php the_field('форма_скидки_новая_цена')?> <span class="old-price"><?php the_field('форма_скидки_старая_цена')?></span></p>
          <form action="send.php" class="ajax-form form_style js-formValidation" data-thanks="1">
            <div class="input_wrap clearfix">
              <label><input type="text" name="name" placeholder="Ваше имя"></label>
              <label><input type="text" class="email" name="email" placeholder="Ваш e-mail" required></label>
            </div>
            <button class="btn_style order__btn">Заказать со скидкой</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="video">
  <div class="row">
    <div class="large-6 column">
      <div class="video_wrap">
        <video controls="controls" poster="assets/video/poster.jpg">
          <source src="<?php the_field('о_костюме_видео')?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        </video>

      </div>
    </div>
    <div class="large-6 column">
      <div class="video__descr">
        <h2 class="section__title video__title"><?php the_field('о_костюме_заголовок')?></h2>
        <?php the_field('о_костюме_описание')?>
      </div>

    </div>
  </div>
</section>

<section class="about">
  <diw class="row">
    <div class="small-12 column text-center">
      <h2 class="section__title about__title"><?php the_field('подходит_для_заголовок')?></h2>
    </div>
  </diw>
  <div class="expanded row">

	<?php $array2 = get_field('занятия');

    	foreach($array2 as $k => $item){ ?>
			<div class="about__scope" data-plus="<?=$k+1?>">
				<img src="<?=$item['занятия_картинка']?>" alt="">
			    <div class="scope__descr text-center">
			        <h3 class="scope__title"><?=$item['занятия_шапка']?></h3>
			        <ul class="scope__list text-left">
			        	<li><?=$item['занятия_свойство_1']?></li>
			        	<li><?=$item['занятия_свойство_2']?></li>
			        	<li><?=$item['занятия_свойство_3']?></li>
			        </ul>
			    </div>
			</div>

    	<?php }
    ?>

    <!-- <div class="about__scope" data-plus="1">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/about/about_img1.jpg" alt="">
      <div class="scope__descr text-center">
        <h3 class="scope__title">Туризмом</h3>
        <ul class="scope__list text-left">
          <li>Свободный крой костюма</li>
          <li>100% хлопок</li>
          <li>12 функциональных карманов</li>
        </ul>
      </div>
    </div>
    <div class="about__scope" data-plus="2">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/about/about_img2.jpg" alt="">
      <div class="scope__descr text-center">
        <h3 class="scope__title">Рыбалкой</h3>
        <ul class="scope__list text-left">
          <li>Адаптирован для низких температур</li>
          <li>Водоотталкивающая пропитка ткани</li>
          <li>Резинки и стяжки для защиты</li>
        </ul>
      </div>
    </div>
    <div class="about__scope" data-plus="3">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/about/about_img3.jpg" alt="">
      <div class="scope__descr text-center">
        <h3 class="scope__title">Экстримальной ездой <br> на квадрацикле</h3>
        <ul class="scope__list text-left">
          <li>Резинки и стяжки для защиты</li>
          <li>Водоотталкивающая пропитка ткани</li>
          <li>Плотные армированные накладки</li>
        </ul>
      </div>
    </div>
    <div class="about__scope" data-plus="4">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/about/about_img4.jpg" alt="">
      <div class="scope__descr text-center">
        <h3 class="scope__title">Страйкбола <br> и пейнтбола</h3>
        <ul class="scope__list text-left">
          <li>Плотные армированные накладки</li>
          <li>Свободный крой костюма</li>
          <li>12 функциональных карманов</li>
        </ul>
      </div>
    </div>
    <div class="about__scope" data-plus="5">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/about/about_img5.jpg" alt="">
      <div class="scope__descr text-center">
        <h3 class="scope__title">Охотой</h3>
        <ul class="scope__list text-left">
          <li>Камуфляжный цвет</li>
          <li>Адаптирован для низких температур</li>
          <li>Резинки и стяжки для защиты</li>
        </ul>
      </div>
    </div> -->
  </div>
  <div class="row">
    <div class="medium-6 medium-offset-3 large-4 large-offset-0 large-push-4 column">
      <div class="about__photo text-center">
        <img src="<?php the_field('"подходит_для"_главная_картинка')?>" alt="">
      </div>
    </div>
    <div class="large-4 large-pull-4 column">
      <ul class="about__list list_right">
        <li class="icon_temp" data-2="1" data-5="1">Адаптирован для низких температур до -25&deg;C</li>
        <li class="icon_waterproof" data-2="1" data-3="1">Водоотталкивающая пропитка ткани</li>
        <li class="icon_easy" data-1="1" data-4="1">Свободный крой костюма не стесняет движений</li>
        <li class="icon_shield" data-3="1" data-4="1">Плотные армированные накладкина локтях и коленях</li>
      </ul>
    </div>
    <div class="large-4 column">
      <ul class="about__list list_left">
        <li class="icon_pocket" data-1="1" data-4="1">12 функциональных карманов (6 на куртке, 6 на штанах)</li>
        <li class="icon_gum" data-2="1" data-3="1" data-5="1">Резинки и стяжки для защиты от пыли и насекомых</li>
        <li class="icon_color" data-5="1">Камуфляжный цвет - Хаки</li>
        <li class="icon_material" data-1="1">100% хлопок, дышащий даже в любую погоду</li>
      </ul>
    </div>
  </div>
</section>

<section class="composition">
  <div class="row">
    <div class="small-12 column">
      <h2 class="section__title composition__title"><?php the_field('"из_чего_состоит"_заголовок')?></h2>
    </div>
    <div class="medium-6 medium-offset-3 large-4 large-offset-0 column">
      <div class="composition__photo js-compositionPhoto">
        <a href="<?php the_field('галерея_главная_картинка')?>">
          <img src="<?php the_field('галерея_главная_картинка')?>" alt="">
        </a>
      </div>
      <div class="preview__list clearfix">
		<?php $array3 = get_field('галерея_превью');

        	foreach($array3 as $item){ ?>
				<a href="<?=$item['галерея_картинка']?>" class="preview__item js-previews">
		          <img src="<?=$item['галерея_картинка_миниатюра']?>" alt="">
		        </a>
        	<?php }
        ?>
      </div>
    </div>
    <div class="large-8 column">
      <div class="composition__info">
        <p class="section__text composition__text"><?php the_field('"из_чего_состоит"_описание')?></p>
        <div class="row">
          <div class="medium-9 large-9 column">
            <div class="composition__form text-center">
              <p class="form__price"><?php the_field('форма_скидки_новая_цена')?> <span class="old-price"><?php the_field('форма_скидки_старая_цена')?></span></p>
              <form action="send.php" class="ajax-form form_style js-formValidation" data-thanks="1">
                <div class="input_wrap clearfix">
                  <label><input type="text" name="name" placeholder="Ваше имя"></label>
                  <label><input type="text" class="email" name="email" placeholder="Ваш e-mail" required></label>
                </div>
                <button class="btn_style order__btn">Заказать со скидкой</button>
              </form>
            </div>
          </div>
          <div class="medium-3 large-3 column">
            <span data-open="modal__more" class="composition__more">Посмотреть подробную комплектацию костюма <span class="more_icon">&gt;</span></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="small-12 column">
      <h2 class="section__title size__title"><?php the_field('"выберите_размер"_заголовок')?></h2>
    </div>
    <div class="small-12 column text-sm-center">
      <ul class="size__list text-center clearfix">
      	<?php $array4 = get_field('таблица');
        	foreach($array4 as $item){ ?>
		        <li>
		          <ul class="size__item">
		            <li class="section__text"><?=$item['таблица_заголовок']?></li>
		            <li><?=$item['таблица_свойство']?></li>
		            <li><?=$item['таблица_свойство_2']?></li>
		          </ul>
		        </li>
        	<?php }
        ?>
      </ul>
      <div class="composition__delivery text-sm-left">
        <div class="row">
          <div class="medium-8 medium-offset-2 large-4 large-offset-2 column">
            <div class="delivery__item">
              <h3 class="delivery__title"><?php the_field('доставка_заголовок')?></h3>
              <ul class="delivery__list icon_delivery">

              	<?php $array5 = get_field('доставка_список');
		        	foreach($array5 as $item){ ?>
				        <li><?=$item['доставка_пункт_обычный']?></li>
		                <li class="accent"><?=$item['доставка_пункт_акцент']?></li>
		        	<?php }
		        ?>
              </ul>
            </div>
          </div>
          <div class="medium-8 medium-offset-2 large-4 column large-offset-0 large-pull-2 medium-pull-2">
            <div class="delivery__item">
              <h3 class="delivery__title"><?php the_field('оплата_заголовок')?></h3>
              <ul class="delivery__list icon_receipt">

              	<?php $array6 = get_field('оплата_список');
		        	foreach($array6 as $item){ ?>
				        <li><?=$item['оплата_пункт_обычный']?></li>
		                <li class="accent"><?=$item['оплата_пункт_акцент']?></li>
		        	<?php }
		        ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="catalog">
  <div class="row small-12 column">
    <h2 class="section__title catalog__title"><?php the_field('каталог_заголовок')?></h2>
  </div>
  <div class="row">
    <div class="large-8 large-offset-2 column">
      <div class="catalog__list text-center clearfix">

		<?php $array7 = get_field('каталог_элемент');
        	foreach($array7 as $item){ ?>
                <div class="catalog__item">
		          <div class="catalog__img">
		            <img src="<?=$item['каталог_картинка']?>" alt="">
		          </div>
		          <div class="catalog__descr">
		            <h3 class="catalog__name"><?=$item['каталог_заголовок_элемента']?></h3>
		            <p class="catalog__text"><?=$item['каталог_описание_элемента']?></p>
		            <a href="#" class="catalog__order">Выбрать</a>
		            <span data-open="modal__more" class="catalog__more">Подробнее...</span>
		          </div>
		        </div>
        	<?php }
        ?>

      </div>
    </div>
  </div>
</section>

<section class="gross text-center">
  <span class="gross_bg"></span>
  <div class="row">
    <div class="small-12 column">
      <h2 class="gross__title"><?php the_field('"оптовым_покупателям"_заголовок')?></h2>
    </div>
    <div class="large-8 large-offset-2 column">
      <h3 class="gross__subtitle"><?php the_field('"оптовым_покупателям"_под-заголовок')?></h3>
    </div>
    <div class="large-6 large-offset-3 column end">
      <div class="gross__form">
        <h3 class="form__title"><?php the_field('заголовок_формы_опт')?></h3>
        <form action="send.php" class="ajax-form form_style js-formValidation" data-thanks="1">
          <div class="input_wrap clearfix">
            <label><input type="text" name="name" placeholder="Ваше имя"></label>
            <label><input type="text" class="email" name="email" placeholder="Ваш e-mail" required></label>
          </div>
          <button class="btn_style order__btn">Заказать со скидкой</button>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="reviews">
  <div class="row">
    <div class="large-6 large-offset-5 column">
      <h2 class="section__title reviews__title"><?php the_field('отзывы_заголовок')?></h2>
      <ul class="reviews__list js-reviewsCarousel">

      	<?php $array8 = get_field('отзывы_группа');
        	foreach($array8 as $item){ ?>
                <li class="section__text"><?=$item['отзыв']?></li>
        	<?php }
        ?>

      </ul>
      <div class="customNavigation">
        <a href="#" class="navPrev js-prev">&lt;</a>
        <a href="#" class="navNext js-next">&gt;</a>
      </div>
      <p class="reviews__text">Вы можете отправить нам на почту свой отзыв: <a href="mailto:pochta@dom.ru">pochta@dom.ru</a></p>
    </div>
  </div>
</section>

<section class="contacts text-center">
  <div class="row">
    <div class="small-12 column">
      <ul class="contacts__list clearfix">
        <li class="icon_phone">
          <a href="tel:89689855551"><?php the_field('оптовый_телефон')?></a>
          <a href="tel:89261801135"><?php the_field('розничный_телефон')?></a>
        </li>
        <li class="icon_email vfix">
          <a href="mailto:<?php the_field('электронная_почта')?>" class="contacts__mail"><?php the_field('электронная_почта')?></a>
        </li>
        <li class="icon_time">
          <p><?php the_field('время_работы')?></p>
          <span>(ежедневно)</span>
        </li>
      </ul>
    </div>
    <div class="large-4 large-offset-8 column">
      <div class="contacts__address">
        <h2 class="section__title"><?php the_field('подвал_адрес_заголовок')?></h2>
        <p class="address__descr"><?php the_field('подвал_адрес_под-заголовок')?></p>
        <h3 class="address__title"><?php the_field('подвал_адрес')?></h3>
        <span data-open="modal__callback" class="btn_style address__btn">Задать вопрос</span>
      </div>
    </div>
  </div>
  <div id="map" class="map"></div>
</section>

<footer class="footer">
  <div class="row">
    <div class="medium-7 large-6 column">
      <div class="footer__logo">
        <img src="<?php the_field('лого_подвал'); ?>" alt="">
        <p class="logo__text"><?php the_field('текст_лого'); ?></p>
      </div>
    </div>
    <div class="medium-5 large-6 column">
      <p class="copyrite">Разработка: Thelandpage</p>
    </div>
  </div>
</footer>

<div class="basket">
  <div class="row">
    <div class="small-9 column text-center">
      <h4>Товаров в корзине:
        <span class="js-prodCount">0</span>. Полная стоимость:
        <span class="js-prodPrice">0</span>
      </h4>
    </div>
    <div class="small-3 column">
      <span class="btn_style basket__btn" data-open="modal__order" aria-haspopup="true" tabindex="0">Оформить заказ</span>
    </div>
  </div>
</div>

<div class="hidden">
  <div id="modal__thanks" class="modal__thanks modal_close js-thanks small text-center reveal" data-reveal data-animation-in="fade-in" data-animation-out="fade-out">
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">X</span>
    </button>
    <h3 class="thanks__title">Спасибо!</h3>
    <span class="thanks__text">Ваша заявка на заказ принята</span>
    <span class="thanks__text">Мы свяжемся с вами в течение 10 минут</span>
  </div>
  <div id="modal__more" class="modal__more modal_close reveal clearfix" data-reveal data-animation-in="fade-in" data-animation-out="fade-out">
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">X</span>
    </button>
    <div class="more__img">
      <div class="composition__photo js-compositionPhoto">
        <a href="<?php the_field('галерея_главная_картинка')?>">
          <img src="<?php the_field('галерея_главная_картинка')?>" alt="">
        </a>
      </div>
      <div class="preview__list clearfix">

		<?php $array3 = get_field('галерея_превью');

        	foreach($array3 as $item){ ?>
				<a href="<?=$item['галерея_картинка']?>" class="preview__item js-previews">
		          <img src="<?=$item['галерея_картинка_миниатюра']?>" alt="">
		        </a>
        	<?php }
        ?>
      </div>
    </div>
    <div class="more__descr">
      <h2 class="modal__title more__title text-center"><?php the_field('комплектация_детальнее_заголовок'); ?></h2>
      <p class="more__text"><?php the_field('комплектация_под-заголовок'); ?></p>
      <ul class="more__list">
      	<?php $array9 = get_field('комплектация_детальнее_1');

        	foreach($array9 as $item){ ?>
				<li><?=$item['комплектация_пункт']?></li>
        	<?php }
        ?>
      </ul>
      <ul class="more__list">
      	<?php $array10 = get_field('комплектация_детальнее_2');

        	foreach($array10 as $item){ ?>
				<li><?=$item['комплектация_пункт']?></li>
        	<?php }
        ?>
      </ul>
    </div>
  </div>
  <div id="modal__callback" class="modal__callback modal_close text-center reveal" data-reveal data-animation-in="fade-in" data-animation-out="fade-out">
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">X</span>
    </button>
    <h2 class="modal__title">Задайте вопрос нашему менеджеру</h2>
    <form action="send.php" class="ajax-form modal_style js-formValidation">
      <label><input type="text" name="name" placeholder="Введите ваше имя"></label>
      <label><input type="text" class="phone" name="phone" placeholder="Введите ваш телефон" required></label>
      <label><textarea name="msg" placeholder="Текст сообщения"></textarea></label>
      <button class="btn_style modal__btn">Заказать сейчас</button>
    </form>
  </div>
  <div id="modal__price" class="modal__callback modal_close text-center reveal" data-reveal data-animation-in="fade-in" data-animation-out="fade-out">
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">X</span>
    </button>
    <h2 class="modal__title">Получить оптовый прайс</h2>
    <form action="send.php" class="ajax-form modal_style js-formValidation">
      <label><input type="text" name="name" placeholder="Введите ваше имя"></label>
      <label><input type="text" class="phone" name="phone" placeholder="Введите ваш телефон" required></label>
      <label><textarea name="msg" placeholder="Текст сообщения"></textarea></label>
      <button class="btn_style modal__btn">Заказать сейчас</button>
    </form>
  </div>
  <div id="modal__order" class="modal__order modal_close reveal" data-reveal data-animation-in="fade-in" data-animation-out="fade-out">
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">X</span>
    </button>
    <div class="m-order__img text-center">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/modal_order.png" alt="">
    </div>
    <div class="m-order__descr">
      <h2 class="modal__title">Оставьте заявку <br> на заказ костюма "Горка - Tiger"</h2>
      <form action="send.php" class="ajax-form modal_style js-formValidation">
        <label><input type="text" name="name" placeholder="Введите ваше имя"></label>
        <label><input type="text" class="phone" name="phone" placeholder="Введите ваш телефон" required></label>
        <button class="btn_style modal__btn">Заказать сейчас</button>
      </form>
    </div>
  </div>
</div>

<script src="<?php bloginfo('template_url'); ?>/assets/js/app.dart.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/app.js"></script>
</body>
</html>
