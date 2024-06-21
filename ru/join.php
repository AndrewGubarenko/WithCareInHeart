<!DOCTYPE html>
	<html>
		<head>
			<?php
				$title = 'Присоединиться к нам';
				require_once "blocks/head.php";
			?>
			<link rel="stylesheet" type="text/css" href="../css/joinstyle.css">
		</head>
		<body>
			<!--NAVIGATION-->
			<?php require_once "blocks/navigation.php" ?>
			<div id="language">
				<a href="../join.php"><img src="../icons/Ukraine.png" alt="logo" title="Украинский" width="30" height="30"></a>
				<a href="join.php"><img src="../icons/Russia.png" alt="logo" title="Русский" width="30" height="30"></a>
			</div>
			<!--NAVIGATION-->

			<!--HEADER -->
			<header class="join">
				<div>
					<h1>Присоединиться к нам</h1>
				</div>
			</header>
			<!--/HEADER -->

			<!--MAIN -->
			<main>
				<form action="../functions/join-form-actions.php" method="post">
					<p id="anketa">Заполните анкету волонтёра</p>
					<p id="choise">Я хочу помочь следующими навыками:</p>
					<br>
					<div class="checkbox">
						<input name="check[1]" type="checkbox" value="Написание и редактирование статей" /> Написание и редактирование статей 
							<br />
						<input name="check[2]" type="checkbox" value="Программы по сбору средств" /> Программы по сбору средств
							<br />
						<input name="check[3]" type="checkbox" value="Помощь с фотографиями и видео" /> Помощь с фотографиями и видео (съемка, редактирование) 
							<br />
						<input name="check[4]" type="checkbox" value="SMM" /> SMM 
						<br />
						<input name="check[5]" type="checkbox" value="Участие в массовых мероприятиях в качестве волонтёра" /> Участие в массовых мероприятиях в качестве волонтёра <br />
						<input name="check[6]" type="checkbox" value="Другое(указую в сообщении)" /> Другое(укажу в сообщении) <br />
					</div>
						<br />
	  				<div class="contact_form">
						<p id="ican">Я могу помогать в качестве волонтёра выполняя следующую работу:</p>
						<p>
				            <label for="message">Текст сообщения:</label>
				            <textarea name="message" cols="80" rows="10" required ></textarea>
				        </p>
						<p>
	            			<label for="name">ФИО:</label>
	            			<input type="text"  name="name" placeholder="Введите ФИО" required />
	        			</p>
				        <p>
				            <label for="email">Email:</label>
				            <input type="email" name="email" placeholder="Введите Ваш электронный адрес" required />
				            <span class="form_hint">Корректный формат "name@domainname"</span>
				        </p>
				        <p>
	            			<label for="phone">Телефон:</label>
	            			<input type="text"  name="phone" placeholder="Введите номер телефона" required />
	        			</p>
	        			<p>
	            			<label for="city">Город проживания:</label>
	            			<input type="text"  name="city" placeholder="Введите город проживания" required />
	        			</p>
	        			<p>
	            			<label for="soc">Профиль в соц. сетях:</label>
	            			<input type="text"  name="soc" placeholder="вставьте ссилку на вашу страничку"/>
	        			</p>
					    <input name="bezspama" type="text" style="display:none" value="" />
				        <p>
				            <button class="submit" type="submit">Отправить</button>
				        </p>

					</div>
				</form>
				<div class="join-bottom">
					
				</div>
			</main>
			<!--/MAIN -->

			<!--FOOTER-->
			<?php require_once "blocks/footer.php";?>
			<!--FOOTER-->
			
			<!--SCROLL-->
			<p id="back-top"><a href="#top"><span></span>Вверх</a></p>
			<!--SCROLL-->
		</body>
	</html>