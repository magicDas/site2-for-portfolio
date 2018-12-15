<?php
//Принимаем простые данные
$name=$_POST['username'];
$phone=$_POST['phone'];
$what=$_POST['what'];
//Тут указываем на какой ящик посылаем письмо
$to = "magicdas@i.ua";
//Далее идет тема и само сообщение
$subject = "Заявка с сайта ТОК-СЕРВИС";
$message = "
Письмо отправлено из моей формы.<br />
Пользователь хочет: ".htmlspecialchars($what)."<br />
Имя: "htmlspecialchars($name)."<br />
Телефон: "htmlspecialchars($phone);
$headers = "From: tokservice.pro <site-email@tokservice.pro>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?>
