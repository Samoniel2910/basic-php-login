<?php
session_start();
if(@$_SESSION['user']){
   header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Авторизация и регистрация</title>
   <link rel="stylesheet" href="assets/css/main.css"></link>
</head> 
<body>
   <form class="form" action="inc/signin.php" method="post">
      <h1>Гусев Семён Максимович, ИСП-320/1, практическая работа</h1>
      <br>
      <label for="">Логин</label>
      <input type="text" placeholder="Введите логин" name="login" required>
      <label for="">Пароль</label>
      <input type="password" placeholder="Введите пароль" name="password" required>
      <button type="submit" class="log">Войти</button>
      
      <p>Нет аккаунта? <a href="register.php">Регистрация</a></p>

      <?php
      if(@$_SESSION['message']){
         echo '<p class="msg" id="msg">'. $_SESSION['message']. '</p>';
      }
      unset($_SESSION['message']);
      ?>
   </form>
</body>
</html>