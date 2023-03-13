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

<div class='scene'>
    <div class='scene_titanShadow'></div>
    <div class='t_wrap'>
        <div class='scene_titan'>
            <div class='eyes'>
                <div class='eye eye--left'></div>
                <div class='eye eye--right'></div>
            </div>
        </div>
    </div>
    <div class='scene_saturn'>
        <div class='scene_saturn__face'>
            <div class='face_clip'>
                <div class='eye eye--left'></div>
                <div class='eye eye--right'></div>
                <div class='mouth'></div>
            </div>
        </div>
        <div class='scene_saturn__shadow'></div>
        <div class='scene_saturn__shadowRing'></div>
        <div class='scene_saturn__sparks'>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
            <div class='spark'></div>
        </div>
        <div class='scene_saturn__ring'>
            <div class='small'>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
                <div class='small_part'></div>
            </div>
            <div class='layer'>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
            </div>
            <div class='layer'>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
            </div>
            <div class='layer'>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
                <div class='layer_part'></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
