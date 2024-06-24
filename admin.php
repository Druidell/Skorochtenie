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
    <title>Админ-панель</title>
</head>
<body>
<?php 
  if(isset($_POST['signup'])){
    extract($_POST);
  if(strlen($username)<3){ 
            $error[] = 'Пожалуйста, введите имя пользователя, используя как минимум 3 символа.';
        }
  if(strlen($username)>50){ 
            $error[] = 'Имя пользователя: максимальная длина 50 символов.';
        }
  if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $username)){
            $error[] = 'Неверный ввод имени пользователя. Введите строчные буквы без пробелов и цифры в начале.';
        }  
  if(strlen($email)>50){  
            $error[] = 'Email: максимальная длина 50 символов.';
        }
  if($passwordConfirm ==''){
            $error[] = 'Пожалуйста, подтвердите пароль.';
        }
  if($password != $passwordConfirm){
            $error[] = 'Пароли не совпадают.';
        }
  if(strlen($password)<5){  
            $error[] = 'Длина пароля составляет 6 символов.';
        }
  if(strlen($password)>20){ 
            $error[] = 'Пароль: максимальная длина 20 символов.';
        }
  $sql="select * from users where (username='$username' or email='$email');";
  $res=mysqli_query($dbc,$sql);
  if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    if($username==$row['username'])
    {
            $error[] ='Имя пользователя уже существует.';
        } 
    if($email==$row['email'])
    {
            $error[] ='Email уже существует.';
          } 
    }
    if(!isset($error)){ 
            $options = array("cost"=>4);
            $password = password_hash($password,PASSWORD_BCRYPT,$options);
            $result = mysqli_query($dbc,"INSERT into users(username,email,password) values('$username','$email','$password')");
    if($result)
    {
    $done=2; 
    }
    else{
            $error[] ='Что-то пошло не так.';
          }
    } 
 } 
?>

<?php 
  if(isset($error)){ 
  foreach($error as $error){ 
  echo '<p>&#x26A0;'.$error.' </p>'; 
}
}
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
    
        <h1 class="title">Админ-панель</h1>
        <h2 class="title">Регистрация пользователя</h2>
        <form action="" method="POST">
        <div class="price-form">    
        <div class="content">
            <form action="" method="post">
                    <div class="row-input">
                        <input type="text" class="price-form-input" name="username" value="<?php if(isset($error)){ echo $_POST['username'];}?>" placeholder="Введите имя пользователя" required="">
                    </div>
                    <div class="row-input">
                        <input type="email" class="price-form-input" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" placeholder="Укажите email" required="">
                    </div>
                    <div class="row-input">
                        <input type="password" class="price-form-input" name="password" placeholder="Введите пароль" required="">
                    </div>
                    <div class="row-input">
                        <input type="password" class="price-form-input" name="passwordConfirm" placeholder="Подтвердите пароль" required="">
                    </div>
                    <div class="price-form-button">
                    <button type="submit" class="price-form-button-text" name="signup">Зарегистрировать</button>
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