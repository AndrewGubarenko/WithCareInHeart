<!--FOOTER -->
			<footer>
				<div id="stat">
				<?php
					if (isset($_GET['col'])) { $col=$_GET['col']; } else { $col=4999;}
						$file=file("count/stat.log");
					if ($col>sizeof($file)) { $col=sizeof($file); }
						echo "Сайт відвідано: <b>".$col."</b> разів"; 
				?> 
				</div>			
				<div id="rights">
					Всі права захищено &copy; <?php echo date('Y')?>
				</div>
				
				<div id="social">
					<a href="https://www.facebook.com/care4ua/" title="Група у FaceBook" target="_blank">
						<img src="icons/social/fb.png" alt="fb" title="FaceBook" width="30" height="30">
					</a>
					<a href="https://twitter.com/care_4_people" title="Група у Twetter" target="_blank">
						<img src="icons/social/twitter.png" alt="twitter" title="Twitter" width="30" height="30">
					</a>
					<a href="https://www.instagram.com/z_turbotoiu_u_sertsi" title="Група у LinkedIn" target="_blank">
						<img src="icons/social/instagram.png" alt="instagram" title="instagram" width="30" height="30">
					</a>
					<a href="https://www.youtube.com" title="Група у YouTube" target="_blank">
						<img src="icons/social/youtube.png" alt="youtube" title="YouTube" width="30" height="30">
					</a>
					<a href="https://vk.com/public129036902" title="Група у Vkontakte" target="_blank">
						<img src="icons/social/vk.png" alt="vk" title="VKontakte" width="30" height="30">
					</a>
				</div>
			</footer>
			<!--/FOOTER -->