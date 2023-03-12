<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/tocha.css" />
    <link rel="stylesheet" href="./swiper/swiper.css" />
    <title>Tocha</title>
  </head>
  <body>
    <main id="main">
      <div id="login" class="login" style="display: none">
        <form id="form-log" action="vendor/login.php" method="post">
          <h1 class="login_title">Вход</h1>
          <img class="close-icon-login" src="/assets/img/close.svg" alt="" />
          <div class="log-body">
            <input
              type="tel"
              placeholder="Телефон"
              name="phone"
              required
            />
            <input type="password" name="password" placeholder="Пароль" />
            <button class="log-btn" type="submit">Войти</button>
          </div>
        </form>
      </div>
      <div id="register" class="register" style="display: none">
        <form id="form-register" action="vendor/registeration.php" method="post">
          <h1 class="login_title">Регистрация</h1>
          <img class="close-icon-register" src="/assets/img/close.svg" alt="" />
          <div class="log-body">
            <input type="tel" name="phone" placeholder="Телефон" required/>
            <input type="email" name="email" placeholder="Электронная почта" />
            <input type="password" name="password" placeholder="Пароль" />
            <input type="password" name="password2" placeholder="Повторите пароль" />
            <button class="log-btn" type="submit">Регистрироваться</button>
          </div>
        </form>
      </div>
      <haeder id="#header" class="header">
        <a href="#" class="link-logo">
          <div class="head">
            <img src="assets/img/logo.svg" alt="logo" class="logo" />
            <h5 class="logo-text">tocha</h5>
          </div>
        </a>
        <div class="links">
          <ul style="display: none">
            <li><a href="#" class="active">Подключение</a></li>
            <li><a href="#">Оплата</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Выход</a></li>
          </ul>
          <ul class="btn-log">
            <li>
              <button class="enter-btn" type="submit">Вход</button>
            </li>
            <li>
              <button class="register-btn" type="submit">Регистрация</button>
            </li>
          </ul>
        </div>
      </haeder>
      <section id="#home" class="home">
        <div class="texts">
          <h1>
            <span>Telegram чат <br /></span>на вашем сайте
          </h1>
          <p>
            Общение с клиентами станет простым и удобным, а подключение займет 5
            минут. Первый месяц — <span>бесплатно!</span>
          </p>
          <button class="home-btn">Подключить</button>
        </div>
        <img src="assets/img/main.png" alt="" />
        <div class="blur-pink"></div>
        <div class="blur-green"></div>
        <div class="blur-pink2"></div>
      </section>
    </main>
    <script src="./tocha.js"></script>
    <script src="./swiper/swiper.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        autoplay: {
          delay: 4000,
        },
        loop: true,
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
  </body>
</html>
