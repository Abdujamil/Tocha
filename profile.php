<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: /');
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="./assets/profile.css">
</head>
<body>
<main>
    <section>
        <div class="profile-home">
            <img src="./assets/img/ava-2.png" alt="avatar">
            <h2>Вы вошли под номером: <?php echo $_SESSION['user']['phone'] ?> </h2>
        </div>
        <div class="links">
            <a class="home_link" href="/home.php">На главную страницу</a>
            <a class="exit" href="/">Выход</a>
        </div>
    </section>
</main>
</body>
</html>
