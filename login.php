<?php require_once("config.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="index.css">
	<title>Авторизация</title>
</head>
<body>
<form action="login_process.php" method="POST">
<?php 
if(isset($_GET['loginerror'])) {
	$loginerror=$_GET['loginerror'];
}
 if(!empty($loginerror)){  echo '<p>Неверные учетные данные для входа в систему, пожалуйста, повторите Попытку.</p>'; } 
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


    <h1 class="title">Авторизация</h1>
    <div class="content">
        <div class="price-form">  
            <form action="" method="post">
                <div class="row-input">
                    <input type="text" class="price-form-input" name="login_var" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" placeholder="Введите имя пользователя или email"  required="">
                </div>
                <div class="row-input">
                    <input type="password" class="price-form-input" name="password" placeholder="Введите пароль" required="">
                </div>
                <div class="price-form-button">
                <button type="submit" class="price-form-button-text" name="sublogin">Войти</button>
                </div>
                <div class="price-form-text">
                    <p>Забыли пароль или у вас нет учетной записи? - <a href="Contacts.php">напишите сюда</a> </p>
                </div>
            </form>
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