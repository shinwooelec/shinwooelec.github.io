<!DOCTYPE html>
<html lang="en">
	<!-- head -->
		<?php session_start();
			$_SESSION['view']='contact';
			include ("head.php");
		?>
	<!-- / head -->
	<!-- navigation -->
		<?php
			$currentPage='contact';
			include ("nav.php");
		?>
	<!-- / navigation -->
	<body>

		<div class="container">
			<h1>SW Electronics Co. LTD Information</h1>
			<!-- <p class="lead">Micro Switch, Volumn, Hinge</p> -->
			<div class="hero-unit">
				<div class="row">
					<div class="left span8">
						<h5>Contact Infomation</h5>
						<small>
							Address: Room 209, Anyang Megavalley #799, Gwanyang-dong, Dongan-gu, Anyang-si, Gyeonggi-do 431-767, Korea
							<br>Phone: 82-31-420-4611,4612
							<br>Fax: 82-31-420-4613
							<br>Email : <a href='&#109;&#097;&#105;&#108;&#116;&#111;:&#104;&#115;&#112;&#097;&#114;&#107;&#052;&#057;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109' title="Contact via Email" target='_blank'>Send Email</a>
						</small> 
						<br><br>
						<div class="hidden-phone">
							<h5>Map to SW ELECTRONICS CO.,LTD</h5>
							<iframe width="620" height="450" src="http://map.creation.net/getMap?x=308762&y=533774&title=SW ELECTRONICS CO.,LTD&z=3" scrolling="no" frameborder="0"></iframe>
						</div>					
					</div>
				</div>
			</div>

			<hr class="hr">

			<!-- footer -->
			<?php
				$currentLanguage = 'english';
				include ("footer.php");
 			?>
			<!-- / footer -->

		</div>
		<!-- /container -->

		<!-- Le javascript
		================================================== -->
		<?php
			include ("javascript_include.php");
		?>
	</body>
</html>
