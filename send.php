<?php

$fio = $_POST['name'];
$email = $_POST['email'];
$bday = $_POST['bday'];
$message = $_POST['message'];


if (mail('join@ecwid.com', $fio , ". Адрес электронной почты:".$email.". Текст сообщения: ".$message ,"From: example2@mail.ru \r\n"))
{
    echo "сообщение успешно отправлено";
} 
else {
    echo "при отправке сообщения возникли ошибки";
}
