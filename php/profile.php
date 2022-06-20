<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>«Лотос»</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Roboto:wght@400;500;700&display=swap">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/slick.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">
  <link rel="stylesheet" href="../css/style-jr.css">
</head>
<body>
<!--Голова-->
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__top">
          <a class="logo" href="/index.html">
            <img class="logo__img" src="../images/logo.png" alt="#">
          </a>
          <div class="header__phone">
            <span>Наши телефоны:</span>
            <a href="../assets/price.txt" download=""><button class="booking__btn">Скачайте прайс лист!</button></a>
            <a class="header__phone-number" href="tel:87471837050">8-747-183-70-50</a>
            <a class="header__phone-number" href="tel:87023017726">8-702-301-77-26</a>
            <form>
                <h2><?= $_SESSION['user']['full_name']?></h2>
                <a href="#"><?= $_SESSION['user']['email']?></a>
                <a href="../inc/logout.php" class="logout">Выход</a>
            </form>
          </div>
          <nav class="menu">
            <button class="menu__btn">
              <span class="row"></span>
            </button>
            <ul class="menu__list">
              <li class="menu__item">
                <a class="menu__link" href="index-flower.html">Все букеты</a>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="index-hits.html">Хиты продаж</a>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="index-gallery.html">Галерея</a>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="index-map.html">Контакты</a>
              </li>
              <li class="menu__item">
                <a class="menu__link" href="index-about.html">О нас</a>
              </li>
            </ul>
          </nav>
        </div>
  </header>
  <!--Популярные предложения-->
  <section class="popular">
    <div class="container">
      <h2 class="popular__title title">Для авторезированных пользователей скидка 20%</h2>
      <div class="popular__items">
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-1.jpeg)">
          <h4 class="popular__link-title">БУКЕТ ИЗ НЕЖНЫХ ПИОНОВ</h4>
          <p class="popular__price">от 17000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-2.jpeg)">
          <h4 class="popular__link-title">БУКЕТ РОЗ ИЗ ДВУХ СОРТОВ</h4>
          <p class="popular__price">от 25000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-3.jpeg)">
          <h4 class="popular__link-title popular__link-title--big">САМЫЕ ПОПУЛЯРНЫЕ БУКЕТЫ АЛЫХ РОЗ</h4>
          <p class="popular__country">Из Голандии</p>
          <p class="popular__price">от 48000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-4.jpeg)">
          <h4 class="popular__link-title">АСТРЫ</h4>
          <p class="popular__price">от 20000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-5.jpeg)">
          <h4 class="popular__link-title">МИЛЫЕ ПИОНЫ</h4>
          <p class="popular__price">от 30000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-6.jpeg)">
          <h4 class="popular__link-title popular__link-title--big">ГРАНДИОЗНЫЙ БУКЕТ ТЮЛЬПАНОВ</h4>
          <p class="popular__country">Из Казахстана</p>
          <p class="popular__price">от 48000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-7.jpeg)">
          <h4 class="popular__link-title">ВЕЛИКОЛЕПНЫЙ БУКЕТ ЭУСТОМ</h4>
          <p class="popular__price">от 31000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-8.jpeg)">
          <h4 class="popular__link-title">ХРИЗАНТЕМЫ</h4>
          <p class="popular__price">от 19000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-9.jpeg)">
          <h4 class="popular__link-title">БУКЕТ МАКОВ</h4>
          <p class="popular__price">от 12000 ₸</p>
        </a>
        <a class="popular__link" href="index-hits.html" style="background-image: url(../images/popular-10.jpeg)">
          <h4 class="popular__link-title">РОЗЫ</h4>
          <p class="popular__price">от 18000 ₸</p>
        </a>
      </div>
    </div>
  </section>
  <!--Лайфхак-->
  <section class="about">
    <div class="container">
      <div class="about__inner">
        <div class="about__content">
          <h2 class="about__title title">Что делать, чтобы букет простоял дольше?</h2>
          <p class="about__text">
            Чтобы цветы дольше сохраняли свежесть, удалите все листья, которые попадают в воду в вазе. 
            Листья, находящиеся под водой, очень быстро начинают гнить, давая пищу бактериям, 
            которые могут повредить остальную часть растения. Меняйте воду. 
            Меняйте воду каждый день, чтобы ваши цветы оставались свежими. 
            Удаляйте весь мусор из емкости перед тем, как наливать свежую воду. 
            Это снизит риск возникновения инфекции.
          </p>
          <a class="about__link" href="https://www.adme.ru/svoboda-sdelaj-sam/10-sposobov-sohranit-cvety-v-vaze-svezhimi-nadolgo-1463065/">Читать подробнее</a>
        </div>
        <div class="about__popup">
          <iframe width="650" height="400" src="https://www.youtube.com/embed/8UQOTZlgXv4" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
  <!--Заявка-->
  <section class="booking">
    <div class="container">
      <h2 class="booking__title title">Оставьте вашу заявку</h2>
      <form class="booking__form">
        <input class="booking__input" type="text" placeholder="Ваше имя">
        <input class="booking__input" type="text" placeholder="Телефон">
        <input class="booking__input" type="text" placeholder="E-mail">
        <textarea class="booking__area" placeholder="Комментарий"></textarea>
        <button class="booking__btn" type="submit">Отправить заявку</button>
        <label class="booking__label">
          <input class="booking__checkbox" type="checkbox">
          <span class="booking__checkbox-style"></span>
          Согласие на обработку персональных данных
        </label>
      </form>
    </div>    
  </section>
  <!--Подвал-->
  <footer class="footer">
    <div class="container">
      <div class="footer__logo">
        <a class="logo" href="index.html">
          <img class="logo__img" src="images/logo.png" alt=" ">
        </a>
      </div>
      <div class="footer__box">
        <div class="footer__info">
          <p class="footer__box-title">Цветочный магазин «Лотос»</p>
          <p class="footer__copy">© 2022. Все права защищены</p>
          <a class="footer__link" href="#">Политика конфиденциальности</a>
        </div>
        <div class="footer__address">
          <p class="footer__box-title">Адрес:</p>
          <a href="https://goo.gl/maps/pdE5gNYzvGvJ7xkw8">
            <p class="footer__address-text">
              г. Нур-Султан 020000, ул. Динмухамеда Кунаева 29/1
            </p>
          </a>
        </div>
        <div class="footer__contacts">
          <p class="footer__box-title">Свяжитесь с нами:</p>
          <a class="footer__phone" href="tel:87471837050">тел. 8-747-183-70-50</a>
          <a class="footer__phone" href="tel:87023017726">тел. 8-702-301-77-26</a>
          <a class="footer__mail" href="mailto: asujerkulov@gmail.com">lotos@gmail.kz</a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>