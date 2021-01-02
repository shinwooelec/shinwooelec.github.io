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
			<h1>에스더블유전자(주) 회사 정보</h1>
			<!-- <p class="lead">Micro Switch, Volumn, Hinge</p> -->
			<div class="hero-unit">
				<div class="row">
					<div class="left span8">
						<h5>연락처</h5>
						<small>
							본사 : 경기도 안양시 동안구 관양동 799번지 안양메가밸리 209호
							<br>전화번호 : 031-420-4611-2
							<br>팩스 : 031-420-4613
							<br>이메일 : <a href='&#109;&#097;&#105;&#108;&#116;&#111;:&#104;&#115;&#112;&#097;&#114;&#107;&#052;&#057;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109' title="Contact via Email" target='_blank'>Send Email</a>
						</small> 
						<br><br>
						<div class="hidden-phone">
							<h5>찾아오시는 길</h5>
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
