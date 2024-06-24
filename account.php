<?php require_once("config.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:login.php"); 
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($dbc, "SELECT * FROM users WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
$username = $res['username']; 
$email = $res['email'];  
}
?> 
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <title>Личный кабинет </title>
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


    <h1 class="title">Личный кабинет</h1>
    <div class="account-container">
    <div class="content">
        <img src="Picture/icon12.png">
        <p class="textone">Добро пожаловать <span style="color:#33CC00"><?php echo $username; ?></span> </p>
        <div class="account-catalog-button">
                <a href="course.php" class="buttontext" type="submit" value="Send">Курс</a>
            </div>
            <?php
            if (!empty($_SESSION['login_sess']) and $_SESSION['role'] === 'Admin') { ?> 
            <div class="account-catalog-button">
                <a href="admin.php" class="buttontext" type="submit" value="Send">Админ-панель</a>
            </div>
            <?php } ?>
        <div class="account-form-input">
            <p class="accounttextthree"><b>Имя пользователя</b></p>
            <p class="accounttextthree"><?php echo $username; ?></p>
            <div style="border-bottom: solid 1px #000000;"></div>
            <p class="accounttextthree"><b>Email</b></p>
            <p class="accounttextthree"><?php echo $email; ?></p>
        </div>
        
        
            <div class="catalog-button">
                <a href="logout.php" class="logout" type="submit" value="Send">Выйти</a>
            </div>
    </div>
    </div>


    <footer class="border-top" id="border-top">
        <div class="border-contain">
            <div class="footer-container">
                <div class="footer-text">
                    <p class="footer-name">&copy;GrandRead</p>
                    <p><a href="Privacy.html">Политика конфиденциальности</a></p>
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
</body>
<script src="index.js"></script>
</html>