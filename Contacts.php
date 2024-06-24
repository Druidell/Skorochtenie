<?php require_once("config.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Контакты</title>
</head>
<body>
    <header>
        <nav>
        <div class="content">
            <div class="navbar-nav">
                <div class="navbar-nav-item">
                    <a href="Index.php" class="sitename"><strong>GrandRead</strong></a>
                    <a href="Index.php" class="nav-link">Главная</a>
                    <a href="Catalog.php" class="nav-link">Каталог</a>
                    <a href="Reviews.php" class="nav-link">Отзывы</a>
                    <a href="Contacts.php" class="nav-link">Контакты</a>
                    <?php
                    if ($_SESSION['login_sess']!='') { ?> 
                    <a href="account.php" class="login-link">Личный кабинет</a>
                    <?php } else { ?>
                      <a href="account.php" class="login-link">Войти</a>
                    <?php } ?>
              </div>
          </div>
          </div>
        </nav>
    </header>
    
    <div class="content">
    <h1 class="title">Контакты</h1>
    <div class="contacts-container">
        <div class="office-contain">
            <h1 class="textone"><b>Офис</b></h1>
            <p class="textthree"><b>Г. Пенза ул. Московская 191<br>+7 800 555 35 35</b></p>
        </div>
        <div class="social-contain">
            <p class="textone"><b>Встретимся в соц. сетях</b></p>
            <a href="https://web.telegram.org"><img src="Picture/icon9.png"></a>
            <a href="https://vk.com"><img src="Picture/icon10.png"></a>
        </div>
    </div>

    <div class="content">
    <div class="question-container">
        <h1>Часто задаваемые вопросы:</h1>
        <details class="question-details">
            <summary class="question-summary">Как долго будут доступны уроки?</summary>
            <p>Как долго будут доступны уроки?</p>
        </details>
        <details class="question-details">
            <summary class="question-summary">В чем мне помогут онлайн-курсы?</summary>
            <p>В чем мне помогут онлайн-курсы?</p>
        </details>
        <details class="question-details">
            <summary class="question-summary">На какой возраст рассчитан ваш курс?</summary>
            <p>На какой возраст рассчитан ваш курс?</p>
        </details>
        <details class="question-details">
            <summary class="question-summary">Смогу ли я читать художественную литературу скорочтением?</summary>
            <p>Смогу ли я читать художественную литературу скорочтением?</p>
        </details>
        <details class="question-details">
            <summary class="question-summary">Что мне понадобятся для занятий?</summary>
            <p>Что мне понадобятся для занятий?</p>
        </details>
    </div>
    </div>

    <div class="content">
    <div class="contacts-container">
        <div class="social-contain">
            <p class="textone"><b>Остались вопросы?</b></p>
            <p class="textone"><b>Напишите нам в социальные сети</b></p>
            <a href="https://web.telegram.org"><img src="Picture/icon9.png"></a>
            <a href="https://vk.com"><img src="Picture/icon10.png"></a>
        </div>
    </div>
    </div>
    </div>

    <footer class="border-top" id="border-top">
        <div class="border-contain">
            <div class="footer-container">
                <div class="footer-text">
                    <p class="footer-name">&copy;GrandRead</p>
                    <p><a href="Privacy.php">Политика конфиденциальности</a></p>
                    </div>
            </div>
            <div class="container">
                <div class="footer-text">
                    <p class="footer-name">Встретимся в соцсетях</p>
                    <div class="footer-avatar">
                        <a href="https://web.telegram.org"><img src="Picture/icon9.png"></a>
                        <a href="https://vk.com"><img src="Picture/icon10.png"></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-text">
                    <p class="footer-name">Контакты</p>
                    <p>88005553535 <br />Г. Пенза, ул. Московская, д. 191</p>
                </div>
            </div>
        </div>
    </footer>
<script src="index.js"></script>
</body>
</html>
