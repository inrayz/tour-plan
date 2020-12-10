<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];
$mail = $_POST['mail'];

// Формирование самого письма
if ($message) {
  $title = "Письмо Best Tour Plan";
  $body = "
    <h2>Новое письмо</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br><br>
    <b>Сообщение:</b><br>$message";
}
elseif ($email) {
  $title = "Письмо Best Tour Plan";
  $body = "
    <h2>Новое письмо</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br><br>
    <b>mail:</b> $email<br>
    <b>Сообщение:</b><br>$message"; 
}
elseif ($mail) {
  $title = "Подписка на новости Best Tour Plan";
  $body = "
    <h2>Новое письмо</h2>
    <b>Почта:</b> $mail<br>";
}

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'inrayz@bk.ru'; // Логин на почте
    $mail->Password   = 'ovv.2442'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('inrayz@bk.ru', 'Вячеслав Обрывалин'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('inrayz@yandex.ru');  

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
if ($message) header('Location: thankyou.html'); 
elseif ($email) header('Location: thankyou.html');
elseif ($mail) {
header('Location: subscribe.html');
}