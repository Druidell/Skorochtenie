<?php require_once("config.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Главная</title>
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

    <div class="text-center">
    <div class="content">
        <h1 class="title">GrandRead - лучшие курсы по скорочтению</h1>
        <h3 class="title">Скорочтение — ключ к бесконечному миру знаний. Откройте его и ускорьте свой путь к успеху!</h3>
        <div class="slider-container">
            <div class="slider">
                <img class="slide showing" src="Picture/slider1.jpg">
                <img class="slide" src="Picture/slider2.jpg">
                <img class="slide" src="Picture/slider3.jpg">
                <img class="slide" src="Picture/slider4.jpg">
                <img class="slide" src="Picture/slider5.jpg">
            </div>
            <div class="button">
                <button class="controls" id="previous">&lt;</button>
                <button class="controls" id="next">&gt;</button>
            </div>
        </div>
    </div>
    </div>

    <div class="text-container">
    <div class="content">
        <div class="texter-contain">
            <p class="textone"><b><em>онлайн-курс</em></b></p>
            <img src="http://lh3.googleusercontent.com/w6oicP3qB7KqY56yVCS7v3_1InT6k4LtitdhxSdf3mp9RqkD5nRXxPrFGZMIN40dzX0=w300" align="right">
            <p class="texttwo"><b style="color:#FF8C00">Быстрое чтение</b><b> и<br>усвоение информации</b></h1>
            <p class="textthree"><b>Вы существенно увеличите скорость чтения, повысите качество работы с<br> информацией и закрепите умение запоминать изучаемый материал.</b></p>
            <a class="buttonone" href="Catalog.php"><span style="color:#FFFFFF">Старт потока <b style="color:#FF8C00">30 марта</b>, купите заранее</span></a>
            <div class="buttontwo-wrap">
                <a href="Catalog.php" class="buttontwo"><span class="button__icon"></span> <span class="buttontext">Записаться на курс</span></a>
            </div>
        </div>
    </div>
   </div>

    <div class=starter-container>
    <div class="content">
        <h1>Как устроен курс:</h1>
        <div class="starter-contain">
            <div class="starter-text">
                <p class="starter-name">1 Модуль</p>
                <p>
                    Улучшение дикции! Научим артикуляционной гимнастике. Расскажем, как правильно дышать. Поставим чёткое произношение с помощью скороговорок и специальных упражнений. Ваша речь станет уверенной и приятной для окружающих.
                </p>
            </div>
            <div class="starter-text">
                <p class="starter-name">2 Модуль</p>
                <p>
                    Увеличение скорости чтения! Научим читать в 2 раза быстрее и получать удовольствие от чтения. Расскажем про сканирующее чтение — сможете в 1.5 раза быстрее находить нужную информацию в тексте. На курсе вы прочитаете книги, которые пылятся на полке, и увидите первые результаты нового навыка.
                </p>
            </div>
        </div>
    </div>
    </div>

    <div class="section-container">
    <div class="content">
        <div class="section-content">
            <h2>Курс вам подходит, если:</h2>
                <div class="section-list">
                    <div class="section-item">
                        <img class="iconone" src="Picture/icon1.png"><p>Вы старше 13 лет и вам нужно много читать и надолго запоминать информацию по учебе.</p>
                    </div>    
                    <div class="section-item">
                        <img class="icontwo" src="Picture/icon2.png"><p>В работе вы имеете дело с большим количеством текстовой информации, которую необходимо осваивать.</p>
                        </div>
                    <div class="section-item">
                        <img class="iconthree" src="Picture/icon3.png"><p>Вы стремитесь к постоянному развитию и много читаете, чтобы улучшать свои профессиональные и личные навыки.</p>
                        </div>
                    <div class="section-item">
                        <img class="iconfour" src="Picture/icon4.png"><p>Вы часто забываете, о чем была недавно прочитанная книга, не умеете быстро искать нужную информацию и структурировать ее.</p>
                        </div>
                </div>
                <div class="section-button">
                    <a href="Catalog.php" class="buttontwo"><span class="button__icon"></span> <span class="buttontext">Хочу на курс!</span></a>
                </div>
        </div>
    </div>
    </div>

    <div class="middle-container">
    <div class="content">
        <h1>Наши преимущества:</h1>
        <div class="middle-contain">
            <div class="origimg">
                <div class="middle-text">
                    <p class="middle-name">Наша программа обучения навыкам скорочтения будет авторской</p>
                </div>
                <div class="middle-avatar">
                    <img src="Picture/icon5.jpg">
                </div>
                <div class="middle-text">
                    <p>
                        Что такое скорочтение. Цели, задачи и результаты программы. История возникновения
                    </p>
                </div>
            </div>
            <div class="origimg">
                <div class="middle-text">
                    <p class="middle-name">Оригинальная техника обучения скорочтению</p>
                </div>
                <div class="middle-avatar">
                    <img src="Picture/icon6.jpg">
                </div>
                <div class="middle-text">
                    <p>
                        Виды чтения. Различия, функции и применение. Измерение скорости чтения
                    </p>
                </div>
            </div>
            <div class="origimg">
                <div class="middle-text">
                    <p class="middle-name">Профессиональные преподаватели</p>
                </div>
                <div class="middle-avatar">
                    <img src="Picture/icon7.jpg">
                </div>
                <div class="middle-text">
                    <p>
                        Методика построения занятий. Дополнительные задания на уроках по скорочтению
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="sertif-container">
    <div class="content">
        <h1><strong>Подтверждение ваших знаний</strong></h1>
        <p>После окончания курса вы получаете Персональный сертификат</p>
        <img src="Picture/icon8.png">
        <div class="sertif-button">
            <a href="Catalog.php" class="buttontwo"><span class="button__icon"></span> <span class="buttontext">Хочу на курс!</span></a>
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
