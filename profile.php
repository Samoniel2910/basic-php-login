<?php
session_start();
if(!@$_SESSION['user']){
   header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
   <div class="form">
      <img src="<?=$_SESSION['user']['avatar']?>" width="100" alt="">
      <h2><?=$_SESSION['user']['full_name']?></h2>
      <a href="#"><?=$_SESSION['user']['email']?></a>
      <a href="inc/logout.php">Выйти</a>
      <a href="inc/delete.php">Удалить аккаунт</a>
   </div>
</body>
</html>