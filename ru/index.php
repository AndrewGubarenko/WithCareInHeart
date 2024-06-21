<!DOCTYPE html>
	<html>
		<head>
			<?php
				$title = 'Благотворительный фонд "С заботой в сердце"';
				require_once "blocks/head.php";
				require_once "count/stat.php";
			?>
		<!--POPUP FORM-->
			<script src="../script/jquery.js"></script>
			<script>
				$(function() {
					$("a[rel]").overlay(function() {
						var wrap = this.getContent().find("div.wrap");
						if (wrap.is(":empty")) {
							wrap.load(this.getTrigger().attr("href"));
						}
					});
				});
			</script>
			<link type="text/css" href="../css/formstyle.css" rel="stylesheet"/>
		<!--POPUP FORM-->

		</head>

		<body>
			<!--NAVIGATION-->
			<?php require_once "blocks/navigation.php" ?>
			<div id="language">
				<a href="../index.php"><img src="../icons/Ukraine.png" alt="logo" title="Украинский" width="30" height="30"></a>
				<a href="index.php"><img src="../icons/Russia.png" alt="logo" title="Русский" width="30" height="30"></a>
			</div>
			<!--NAVIGATION-->

			<!--HEADER -->
			<header class="header">

				<div id="title">
					<h1>С заботой в сердце</h1>
				</div>
					<div id="subtext">
						<p>«Ти должен изменить в себе то, что хочешь увидеть в измененном Мире»
						<br>
						<br>
						Махатма Ганди
						</p>
					</div>

				<a href="help.php" id="topbuttondonate">
					<div id="icon_donate">
						<img src="../icons/donate/11.png" alt="List picture" width="30" height="30">
					</div>
							<p>Я хочу помочь</p>
				</a>
				<a href = "blocks/contact.html" id="topbuttonhelp" rel="#overlay">
					<div id="icon_help">
						<img src="../icons/donate/sos.png" alt="List picture" width="40" height="40">
					</div>
					<p>Мне нужна помощь</p>
				</a>

				<div class="overlay" id="overlay">
					<div class="wrap"></div>
				</div>
				
			</header>
			<!--/HEADER -->

			<!--MAIN -->
			<main>
				<div class="mainbox">

					<div class="box_item">
						<img src="../icons/donate/7.png" alt="List picture" width="100" height="100">
						<div class="collection_text">
							<h3>Пожертвовать</h3>
							<div class="inscript">
								<p>Ваши деньги идут на помощь людям, которым она очень нужна и важна.
								</p>
							</div>
								<a href="help.php">
									<button>Помочь</button>
								</a>
						</div>
					</div>

					<div class="box_item">
						<img src="../icons/donate/Ecommerce-Handshake-icon.png" alt="List picture" width="100" height="100">
						<div class="collection_text">
							<h3>Присоединиться</h3>
							<div class="inscript">
								<p>Присоединяйтесь к нам и помогайте людям, которым нужна Ваша помощь.
								</p>
							</div>
								<a href="join.php">
									<button>Присоединиться</button>
								</a>
						</div>
					</div>

					<div class="box_item">
						<img src="../icons/donate/document.png" alt="List picture" width="100" height="100">
						<div class="collection_text">
							<h3>Документация</h3>
							<div class="inscript">
								<p>Тут можна ознакомиться с отчетной и другой документацией нашей организации.
								</p>
							</div>
								<a href="https://drive.google.com/file/d/0BxtPqZe8MTO5SXZ6Wkc4LTJzN2c/view?usp=sharing" target="_blank">
									<button>Читать</button>
								</a>
						</div>
					</div>

				</div>

				<div id="partners">
					<p>Наши партнёры: </p>
					<a href="http://allatra.in/" title="Аллатра" target="_blank">
						<img src="../logo/Allatra_ru.jpg" alt="allatra" title="Allatra" width="300" height="">
					</a>
				</div>

				<div id="collection-bottom">
					<h2>Только вместе<small>
					<br> 
					мы сможем оказать помощь тем, кто в ней нуждается</small></h2>
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