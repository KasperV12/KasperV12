<?php
session_start();

//Добавляем файл подключения к БД
require_once("dbconnect.php");

//Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
$_SESSION["error_messages"] = '';

//Объявляем ячейку для добавления успешных сообщений
$_SESSION["success_messages"] = '';

$last_name = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

$query = mysqli_query($mysqli,"SELECT * FROM `users` WHERE `email` ='". $email ."'AND `last_name` ='". $last_name ."'");
if($query) {
  $result = $query->fetch_array(MYSQLI_ASSOC);

  if ($result) {
    echo $result['mid-point'];
  }
  else{
    echo "ne nashol";
  }
}
else{
  die(mysqli_error($mysqli));
}
 ?>
