<?php
    $to = "zakir_hockey@mail.ru"; // емайл получателя данных из формы
    $tema = "Форма обратной связи на PHP"; // тема полученного емайла
    $message = "Имя ".$_POST['name']."  ";//присвоить переменной значение, полученное из формы name=name
    $message .= "E-mail: ".$_POST['email']."  "; //полученное из формы name=email
    $message .= "Номер телефона: ".$_POST['phone']."  "; //полученное из формы name=phone
    $message .= "Сообщение: ".$_POST['message']."  "; //полученное из формы name=message
    $headers = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
    mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>