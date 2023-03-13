<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="assets/auth.css"/>
    <link rel="stylesheet" href="./swiper/swiper.css"/>
    <title>Tocha</title>
</head>
<body>
<main id="main">
    <div id="register" class="register">
    <form id="form-register" action="vendor/registeration.php" method="post">
        <h1 class="login_title">Регистрация</h1>
<!--        <img class="close-icon-register" src="/assets/img/close.svg" alt=""/>-->
        <div class="log-body">
            <input type="tel" name="phone" placeholder="Телефон" required/>
            <input type="email" name="email" placeholder="Электронная почта"/>
            <input type="password" name="password" placeholder="Пароль"/>
            <input type="password" name="password2" placeholder="Повторите пароль"/>
            <?php if ($_SESSION['message']) {
                echo '<p class="msg-error">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
            ?>
            <button class="log-btn" type="submit">Зарегистрироваться</button>
        </div>
    </form>
    </div>
</main>
</body>
</html>
