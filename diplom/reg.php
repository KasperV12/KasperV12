<?php
session_start();

//Добавляем файл подключения к БД
require_once("dbconnect.php");

//Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
$_SESSION["error_messages"] = '';

//Объявляем ячейку для добавления успешных сообщений
$_SESSION["success_messages"] = '';

$last_name = (trim($_POST['last_name']));
$email = (trim($_POST['email']));
var_dump($email);
var_dump($last_name);
die();
$query = mysqli_query($mysqli,"SELECT * FROM `users` WHERE `email` ='". $email ."'AND `last_name` ='". $last_name ."'");
if($query) {
  $result = $query->fetch_array(MYSQLI_ASSOC);
  var_dump($result);
  if ($result) {
    echo $result[0]['mid-point'];
  }
  else{
    echo "ne nashol";
  }
}
else{
  die(mysqli_error($mysqli));
}
 ?>
