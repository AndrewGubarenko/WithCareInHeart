<!DOCTYPE html>
	<html>
		<head>
			<?php
				$title = "Медіа";
				require_once "blocks/head.php";
				require_once "functions/functions.php";
			?>
		</head>

		<body>
			<!--NAVIGATION-->
			<?php require_once "blocks/navigation.php" ?>
			<div id="language">
				<a href="media.php"><img src="icons/Ukraine.png" alt="logo" title="Українська" width="30" height="30"></a>
				<a href="ru/media.php"><img src="icons/Russia.png" alt="logo" title="Російська" width="30" height="30"></a>
			</div>
			<!--NAVIGATION-->

			<!--HEADER -->
			<header>
				<div class="media">
					<h1>Медіа</h1>
				<div>
			</header>
			<!--HEADER -->
			
			<!--MAIN -->
			<main id="mainmedia">
				<div id="leftCol">
					<div class="container">
					<h2 class="collection-title">Ми <small>у дзеркалі ЗМІ</small></h2>
						<div class="collections">
							<div class="collection-item-outer">
								<div class="collection-item">
									<video controls>
										<source src="video/Our_first_project.mp4" type="video/mp4">
									</video>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="rightCol">

					<div id="banner1">
						<p><strong>Зробити пожертву в один клік</strong></p>
						<br>
						<a href="https://my-payments.privatbank.ua/mypayments/customauth/identification/fp/static?staticToken=4829495205b0e57958536e611312d165wcea29rb" title="Онлайн пожертвування" target="_blank">
							<img src="icons/credit-card.png" alt="One Click Donate" title = "One Click Donate" width="100" height="100">
						</a>
					</div>

				</div>
			</main>
			<!--MAIN -->

			<!--BOTTOM-->
			<div class="media_bottom"></div>
			<!--BOTTOM-->

			<!--FOOTER-->
			<?php require_once "blocks/footer.php";?>
			<!--FOOTER-->
			
			<!--SCROLL-->
			<p id="back-top"><a href="#top"><span></span>Вгору</a></p>
			<!--SCROLL-->
		</body>

	</html>