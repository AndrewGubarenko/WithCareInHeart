<!DOCTYPE html>
	<html>
		<head>
			<?php
				$title = "Контакты";
				require_once "blocks/head.php";
			?>
			<link rel="stylesheet" type="text/css" href="../css/contact-styles.css">
		</head>

		<body>
			<!--NAVIGATION-->
			<?php require_once "blocks/navigation.php" ?>
			<div id="language">
				<a href="../contacts.php"><img src="../icons/Ukraine.png" alt="logo" title="Украинский" width="30" height="30"></a>
				<a href="contacts.php"><img src="../icons/Russia.png" alt="logo" title="Русский" width="30" height="30"></a>
			</div>
			<!--NAVIGATION-->

			<!--HEADER -->
			<header>
				<div class="contacts">
					
				<div>
			</header>
			<!--HEADER -->
			
			<!--/MAIN -->
			<main>
				<div class="contacts_text">
					<div id="namelist">
						<P>
							<b>Контактные телефоны:</b>
						</P>
					</div>
					<div id="list"><p>
						<i>Губаренко Владислав Сергеевич</i><br>
						(Глава правления)<br>
						Тел.(моб): +380667872611
						</p>
						<br>
						<p>
						<i>Меленчук Дмитрий Русланович</i><br>
						(член правления)<br>
						Тел.(моб): +380639382045
						</p>
					</div>
					<br>
					<div id="namelist">
						<P>
							<b>Присоединяйтесь к нам:</b>
						</P>
					</div>
					<div id="list">
						<a href="https://www.facebook.com" title="Группа в FaceBook" target="_blank">
						<img src="../icons/social/bw/facebook.png" alt="fb" title="FaceBook" width="40" height="40">
					</a>
					<a href="https://twitter.com/care_4_people" title="Группа в Twetter" target="_blank">
						<img src="../icons/social/bw/twitter.png" alt="twitter" title="Twitter" width="40" height="40">
					</a>
					<a href="https://www.instagram.com/z_turbotoiu_u_sertsi" title="Группа в Instagram" target="_blank">
						<img src="../icons/social/bw/instagram.png" alt="instagram" title="instagram" width="40" height="40">
					</a>
					<a href="https://www.youtube.com" title="Группа в YouTube" target="_blank">
						<img src="../icons/social/bw/youtube.png" alt="youtube" title="YouTube" width="40" height="40">
					</a>
					<a href="https://vk.com/public129036902" title="Группа в Vkontakte" target="_blank">
						<img src="../icons/social/bw/vkontakte.png" alt="vk" title="VKontakte" width="40" height="40">
					</a>
					</div>
					<!--<div id="namelist">
						<p><b>Юридична адреса:</b></P>
					</div>
					<div id="list">
						<p>
							м. Київ
						</p>
					</div>-->
				</div>
				<div>
					<form class="contact_form" action="../functions/contact-form-actions.php" method="post">
						<p>
	            			<label for="name">Имя:</label>
	            			<input type="text"  name="name" placeholder="Введите Ваше имя" required />
	        			</p>
				        <p>
				            <label for="email">Email:</label>
				            <input type="email" name="email" placeholder="Введите Ваш электронный адрес" required />
				            <span class="form_hint">Корректный формат "name@domainname"</span>
				        </p>
				        <p>
	            			<label for="sub">Тема письма:</label>
	            			<input type="text"  name="sub" placeholder="Введите тему письма" required />
	        			</p>
				        <p>
				            <label for="message">Текст сообщения:</label>
				            <textarea name="message" cols="80" rows="10" required ></textarea>
				        </p>
					    <input name="bezspama" type="text" style="display:none" value="" />
				        <p>
				            <button class="submit" type="submit">Отправить</button>
				        </p>
					</form>
				</div>

				<!--<div class="contacts_bottom">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28794.513505418476!2d30.942353136372546!3d50.36469967321277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6da13139fc55b9e2!2z0KHQuNC70YzQv9C-!5e0!3m2!1sru!2sua!4v1475957210336" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>-->
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