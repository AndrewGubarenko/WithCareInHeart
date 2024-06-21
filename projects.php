<!DOCTYPE html>
	<html>
		<head>
			<?php
				$title = "Наші проекти";
				require_once "blocks/head.php";
				require_once "functions/functions.php";
				$article = getArticle (3, '');
			?>
			<link rel="stylesheet" type="text/css" href="css/counter-indication.css">
		</head>

		<body>
			<!--NAVIGATION-->
			<?php require_once "blocks/navigation.php" ?>
			<div id="language">
				<a href="projects.php"><img src="icons/Ukraine.png" alt="logo" title="Українська" width="30" height="30"></a>
				<a href="ru/projects.php"><img src="icons/Russia.png" alt="logo" title="Російська" width="30" height="30"></a>
			</div>
			<!--NAVIGATION-->

			<!--HEADER -->
			<header>
				<div class="projects">
					<h1>Наші проекти</h1>
				<div>
			</header>
			<!--HEADER -->
			
			<!--MAIN -->
			<main id="mainproj">
				<div id="leftCol">

				<div class="container">
					<h2 class="collection-title">Допомога <small>тим, хто її потребує</small></h2>
						<div class="collections">
							<div class="collection-item-outer">
								<?php 
									for ($i = 0; $i < count($article); $i++){
										echo "<div class=\"collection-item\">";
										echo '<img src="articles/'.$article[$i]["id"].'.jpg" title="'.$article[$i]["title"].'" alt="'.$article[$i]["title"].'">
													<div class="collection-text">
													<h3>'.$article[$i]["title"].'</h3>
													<p>'.$article[$i]["intro_text"].'</p>
													</div>

						<a href="article.php?id='.$article[$i]["id"].'" target="_blank"><button id="but">Читати далі</button></a>

						<div class="count_summary"><p>'.$article[$i]["Total"].'</p></div>

						<div class="progress-bar orange shine">
	 						<span style="width: '.$article[$i]["per"].'%"></span>
						</div>
												</div>';
										echo "<div class=\"clear\"><br></div>";	
									}
								?>
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
			<div class="projects_bottom"></div>
			<!--BOTTOM-->

			<!--FOOTER-->
			<?php require_once "blocks/footer.php";?>
			<!--FOOTER-->
			
			<!--SCROLL-->
			<p id="back-top"><a href="#top"><span></span>Вгору</a></p>
			<!--SCROLL-->
		</body>

	</html>