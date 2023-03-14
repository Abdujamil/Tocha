<?php session_start();

//if (!$_SESSION['user']) {
//    header('Location: ./vendor/profile.php');
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="assets/auth.css"/>
    <title>Login</title>
</head>
<body>
<main id="main">

        <div id="login" class="login">
            <form id="form-log" action="vendor/login.php" method="post">
                <h1 class="login_title">Вход</h1>
<!--                <img class="close-icon-login" src="/assets/img/close.svg" alt=""/>-->
                <div class="log-body">
                    <input
                        type="tel"
                        placeholder="Телефон"
                        name="phone"
                        required
                    />
                    <input type="password" name="password" placeholder="Пароль"/>
                        <?php if ($_SESSION['message']) {
                            echo '<p class="msg-error">' . $_SESSION['message'] . '</p> ';
                        }
                        unset($_SESSION['message']);
                        ?>
                    <button class="log-btn" type="submit">Войти</button>
                    <a href="/register.php"><span>Нет аккаунта? - </span> Зарегистрироваться</a>
                </div>
            </form>
        </div>
    <script src="js/background.js"></script>
</main>
</body>
</html>
