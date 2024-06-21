<!DOCTYPE html>
	<html>
		<head>
			<?php
				
				require_once "blocks/head.php";
				require_once "functions/functions.php";
				$article = getArticle (1, $_GET["id"]);
				$title = $article["title"];
			?>
			<link rel="stylesheet" type="text/css" href="../css/counter-indication.css">
		</head>

		<body>
			<!--NAVIGATION-->
			<?php require_once "blocks/navigation.php" ?>
			<div id="language">
				<a href="../article.php"><img src="../icons/Ukraine.png" alt="logo" title="Украинский" width="30" height="30"></a>
				<a href="article.php"><img src="../icons/Russia.png" alt="logo" title="Русский" width="30" height="30"></a>
			</div>
			<!--NAVIGATION-->

			<!--HEADER -->
			<header>
				<div class="projects">
					<h1>Наши проекты</h1>
				<div>
			</header>
			<!--HEADER -->
			
			<!--MAIN -->
			<main id="mainproj">
				<div id="leftCol">

					<div class="container">
						<h2 class="collection-title">Помощь <small>тем, кто в ней нуждается</small></h2>
							<div class="collections">
								<div class="collection-item-outer">
									<?php 
										echo "<div class=\"collection-item\">";
										echo '<img src="../articles/'.$article["id"].'.jpg" title="'.$article["title"].'" alt="'.$article["title"].'">
													<div class="collection-text">
													<h3>'.$article["title"].'</h3>
													<p>'.$article["full_text"].'</p>
													</div>
													<div class="count_summary"><p>'.$article["Total"].'</p></div>
													<div class="progress-bar orange shine">
	 													<span style="width:'.$article["per"].'%"></span>
													</div>
												</div>';
									?>
								</div>
							</div>
					</div>

				</div>
				<div id="rightCol">
					<div id="banner1">
						<p><strong>Сделать пожертвование в один клик</strong></p>
						<br>
						<a href="https://my-payments.privatbank.ua/mypayments/customauth/identification/fp/static?staticToken=4829495205b0e57958536e611312d165wcea29rb" title="Онлайн пожертвование" target="_blank">
							<img src="../icons/credit-card.png" alt="One Click Donate" title = "One Click Donate" width="100" height="100">
						</a>
					</div>
				</div>
			</main>
			<!--MAIN -->

			<!--BOTTOM-->
			<div class="projects_bottom"></div>
			<!--BOTTOM-->

			<!--FOOTER-->
			<?php require_once "blocks/footer.php";?>
			<!--FOOTER-->
			
			<!--SCROLL-->
			<p id="back-top"><a href="#top"><span></span>Вверх</a></p>
			<!--SCROLL-->
		</body>

	</html>