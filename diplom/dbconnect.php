<?php
     // Указываем кодировку
     header('Content-Type: text/html; charset=utf-8');

     $server = "localhost";
     $username = "root";
     $password = "";
     $database = "reg2";

     // Подключение к базе данный через MySQLi
     $mysqli = new mysqli($server, $username, $password, $database);


     if ($mysqli->connect_errno) {
             die("<p><strong>Ошибка подключения к БД</strong></p><p><strong>Код ошибки: </strong> ". $mysqli->connect_errno ." </p><p><strong>Описание ошибки:</strong> ".$mysqli->connect_error."</p>");
     }

     // Устанавливаем кодировку подключения
     $mysqli->set_charset('utf8');
     $address_site = "http://zlovedesign1";
 ?>
