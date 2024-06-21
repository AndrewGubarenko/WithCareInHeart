<!DOCTYPE html>
	<html>
		<head>
			<?php
				$title = 'Благодійний фонд "З турботою у серці"';
				require_once "blocks/head.php";
				require_once "count/stat.php";
			?>
		<!--POPUP FORM-->
			<script src="script/jquery.js"></script>
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
			<link type="text/css" href="css/formstyle.css" rel="stylesheet"/>
		<!--POPUP FORM-->

		</head>

		<body>
			<!--NAVIGATION-->
			<?php require_once "blocks/navigation.php" ?>
			<div id="language">
				<a href="index.php"><img src="icons/Ukraine.png" alt="logo" title="Українська" width="30" height="30"></a>
				<a href="ru/index.php"><img src="icons/Russia.png" alt="logo" title="Російська" width="30" height="30"></a>
			</div>
			<!--NAVIGATION-->

			<!--HEADER -->
			<header class="header">

				<div id="title">
					<h1>З турботою у серці</h1>
				</div>
					<div id="subtext">
						<p>«Ти повинен змінити в собі те, що хочеш побачити у зміненому Cвіті»
						<br>
						<br>
						Махатма Ганді
						</p>
					</div>

				<a href="help.php" id="topbuttondonate">
					<div id="icon_donate">
						<img src="icons/donate/11.png" alt="List picture" width="30" height="30">
					</div>
							<p>Я хочу допомогти</p>
				</a>
				<a href = "blocks/contact.html" id="topbuttonhelp" rel="#overlay">
					<div id="icon_help">
						<img src="icons/donate/sos.png" alt="List picture" width="40" height="40">
					</div>
					<p>Мені потрібна допомога</p>
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
						<img src="icons/donate/7.png" alt="List picture" width="100" height="100">
						<div class="collection_text">
							<h3>Зробити пожертву</h3>
							<div class="inscript">
								<p>Ваші кошти йдуть на допомогу людям, яким вона вкрай необхідна та важлива.
								</p>
							</div>
								<a href="help.php">
									<button>Допомогти</button>
								</a>
						</div>
					</div>

					<div class="box_item">
						<img src="icons/donate/Ecommerce-Handshake-icon.png" alt="List picture" width="100" height="100">
						<div class="collection_text">
							<h3>Приєднатися</h3>
							<div class="inscript">
								<p>Приєднуйтеся до нас та допомагайте людям, яким необхідна Ваша допомога.
								</p>
							</div>
								<a href="join.php">
									<button>Приєднатися</button>
								</a>
						</div>
					</div>

					<div class="box_item">
						<img src="icons/donate/document.png" alt="List picture" width="100" height="100">
						<div class="collection_text">
							<h3>Документація</h3>
							<div class="inscript">
								<p>Тут можна ознайомитися із звітною та іншою документацією нашої організації.
								</p>
							</div>
								<a href="https://drive.google.com/file/d/0BxtPqZe8MTO5SXZ6Wkc4LTJzN2c/view?usp=sharing" target="_blank">
									<button>Читати</button>
								</a>
						</div>
					</div>

				</div>

				<div id="partners">
					<p>Наші партнери: </p>
					<a href="http://allatra.in/" title="Аллатра" target="_blank">
						<img src="logo/Allatra_ukr.jpg" alt="allatra" title="Allatra" width="300" height="">
					</a>
				</div>

				<div id="collection-bottom">
					<h2>Тільки разом<small>
					<br> 
					ми зможемо надати допомогу тим, хто її потребує</small></h2>
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