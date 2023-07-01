<?php
session_start();

 require_once 'connect.php';
 $full_name = $_POST['full_name'];
 $login = $_POST['login'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $password_confirm = $_POST['password_confirm'];

 $email = $_POST['email'];
 $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");

 if(mysqli_num_rows($check_email) > 0){
   $_SESSION['message'] = 'Пользователь с данной почтой уже зарегистрирован!';
   header('Location: ../register.php');
}

 else{
   if($password === $password_confirm){
      $path = 'uploads/'.time() . $_FILES['avatar']['name'];
      if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'. $path)){
         $_SESSION['message'] = 'Ошибка загрузки изображения!';
         header('Location: ../register.php');
      }
         
      $password = md5($password);
   
      mysqli_query($connect, "
      INSERT INTO `users` 
      (`id`, `full_name`, `login`, `email`, `password`, `avatar`)VALUES
      (NULL, '$full_name', '$login', '$email', '$password', '$path')
      ");
   
      $_SESSION['message'] = 'Регистрация прошла успешно!';
      header('Location: ../index.php');
   
    }
    else{
      $_SESSION['message'] = 'Пароли не совпадают!';
      header('Location: ../register.php');
    }
 }
?>