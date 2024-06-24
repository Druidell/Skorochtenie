<?php require_once("config.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Уроки</title>
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

    <h1 class="title">Уроки</h1>
    <div class="catalog-container" id="catalog_grid">
    <div class="catalog-lesson" id="catalog_grid">
    <div class="content">
                    <a href="#1" class="catalog-lesson-text"><p>Урок #1 - Основы<p></a>
                    <a href="#2" class="catalog-lesson-text"><p>Урок #2 - История<p></a>
                    <a href="#3" class="catalog-lesson-text"><p>Урок #3 - Метод<p></a>
                    <h3 class="catalog-lesson-name" id="1"><b>Урок #1 - Основы</b><h3>
                    <div id="1" class="catalog-lesson-container">
                    <p class="catalog-lesson-description">Любая тренировка начинается с разминки мышц, рекомендуется сначала «размять глаза», 
                        расширив периферическое зрение. Первую минуту водите по двум строкам, следующую — по трём, третью минуту — по пяти строчкам. 
                        Старайтесь чётко разглядеть все слова друг над другом, но пока не стремитесь понять их смысл. 
                        На последнем этапе упражнения по обучению скорочтению вы должны 
                        не «перемещать луч прожектора» по строкам, а уже читать максимально быстро с пониманием по одной строчке слева направо.<p>
                    </div>
                    <div class="catalog-form-button">
                   <a href="Contacts.php" class="catalog-form-button-text" type="submit" value="Send">Задать вопрос</a>
                    </div>
                    <h3 class="catalog-lesson-name"><b>Урок #2 - История</b><h3>
                    <div id="2" class="catalog-lesson-container">
                    <p class="catalog-lesson-description">Скорочтение возникло и получило развитие в XX веке. 
                        Когда человечество столкнулось с огромным потоком информации, которая нарастала день изо дня. 
                        Поэтому и возник спрос на теорию скорочтения, которая могла помочь справиться с этой информацией. 
                        Создателем первой школы по обучению быстрому чтению стала америка, преподаватель Эвелин Вуд в 1958 г. 
                        Однажды она увидела, как быстро читает ее преподаватель, это ее так поразило, что она заинтересовалась этим. 
                        Начав свое исследование, она увидела, что изучаемые люди читали по вертикали, умели видеть группы слов, а некоторые видели и целые предложения.<p>
                    </div>
                    <div class="catalog-form-button">
                   <a href="Contacts.php" class="catalog-form-button-text" type="submit" value="Send">Задать вопрос</a>
                    </div>
                    <h3 class="catalog-lesson-name"><b>Урок #3 - Метод</b><h3>
                    <div id="3" class="catalog-lesson-container">
                    <p class="catalog-lesson-description">Есть упражнения, которые научат читать эффективно и ловко. 
                        Подавление субвокализации, чтение наоборот, тренировка по таблице Шульте, фоточтение, диагональное чтение, быстрое последовательное визуальное предъявление,<p>
                    </div>
                    <div class="catalog-form-button">
                   <a href="Contacts.php" class="catalog-form-button-text" type="submit" value="Send">Задать вопрос</a>
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