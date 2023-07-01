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
   <title>Регистрация</title>
   <link rel="stylesheet" href="assets/css/main.css"></link>
</head>
<body>
   <form class="form" action="inc/signup.php" method="post" id="form" enctype="multipart/form-data">
      <label for="">Фио</label>
      <input type="text" placeholder="Введите своё полное имя" name="full_name" required>
      <label for="">Логин</label>
      <input type="text" placeholder="Введите логин" name="login"   required>
      <label for="email">Почта</label>
      <input type="email" required placeholder="Введите почту" name="email">
      <label for="">Пароль</label>
      <input type="password" placeholder="Введите пароль" name="password" id="password" required>
      <label for="">Подтвердите пароль</label>
      <input type="password" placeholder="Подтвердите пароль" name="password_confirm" id="confirm_password" required>
      <label for="">Изображение</label>
      <input type="file" name="avatar">
      <button type="submit" class="log">Зарегистрироваться</button>
      <p>Есть аккаунт? <a href="index.php">Войти</a></p>

      <?php
      if(@$_SESSION['message']){
         echo '<p class="msg" id="msg">'. $_SESSION['message']. '</p>';
      }
      unset($_SESSION['message']);

      
      ?>
      
   </form>
</body>
</html>