<?php require_once("config.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Каталог</title>
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

    <h1 class="title">Каталог</h1>
    <h3 class="title">Выбери свой курс</h3>
    <div class="catalog-container">
    <div class="content">
        <h1>МАКСИМАЛЬНЫЙ КУРС - 5000 руб.</h1>
        <div class="catalog-contain">
            <div class="catalog-text">
                <div class="catalog-avatar">
                    <img src="Picture/icon14.jpg" alt="Catalog">
                </div>
            </div>
            <div class="catalog-text">
                <p class="catalog-name">Максимальный - 5000 руб.</p>
                <p>
                    Основные техники скорочтения, просмотр уроков в любое время, электронный сертификат, проверка знаний тестами, доступ к курсам не ограниченный по времени, обратная связь, возможность задавать вопросы преподавателю, моментальная обратная связь во время урока, увеличение скорости в 3-5 раз: до 6 500 знаков!
                </p>
            </div>
        </div>
        <div class="catalog-button">
            <a href="#price-container" class="buttontwo"><span class="button__icon"></span> <span class="buttontext">Хочу на курс!</span></a>
        </div>
    </div>
    </div>
    
    <div class="catalog-container">
    <div class="content">
        <h1>БАЗОВЫЙ КУРС - 3000 руб.</h1>
        <div class="catalog-contain">
            <div class="catalog-text">
                <div class="catalog-avatar">
                    <img src="Picture/icon15.jpg" alt="Catalog">
                </div>
            </div>
            <div class="catalog-text">
                <p class="catalog-name">Базовый - 3000 руб.</p>
                <p>
                    Основные техники скорочтения, просмотр уроков в любое время, электронный сертификат, проверка знаний тестами, доступ к курсам не ограниченный по времени, возможность задавать вопросы преподавателю!
                </p>
            </div>
        </div>
        <div class="catalog-button">
            <a href="#price-container" class="buttontwo"><span class="button__icon"></span> <span class="buttontext">Хочу на курс!</span></a>
        </div>
    </div>
    </div>

   <div class=price-container id="price-container">
   <div class="content">
               <div class="price-form">
                   <h2 class="price-form-title">Введите данные для оплаты</h2>
                   <form action="indexphp.php" method="post">
                       <div class="row">
                           <div class="row-input">
                            <input type="text" class="price-form-input" name="description" placeholder="Название курса" required="">
                            </div>
                           <div class="row-input">
                               <input type="text" class="price-form-input" name="fio" placeholder="Введите свое полное имя" required>
                           </div>
                           <div class="row-input">
                               <input type="text" class="price-form-input" name="email" placeholder="Укажите адрес электронной почты" required>
                           </div>
                           <div class="row-input">
                               <input type="number" class="price-form-input" name="number" placeholder="Номер телефона" required="">
                           </div>
                       </div>
                       <div class="price-form-button">
                   <button class="price-form-button-text" type="submit" value="Send">Отправить заявку</button>
                       </div>
                   </form>
                   <div class="price-form-text">
                       <p>
                           Нажимая кнопку, принимаю условия <a href="Privacy.php">политики конфиденциальности</a>
                       </p>
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
