<?php

/* Переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$sub = htmlspecialchars($_POST["sub"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address = "care4ua@gmail.com";

/* Формат письма */
$mes = "Повідомлення з сайту http://www.withcareinheart.in.ua.\n
<pre>
Ім'я відправника: $name 
Електронна адреса відправника: $email
Тема листа: $sub
Текст повідомлення:
$message";


if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n"; 
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 5; URL=http://www.withcareinheart.in.ua/index.php');
	echo 'Листа відправлено, через 5 секунд ви повернетесь на головну';}
else {
	header('Refresh: 5; URL=http://www.withcareinheart.in.ua/index.php');
	echo 'Листа не відправлено, через 5 секунд ви повернетесь на головну';}
}
/*echo $from;
echo $mes;*/
exit; /* Выход без сообщения, если поле bezspama чем-то заполнено */
?>