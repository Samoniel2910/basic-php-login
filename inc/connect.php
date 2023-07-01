<?php
   $connect = new mysqli('localhost', 'root', '', 'test');

   if(!$connect){
      die('DB Connection Error!');
   }
?>