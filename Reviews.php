<?php require_once("config.php");?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Отзывы</title>
</head>
<body>
<?php
  /* Принимаем данные из формы */
  $reviewsname = $_POST["reviewsname"];
  $reviewsemail = $_POST["reviewsemail"];
  $reviewsnumber = $_POST["reviewsnumber"];
  $reviewsdescription = $_POST["reviewsdescription"];
  $result = mysqli_query($dbc,"INSERT into reviews(reviewsname,reviewsemail,reviewsnumber,reviewsdescription) values('$reviewsname', '$reviewsemail', '$reviewsnumber', '$reviewsdescription')");// Добавляем комментарий в таблицу
?>

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

    <h1 class="title">Отзывы пользователей</h1>
    <div class="reviews-container">
    <div class="content">
        <div class="reviews-contain">
            <div class="reviews">
                <div class="reviews-avatar">
                    <img src="Picture/icon13.png">
                </div>
                <div class="reviews-text">
                    <p class="reviews-name">Денис</p>
                    <p class="reviews-role"><span style="color:#FFD700">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
                    <p>
                        Хороший курс скорочтения.
                    </p>
                </div>
            </div>
            <div class="reviews">
                <div class="reviews-avatar">
                    <img src="Picture/icon13.png">
                </div>
                <div class="reviews-text">
                    <p class="reviews-name">Александр</p>
                    <p class="reviews-role"><span style="color:#FFD700">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
                    <p>
                        Отличный курс скорочтения.
                    </p>
                </div>
            </div>
            <div class="reviews">
                <div class="reviews-avatar">
                    <img src="Picture/icon13.png">
                </div>
                <div class="reviews-text">
                    <p class="reviews-name">Мария</p>
                    <p class="reviews-role"><span style="color:#FFD700">&#9733;&#9733;&#9733;&#9733;&#9733;</span></p>
                    <p>
                        Дешевый курс скорочтения.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php
    if ($_SESSION['login_sess']!='') { ?> 
        <div class=price-container id="price-container">
        <div class="content">
        <div class="price-form">
            <h2 class="price-form-title">Введите данные для оплаты</h2>
            <form action="" method="post">
                <div class="row">
                    <div class="row-input">
                        <input type="text" class="price-form-input" name="reviewsname" value="<?php if(isset($error)){ echo $_POST['reviewsname'];}?>" placeholder="Введите свое полное имя" required>
                    </div>
                    <div class="row-input">
                        <input type="text" class="price-form-input" name="reviewsemail" value="<?php if(isset($error)){ echo $_POST['reviewsemail'];}?>" placeholder="Укажите адрес электронной почты" required>
                    </div>
                    <div class="row-input">
                        <input type="number" class="price-form-input" name="reviewsnumber" value="<?php if(isset($error)){ echo $_POST['reviewsnumber'];}?>" min="0" max="5" placeholder="Оценка" required="">
                    </div>
                    <div class="row-input">
                        <input type="text" class="price-form-input" name="reviewsdescription" value="<?php if(isset($error)){ echo $_POST['reviewsdescription'];}?>" placeholder="Отзыв" required="">
                    </div>
                </div>
                <div class="price-form-button">
            <button class="price-form-button-text" type="submit" value="Send">Отправить заявку</button>
                </div>
            </form>
            <div class="price-form-text">
                <p>Заказать на сайте или по телефону.</p>
            </div>
            <div class="price-form-text">
                <p>
                    Нажимая кнопку, принимаю условия <a href="Privacy.php">политики конфиденциальности</a>
                </p>
        </div>
        </div>
        </div>
    <?php } else { ?>
        <div class=price-container id="price-container">
        <div class="content">
        <div class="price-form">
            <h2 class="price-form-title">Для написания отзыва - авторизуйтесь</h2>
        </div>
        </div>
        </div>
    <?php } ?>

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
