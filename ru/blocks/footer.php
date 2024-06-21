<!--FOOTER -->
			<footer>
				<div id="stat">
				<?php
					if (isset($_GET['col'])) { $col=$_GET['col']; } else { $col=4999;}
						$file=file("../count/stat.log");
					if ($col>sizeof($file)) { $col=sizeof($file); }
						echo "Сайт посещено: <b>".$col."</b> раз"; 
				?> 
				</div>			
				<div id="rights">
					Все права защищены &copy; <?php echo date('Y')?>
				</div>
				
				<div id="social">
					<a href="https://www.facebook.com/groups/162454490917669/?ref=bookmarks" title="Группа в FaceBook" target="_blank">
						<img src="../icons/social/fb.png" alt="fb" title="FaceBook" width="30" height="30">
					</a>
					<a href="https://twitter.com/care_4_people" title="Группа в Twetter" target="_blank">
						<img src="../icons/social/twitter.png" alt="twitter" title="Twitter" width="30" height="30">
					</a>
					<a href="https://www.instagram.com/z_turbotoiu_u_sertsi" title="Группа в LinkedIn" target="_blank">
						<img src="../icons/social/instagram.png" alt="instagram" title="instagram" width="30" height="30">
					</a>
					<a href="https://www.youtube.com" title="Группа в YouTube" target="_blank">
						<img src="../icons/social/youtube.png" alt="youtube" title="YouTube" width="30" height="30">
					</a>
					<a href="https://vk.com/public129036902" title="Группа в Vkontakte" target="_blank">
						<img src="../icons/social/vk.png" alt="vk" title="VKontakte" width="30" height="30">
					</a>
				</div>
			</footer>
			<!--/FOOTER -->