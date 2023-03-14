<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: /');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="assets/tocha.css"/>
    <link rel="stylesheet" href="./swiper/swiper.css"/>
    <title>Tocha</title>
</head>
<body>
<main id="main">
    <header id="#header" class="header">
        <a href="#" class="link-logo">
            <div class="head">
                <img src="assets/img/logo.svg" alt="logo" class="logo"/>
                <h5 class="logo-text">tocha</h5>
            </div>
        </a>
        <div class="links">
            <ul>
                <li><a href="#" class="active">Подключение</a></li>
                <li><a href="#">Оплата</a></li>
                <li><a href="#footer">Контакты</a></li>
                <li><a href="/profile.php">Личный кабинет</a></li>
            </ul>
        </div>
        <div class="burger" style="display: none;">
          <img src="./assets/img/Burger.svg" alt="burger">
        </div>
        <div class="mobile-header-menu" style="display: none;">
            <img class="close" src="./assets/img/close.svg" alt="close">
            <ul>
                <li><a href="#" class="active">Подключение</a></li>
                <li><a href="#">Оплата</a></li>
                <li><a href="#footer">Контакты</a></li>
                <li><a href="/profile.php">Личный кабинет</a></li>
            </ul>
        </div>
    </header>
    <section id="#home" class="home">
        <div class="texts">
            <h1>
                <span>Telegram чат <br/></span>на вашем сайте
            </h1>
            <p>
                Общение с клиентами станет простым и удобным, а подключение займет 5
                минут. Первый месяц — <span>бесплатно!</span>
            </p>
            <button class="home-btn">Подключить</button>
        </div>
        <img src="assets/img/main.png" alt=""/>
        <div class="blur-pink"></div>
        <div class="blur-green"></div>
        <div class="blur-pink2"></div>
    </section>
    <section id="#about" class="about">
        <div class="about_items">
            <h1>Tocha Online — это</h1>
            <div class="item">
                <img class="items_img" src="/assets/img/telegram1.svg" alt="icon"/>
                <div class="item_title">
                    <h3>Ничего лишнего</h3>
                    <p>
                        Отсутствие лишних приложений для операторов. Оператору не нужно
                        учиться работать с чатом
                    </p>
                </div>
            </div>
            <div class="item">
                <img class="items_img" src="/assets/img/arrows.svg" alt="icon"/>
                <div class="item_title">
                    <h3>Простота</h3>
                    <p>Простая установка на сайт</p>
                </div>
            </div>
            <div class="item">
                <img class="items_img" src="/assets/img/assisent.svg" alt="icon"/>
                <div class="item_title">
                    <h3>Несколько ассистентов</h3>
                    <p>Возможность подключения нескольких ассистентов</p>
                </div>
            </div>
            <div class="item">
                <img class="items_img" src="/assets/img/women.svg" alt="icon"/>
                <div class="item_title">
                    <h3>Кастомизация</h3>
                    <p>Настройка интерфейса под нужды сайта</p>
                </div>
            </div>
        </div>
        <div class="about-background">
            <img src="assets/img/phone.png" alt="phone"/>
        </div>
    </section>
    <section id="#tarrifs" class="tarrifs">
        <div class="tarrifs_title">
            <h1>Тарифы</h1>
            <p>Стоимость зависит от трафика сайта</p>
        </div>
        <div class="cards">
            <div class="card">
                <div class="card_head">
                    <h2>Бесплатно</h2>
                </div>
                <div class="card_body">
                    <h1>Пробный период на 1 месяц</h1>
                    <p>0₽/первый месяц</p>

                    <button class="tarrifs_btn">Подключить за 0₽</button>
                </div>
            </div>
            <div class="card">
                <div class="card_head">
                    <h2>Базовый</h2>
                </div>
                <div class="card_body">
                    <h1>Менее 1000 посещений в сутки</h1>
                    <p>200₽/месяц</p>

                    <button class="tarrifs_btn">Подключить за 200₽</button>
                </div>
            </div>
            <div class="card">
                <div class="card_head">
                    <h2>Премиум</h2>
                </div>
                <div class="card_body">
                    <h1>Более 1000 посещений в сутки</h1>
                    <p>500₽/месяц</p>

                    <button class="tarrifs_btn">Подключить за 500₽</button>
                </div>
            </div>
        </div>
    </section>
    <section id="#connections" class="connections">
        <h1>Всего 3 шага для подключения Telegram чата</h1>
        <div class="steps">
            <div class="first-step">
                <div class="first_step_title">
                    <img src="assets/img/1.svg" alt="number-1"/>
                    <h3>Telegram bot</h3>
                    <p>Вы создаёте Telegram бота для вашего сайта</p>
                </div>
                <img
                    class="frst_screen"
                    src="assets/img/phone-company.svg"
                    alt="screen"
                />
                <div class="steps_blur_green"></div>
            </div>
            <div class="second-step">
                <div class="first_step_title">
                    <img src="assets/img/2.svg" alt="number-1"/>
                    <h3>Telegram bot</h3>
                    <p>Вы создаёте Telegram бота для вашего сайта</p>
                </div>
                <img class="scnd_screen" src="assets/img/phone-tocha.svg" alt="screen"/>
                <div class="scnd_blur_green"></div>
                <div class="scnd_blur_pink"></div>
            </div>
            <div class="first-step">
                <div class="first_step_title">
                    <img src="assets/img/3.svg" alt="number-1"/>
                    <h3>Telegram bot</h3>
                    <p>Вы создаёте Telegram бота для вашего сайта</p>
                </div>
                <img
                    class="thrd_screen"
                    src="assets/img/phone-company.svg"
                    alt="screen"
                />
                <div class="thrd_blur_pink"></div>
            </div>
        </div>
    </section>
    <section id="#review" class="review">
        <h1>Отзывы клиентов</h1>
        <div class="swiper mySwiper" pagination="true" pagination-dynamic-bullets="true">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <h5>Как же удобно!</h5>
                    <p>
                        В рамках спецификации современных стандартов, базовые сценарии
                        поведения пользователей, которые представляют собой яркий пример
                        континентально-европейского типа политической культуры, будут
                        преданы социально-демократической анафеме.
                    </p>
                    <div class="review_client">
                        <img src="assets/img/ava.png" alt="person"/>
                        <div class="client_name">
                            <h3>Анна Купер</h3>
                            <a href="#">romashka.ru</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <h5>Теперь мы идем в ногу со временем</h5>
                    <p>
                        В рамках спецификации современных стандартов, базовые сценарии
                        поведения пользователей, которые представляют собой яркий пример
                        континентально-европейского типа политической культуры, будут
                        преданы социально-демократической анафеме.
                    </p>
                    <div class="review_client">
                        <img src="assets/img/ava-2.png" alt="person"/>
                        <div class="client_name">
                            <h3>Анна Купер</h3>
                            <a href="#">romashka.ru</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <h5>Как же удобно!</h5>
                    <p>
                        В рамках спецификации современных стандартов, базовые сценарии
                        поведения пользователей, которые представляют собой яркий пример
                        континентально-европейского типа политической культуры, будут
                        преданы социально-демократической анафеме.
                    </p>
                    <div class="review_client">
                        <img src="assets/img/ava.png" alt="person"/>
                        <div class="client_name">
                            <h3>Анна Купер</h3>
                            <a href="#">romashka.ru</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <h5>Теперь мы идем в ногу со временем</h5>
                    <p>
                        В рамках спецификации современных стандартов, базовые сценарии
                        поведения пользователей, которые представляют собой яркий пример
                        континентально-европейского типа политической культуры, будут
                        преданы социально-демократической анафеме.
                    </p>
                    <div class="review_client">
                        <img src="assets/img/ava-2.png" alt="person"/>
                        <div class="client_name">
                            <h3>Анна Купер</h3>
                            <a href="#">romashka.ru</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section id="#join" class="join">
        <img src="assets/img/join.png" alt="hand-phone"/>
        <div class="email">
            <h1>Подключите Telegram чат уже сегодня</h1>
            <div class="send">
                <input
                    type="email"
                    placeholder="Введите e-mail"
                    pattern=".+@globex\.com"
                    size="30"
                    required
                />
                <button class="send_btn">Отправить</button>
            </div>
        </div>
    </section>
</main>
    <footer id="footer" class="footer">
    <a href="#">
        <img src="assets/img/footer_logo.png" alt="logo"/>
    </a>
    <div class="foot_items">
        <div class="foot_item">
            <h3>Telegram чат</h3>
            <ul>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Партнеры</a></li>
                <li><a href="#">Инструкция</a></li>
                <li><a href="#">Цены</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
        <div class="foot_item">
            <h3>Поддержка</h3>
            <ul>
                <li><a href="#">Центр поддержки</a></li>
                <li><a href="#">Политика конфеденциальности</a></li>
                <li><a href="#">Документы оферта</a></li>
                <li><a href="#">Документы оферта</a></li>
                <li><a href="#">Статус</a></li>
            </ul>
        </div>
    </div>
</footer>
<script src="./js/tocha.js"></script>
<script src="./swiper/swiper.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        // autoplay: {
        //     delay: 3000,
        // },
        loop: true,
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        }
        // breakpoints: {
        //     1024: {
        //         slidesPerView: 1,
        //     },
        // },
    });
</script>
</body>
</html>
