<?php 
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}
include "connect.php";
include "login_get.php";

$data = $_POST;
  
if(isset($data['do_login'])) {
  $notify = array();
  if(trim($data['login']) == '') {
    $notify[] = 'Введите логин';
  }
  if(trim($data['password']) == '') {
    $notify[] = 'Введите пароль';
  }
  if(empty($notify)) {
    $login = $data['login'];
    $password = md5($data['password']);
    if($login != $server_name OR $password != $server_password) {
      $notify[] = 'Вы ввели неверный логин или пароль';
    }
    if($login == $server_name AND $password == $server_password) {
      $_SESSION['auth'] = true; 
    }
  }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/admin/css/standart.css">
  <link rel="stylesheet" href="/admin/css/admin.css">
  <link rel="stylesheet" href="/admin/css/teg.css">
  <link rel="stylesheet" href="/admin/css/popup.css">
  <title>Административная панель</title>
</head>

<body>
  <?php 
    if($_SESSION['auth']) {
      include "admin.php";
    } else {
      include "auth.php";
    }
    mysqli_close($connection);
  ?>
  
</body>