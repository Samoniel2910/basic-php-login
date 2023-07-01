<?php
   session_start();
   $email=$_SESSION['user']['email'];
	include('connect.php');
	mysqli_query($connect, "delete from `users` where `users`.`email`='$email'");
   unset($_SESSION['user']);
   $_SESSION['message'] = 'Вы удалили свой аккаунт!';
   header('location: ../index.php')
?>