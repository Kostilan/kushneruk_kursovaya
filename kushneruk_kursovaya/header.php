<?php
session_start();
$user_role = empty($_SESSION["user"]["role"])?false:$_SESSION["user"]["role"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fun Fox</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <img src="/img/icon.svg" alt="">
        <h3>Fun Fox</h3>
        <nav>
            <ul class="list-navigation">
                <li>
                    <a href="index.php">О нас</a>
                </li>
                <li>
                    <a href="catalog.php">Мероприятия</a>
                </li>
                <?php if(!$user_role){
              ?>
                <li>
                    <a href="autorization.php">Вход</a>
                </li>
                <li>
                    <a href="registration.php">Регистрация</a>
                </li>
                <?php } else { ?>
                    <li>
                    <a href="account.php">Личный кабинет</a>
                </li>
                    <li>
                    <a href="">Мои билеты</a>
                </li>
                <li>
                    <a href="">Подача заявки</a>
                </li>
                <li>
                    <a href="logout.php">Выход</a>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </header>