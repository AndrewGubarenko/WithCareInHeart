<?php

/* Задаем переменные */
$abilities = $_POST["check"];
$message = htmlspecialchars($_POST["message"]);
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$phone = htmlspecialchars($_POST["phone"]);
$city = htmlspecialchars($_POST["city"]);
$soc = htmlspecialchars($_POST["soc"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

$printabilities[] = "";
foreach ($abilities as $value) {
	if (empty($value)) {
		continue;
	}
	$printabilities[] = $value;
	}
/* Ваш адрес и тема сообщения */
$address = "care4ua@gmail.com";
$theme = "Запит на приєднання волонтера";

/* Формат письма */
$mes = "Повідомлення з сайту http://www.withcareinheart.in.ua.\n

Тема повідомлення: $theme

Мої навички:	
		$printabilities[1]
		$printabilities[2]
		$printabilities[3]
		$printabilities[4]
		$printabilities[5]
		$printabilities[6]

Текст повідомлення:
	$message

Ім'я відправника: $name 
Електронна адреса відправника: $email 
Телефон: $phone
Місто проживання: $city
Сторінка у мережі: $soc";

if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
	$from  = "From: $name <$email> \r\n Reply-To: $email \r\n"; 

	if (mail($address, $phone, $mes, $from)) {
		header('Refresh: 5; URL=http://www.withcareinheart.in.ua/index.php');
		echo 'Листа відправлено, через 5 секунд ви повернетесь на головну';
		mail($email, $from);}
	else {
		header('Refresh: 5; URL=http://www.withcareinheart.in.ua/join.php');
		echo 'Листа не відправлено, через 5 секунд ви повернетесь назад';}
}
/*echo $from;
echo $mes;*/
exit; /* Выход без сообщения, если поле bezspama чем-то заполнено */
?>