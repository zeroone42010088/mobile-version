<?php

$post = (!empty($_POST)) ? true : false;

if($post)
{
$email = trim($_POST['email']);
$email = htmlspecialchars($_POST['email']);    
$tel = htmlspecialchars($_POST["tel"]);
$name = htmlspecialchars($_POST['name']);
$message = htmlspecialchars($_POST['message']);

$error = '';



// Проверка телефона
function ValidateTel($valueTel)
/*{
$regexTel = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
if($valueTel == "") {
return false;
} else {
$string = preg_replace($regexTel, "", $valueTel);
}
return empty($string) ? true : false;
}
if(!$email)
{
$error .= "Пожалуйста введите email<br />";
}
if($email && !ValidateTel($email))
{
$error .= "Введите корректный email<br />";
}
if(!$error)

// (length)
if(!$message || strlen($message) < 1)
{
$error .= "Введите ваше сообщение<br />";
}*/
if(!$error)
{


/*$name_tema = "=?utf-8?b?". base64_encode($name) ."?="; */

$subject ="Новая заявка с сайта remontservo.ru. Через обратную связь";
$subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";

$message1 ="\n\nE-mail: " .$email.  "\n\nТелефон: " .$tel.  "\n\nМодель: ".$name.  .$message."\n\n";  

$header = "Content-Type: text/plain; charset=utf-8\n";

$header .= "From: Новая заявка <zakaz@remontservo.ru>\n\n";	
$mail = mail("114polaris@gmail.com", $subject1, iconv ('utf-8', 'windows-1251', $message1), iconv ('utf-8', 'windows-1251', $header));

if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>