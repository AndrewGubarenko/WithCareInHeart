<!DOCTYPE html>
	<html>
		<head>
			<?php
				$title = 'Приєднатися до нас';
				require_once "blocks/head.php";
			?>
			<link rel="stylesheet" type="text/css" href="css/joinstyle.css">
		</head>
		<body>
			<!--NAVIGATION-->
			<?php require_once "blocks/navigation.php" ?>
			<div id="language">
				<a href="join.php"><img src="icons/Ukraine.png" alt="logo" title="Українська" width="30" height="30"></a>
				<a href="ru/join.php"><img src="icons/Russia.png" alt="logo" title="Російська" width="30" height="30"></a>
			</div>
			<!--NAVIGATION-->

			<!--HEADER -->
			<header class="join">
				<div>
					<h1>Приєднатися до нас</h1>
				</div>
			</header>
			<!--/HEADER -->

			<!--MAIN -->
			<main>
				<form action="functions/join-form-actions.php" method="post">
					<p id="anketa">Заповніть анкету волонтера</p>
					<p id="choise">Я хочу допомогти наступними навичками:</p>
					<br>
					<div class="checkbox">
						<input name="check[1]" type="checkbox" value="Написання та редагування статей" /> Написання та редагування статей 
							<br />
						<input name="check[2]" type="checkbox" value="Програми по збору коштів" /> Програми по збору коштів 
							<br />
						<input name="check[3]" type="checkbox" value="Допомога з фотографіями та відео" /> Допомога з фотографіями та відео (зйомки, редагування) 
							<br />
						<input name="check[4]" type="checkbox" value="SMM" /> SMM 
						<br />
						<input name="check[5]" type="checkbox" value="Участь у масових заходах в якості волонтера" /> Участь у масових заходах в якості волонтера  <br />
						<input name="check[6]" type="checkbox" value="Інше(вказую у повідомленні)" /> Інше (вказую у повідомленні) <br />
					</div>
						<br />
	  				<div class="contact_form">
						<p id="ican">Я можу допомагати в якості волонтера виконуючи наступну роботу:</p>
						<p>
				            <label for="message">Текст повідомлення:</label>
				            <textarea name="message" cols="80" rows="10" required ></textarea>
				        </p>
						<p>
	            			<label for="name">ПІБ:</label>
	            			<input type="text"  name="name" placeholder="Введіть ПІБ" required />
	        			</p>
				        <p>
				            <label for="email">Email:</label>
				            <input type="email" name="email" placeholder="Введіть Вашу електронну адресу" required />
				            <span class="form_hint">Коректний формат "name@domainname"</span>
				        </p>
				        <p>
	            			<label for="phone">Телефон:</label>
	            			<input type="text"  name="phone" placeholder="Введіть номер телефону" required />
	        			</p>
	        			<p>
	            			<label for="city">Місто проживання:</label>
	            			<input type="text"  name="city" placeholder="Введіть місто проживання" required />
	        			</p>
	        			<p>
	            			<label for="soc">Профіль у соц. мережі:</label>
	            			<input type="text"  name="soc" placeholder="вставте посилання на вашу сторінку"/>
	        			</p>
					    <input name="bezspama" type="text" style="display:none" value="" />
				        <p>
				            <button class="submit" type="submit">Надіслати</button>
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
			<p id="back-top"><a href="#top"><span></span>Вгору</a></p>
			<!--SCROLL-->
		</body>
	</html>